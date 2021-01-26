<?php
    require_once "inc/header.php";
?>
   <div class="container pcoded-content">
        <div class="row">
            <div class="col-lg-12">               
                <h2 class="text-center text-primary mt-2">Posts Dashboard</h2>
            </div>
        </div>
        <div class="card border-primary">
            <h5 class="card-header bg-primary d-flex justify-content-between">
                <span class="text-light lead align-self-center">All Posts</span>
                <a href="addpost.php" class="btn btn-light"><i class="fas fa-plus-circle fa-lg"></i>&nbsp;Add New Post</a>
            </h5>
            <div class="card-body">
                <img src="images/spinner.gif" id="loaderPost" alt="" style="display:none;">
                <div class="table-responsive" id="showPost">

                </div>
            </div>
        </div>
   </div>
<?php
    require_once "inc/footer.php";
?>
   