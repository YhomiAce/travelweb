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
   <div class="pcoded-content mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-primary">
                    <div class="card-header bg-success">
                        <h4 class="text-center">Edit Post</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" id="edit-post-form" class="px-3" enctype = "multipart/form-data">
                            <input type="hidden" id="edit_post_id" name="edit_post_id" value="<?= $row['id']; ?>">
                            <div class="form-group">
                                <input type="text" name="edit_title" value="<?= $row['title']; ?>" id="edit_title" class="form-control form-control-lg" placeholder="Post Title" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="edit_author" value="<?= $row['author']; ?>" id="edit_author" class="form-control form-control-lg" placeholder="Author" required>
                            </div>
                            <div class="form-group">
                                <textarea name="edit_body" id="edit_body" class="form-control form-control-lg" placeholder="Content of The Post..." required rows="15"><?= $row['body']; ?>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Image</label>
                                <input type="file" class="form-control-file" id="edit_post_image" name="edit_post_image">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="editPost" id="editPostBtn" value="Update Post" class="btn btn-success btn-lg btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
<?php
    require_once "inc/footer.php";
?>
   