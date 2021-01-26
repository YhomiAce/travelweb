<?php
    require_once "inc/header.php";
    require_once "inc/config.php";
    if(isset($_GET['post_id'])){
        $id = $_GET['post_id'];
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
    }else{
        header("location:admin_post.php");
    }
?>
   <div class="pcoded-content container mt-4">
        <div class="row px-5">
            
            <div class="col-md-6 mt-4">
                <img src="../uploads/<?= $row['post_image'];?>" class="img-thumbnail">
                                 
            </div>
            <div class="col-md-6 mt-4">

                <h2 class="text-primary mt-4"><span><?= $row['title']; ?></span></h2>
                <h4>Written By: <span class="text-success mt-2"><?= $row['author']; ?></span></h4>
                <h5>Date posted: <span class="text-secondary mt-2"><?= $row['created_at']; ?></span></h5>
                <br>
                <div class="px-2 mb-4"><?= $row['body']; ?></div>
            </div>
            <a href="admin_post.php" class="btn btn-secondary mt-4">Back</a>
        </div>
   </div>
<?php
    require_once "inc/footer.php";
?>
   