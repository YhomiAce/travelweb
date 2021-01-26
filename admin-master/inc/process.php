<?php
    require_once "config.php";
    
    // Add country
    if(isset($_FILES['image']) || isset($_FILES['flag']) || isset($_POST['name']) || isset($_POST['type']) || isset($_POST['duration']) || isset($_POST['price']) || isset($_POST['note'])){
        $name = htmlspecialchars($_POST['name']);
        $type = htmlspecialchars($_POST['type']);
        $duration = htmlspecialchars($_POST['duration']);
        $price = htmlspecialchars($_POST['price']);
        $note = htmlspecialchars($_POST['note']);
        $file_name = $_FILES['image']['name'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $flag_name = $_FILES['flag']['name'];
        $flag_tmp =$_FILES['flag']['tmp_name'];
        $imageNameToStore = uniqid().$file_name;
        $flagNameToStore = uniqid().$flag_name;
        
        $folder = '../../uploads/';
        $sql = "INSERT INTO country(name,type,duration,price,description,image,country_flag) VALUES(:name,:type,:duration,:price,:description,:image,:flag)";
        $stmt = $conn->prepare($sql);
        $save = $stmt->execute(['name'=>$name,'type'=>$type,'duration'=>$duration,'price'=>$price,'description'=>$note,'image'=>$imageNameToStore,'flag'=>$flagNameToStore]);
        if($save){
            move_uploaded_file($file_tmp,$folder.$imageNameToStore);
            move_uploaded_file($flag_tmp,$folder.$flagNameToStore);
        }
    }

    // fetch countries
    if(isset($_POST['action']) && $_POST['action'] =='fetch_countries'){
        $output = '';
        $sql = "SELECT * FROM country";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        if($result){
            $output .='<table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Country</th>
                    <th>Type of Relocation</th>
                    <th>Duration</th>
                    <th>Price</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
            foreach($result as $key=>$row){
                $output .= '<tr>
                <td>'.($key+1).'</td>
                <td>'.$row['name'].'</td>
                <td>'.$row['type'].'</td>
                <td>'.$row['duration'].'</td>
                <td>'.$row['price'].'</td>
                
                <td>
                    <a href="viewcountry.php?country_id='.$row['id'].'"" id="'.$row['id'].'" title="View details" class="text-success">
                    <i class="fas fa-info-circle fa-lg"></i>
                    </a>
                    <a href="editcountry.php?country_id='.$row['id'].'" id="'.$row['id'].'" title="Edit Country" class="text-primary">
                    <i class="fas fa-edit fa-lg"></i>
                    </a>
                    <a href="#" id="'.$row['id'].'" title="Delete Country" class="text-danger deleteBtn">
                    <i class="fas fa-trash-alt fa-lg"></i>
                    </a>
                </td>
            </tr>';
            }
            $output .='</tbody>
            </table>';
            echo $output;
        }else{
            echo '<h3 class="text-secondary text-center">No Country Saved. Click on Add New Country to write.!</h3>';
        }
        
    }

   // fetch particular country
   if(isset($_POST['editID'])){
       $id = $_POST['editID'];
       $sql = "SELECT * FROM country WHERE id = ?";
       $stmt = $conn->prepare($sql);
       $stmt->execute([$id]);
       $row = $stmt->fetch();
       echo json_encode($row);
   }

   // fetch particular country for view
   if(isset($_POST['InfoID'])){
       $id = $_POST['InfoID'];
       $sql = "SELECT * FROM country WHERE id = ?";
       $stmt = $conn->prepare($sql);
       $stmt->execute([$id]);
       $row = $stmt->fetch();
       echo json_encode($row);
   }

    // Update Country
    if(isset($_FILES['image_edit']) || isset($_FILES['flag_edit']) || isset($_POST['name_edit']) || isset($_POST['type_edit']) || isset($_POST['duration_edit']) || isset($_POST['price_edit']) || isset($_POST['note_edit'])){
        $name = htmlspecialchars($_POST['name_edit']);
        $type = htmlspecialchars($_POST['type_edit']);
        $id = $_POST['edit_id'];
        $duration = htmlspecialchars($_POST['duration_edit']);
        $price = htmlspecialchars($_POST['price_edit']);
        $note = htmlspecialchars($_POST['note_edit']);
        $file_name = $_FILES['image_edit']['name'];
        $file_tmp =$_FILES['image_edit']['tmp_name'];
        $flag_name = $_FILES['flag_edit']['name'];
        $flag_tmp =$_FILES['flag_edit']['tmp_name'];
        $imageNameToStore = uniqid().$file_name;
        $flagNameToStore = uniqid().$flag_name;

        if($file_name != null && $flag_name != null){
            $folder = '../../uploads/';
            $sql = "UPDATE country SET name=:name,type=:type,duration=:duration,price=:price,description=:description,image=:image,country_flag=:flag WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $save = $stmt->execute(['name'=>$name,'type'=>$type,'duration'=>$duration,'price'=>$price,'description'=>$note,'image'=>$imageNameToStore,'flag'=>$flagNameToStore,'id'=>$id]);
            if($save){
                move_uploaded_file($file_tmp,$folder.$imageNameToStore);
                move_uploaded_file($flag_tmp,$folder.$flagNameToStore);
            }
        }else{
            $sql = "UPDATE country SET name=:name,type=:type,duration=:duration,price=:price,description=:description WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $save = $stmt->execute(['name'=>$name,'type'=>$type,'duration'=>$duration,'price'=>$price,'description'=>$note,'id'=>$id]);
        }
        
    }

    // Delete Country
    if(isset($_POST['deleteID'])){
        $id = $_POST['deleteID'];
        $sql = "DELETE FROM country WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
    }

    // Create Post Backend
    if(isset($_FILES['post_image']) || isset($_POST['title']) || isset($_POST['author']) || isset($_POST['body']) ){
        $title = htmlspecialchars($_POST['title']);
        $author = htmlspecialchars($_POST['author']);
        $body = htmlspecialchars($_POST['body']);
        $file_name = $_FILES['post_image']['name'];
        $file_tmp =$_FILES['post_image']['tmp_name'];
        $postImage = date('d-m-y-h-i').$file_name;
        $folder = '../../uploads/';
        $sql = "INSERT INTO posts(title,body,author,post_image) VALUES(:title,:body,:author,:post_image)";
        $stmt = $conn->prepare($sql);
        $save = $stmt->execute(['title'=>$title,'body'=>$body,'author'=>$author,'post_image'=>$postImage]);
        if($save){
            move_uploaded_file($file_tmp,$folder.$postImage);
        }
    }


    // fetch posts
    if(isset($_POST['action']) && $_POST['action'] =='fetch_posts'){
        $output = '';
        $sql = "SELECT * FROM posts";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        if($result){
            $output .='<table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Body</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
            foreach($result as $key=>$row){
                $output .= '<tr>
                <td>'.($key+1).'</td>
                <td>'.$row['title'].'</td>
                <td>'.$row['author'].'</td>
                <td>'.substr($row['body'],0,30).'...</td>           
                <td>
                    <a href="viewpost.php?post_id='.$row['id'].'" id="'.$row['id'].'" title="View details" class="text-success">
                    <i class="fas fa-info-circle fa-lg"></i>
                    </a>
                    <a href="editpost.php?post_id='.$row['id'].'" id="'.$row['id'].'" title="Edit Post" class="text-primary">
                    <i class="fas fa-edit fa-lg"></i>
                    </a>
                    <a href="#" id="'.$row['id'].'" title="Delete Post" class="text-danger postDeleteBtn">
                    <i class="fas fa-trash-alt fa-lg"></i>
                    </a>
                </td>
            </tr>';
            }
            $output .='</tbody>
            </table>';
            echo $output;
        }else{
            echo '<h3 class="text-secondary text-center">No Country Saved. Click on Add New Country to write.!</h3>';
        }
        
    }

    // fetch a single post
   if(isset($_POST['EditPost'])){
        $id = $_POST['EditPost'];
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        echo json_encode($row);
    }

    // Update Post
    if(isset($_FILES['edit_post_image']) || isset($_POST['edit_title']) || isset($_POST['edit_body']) || isset($_POST['edit_author'])){
        $title = htmlspecialchars($_POST['edit_title']);
        $body = htmlspecialchars($_POST['edit_body']);
        $id = $_POST['edit_post_id'];
        $author = htmlspecialchars($_POST['edit_author']);
        $file_name = $_FILES['edit_post_image']['name'];
        $file_tmp =$_FILES['edit_post_image']['tmp_name'];
        $postImage = date('d-m-y-h-i').$file_name;

        if($file_name != null){
            $folder = '../../uploads/';
            $sql = "UPDATE posts SET title=:title,body=:body,author=:author,post_image=:post_image WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $save = $stmt->execute(['title'=>$title,'body'=>$body,'author'=>$author,'post_image'=>$postImage,'id'=>$id]);
            if($save){
                move_uploaded_file($file_tmp,$folder.$postImage);
            }
        }else{
            $sql = "UPDATE posts SET title=:title,body=:body,author=:author WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $save = $stmt->execute(['title'=>$title,'body'=>$body,'author'=>$author,'id'=>$id]);
        }
        
    }

    // Delete Post
    if(isset($_POST['PostDelete'])){
        $id = $_POST['PostDelete'];
        $sql = "DELETE FROM posts WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
    }

    // fetch particular post for view
   if(isset($_POST['ViewPost'])){
        $id = $_POST['ViewPost'];
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        echo json_encode($row);
    }

    // fetch contacts
    if(isset($_POST['action']) && $_POST['action'] =='fetch_contacts'){
        $output = '';
        $sql = "SELECT * FROM contacts";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        if($result){
            $output .='<table class="table table-striped table-responsive text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Requester Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
            foreach($result as $key=>$row){
                $output .= '<tr>
                <td>'.($key+1).'</td>
                <td>'.$row['full_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['phone'].'</td>
                <td>'.substr($row['message'],0,30).'...</td>
                
                <td>
                    <a href="#" id="'.$row['id'].'" title="View details" class="text-success infoContactBtn">
                    <i class="fas fa-info-circle" data-toggle="modal" data-target="#ContactModal"></i>
                    </a>
                    <a href="#" id="'.$row['id'].'" title="Delete Contact" class="text-danger deleteContactBtn">
                    <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>';
            }
            $output .='</tbody>
            </table>';
            echo $output;
        }else{
            echo '<h3 class="text-secondary text-center">No Contact Request Made</h3>';
        }
        
    }

    //fetch a contact
    if(isset($_POST['ViewContact'])){
        $id = $_POST['ViewContact'];
        $sql = "SELECT * FROM contacts WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        echo json_encode($row);
    }

    // Delete Contact
    if(isset($_POST['DeleteContact'])){
        $id = $_POST['DeleteContact'];
        $sql = "DELETE FROM contacts WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
    }

    // dashboard display
    if(isset($_POST['action']) && $_POST['action'] =='fetch_dashboard_data'){
        $sql = "SELECT * FROM country";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $country = $stmt->rowCount();

        $sql2 = "SELECT * FROM posts";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->execute();
        $post = $stmt2->rowCount();

        $sql3 = "SELECT * FROM contacts";
        $stmt3 = $conn->prepare($sql3);
        $stmt3->execute();
        $contact = $stmt3->rowCount();

        echo '<ul class="list-group">
        <li class="list-group-item"><h4>Countries:</h4> <button class="btn btn-info float-right">'. $country.'</button></li>
        <li class="list-group-item"><h4>Posts:</h4> <button class="btn btn-warning float-right">'. $post.'</button></li>
        <li class="list-group-item"><h4>Contacts:</h4> <button class="btn btn-success float-right">'. $contact.'</button></li>
    </ul>';
    }
   
?>