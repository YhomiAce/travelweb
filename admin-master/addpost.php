<?php
    require_once "inc/header.php";
?>
   <div class="pcoded-content mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-primary">
                    <div class="card-header bg-primary">
                        <h4 class="text-center">Create New Post</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" id="add-post-form" class="px-3" enctype = "multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="title" id="title" class="form-control form-control-lg" placeholder="Post Title" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="author" id="author" class="form-control form-control-lg" placeholder="Author" required>
                            </div>
                            <div class="form-group">
                                <textarea name="body" id="body" class="form-control form-control-lg" placeholder="Content of The Post..." required rows="15"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Image</label>
                                <input type="file" class="form-control-file" id="post_image" name="post_image" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="addPost" id="addPostBtn" value="Create Post" class="btn btn-primary btn-lg btn-block">
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
   