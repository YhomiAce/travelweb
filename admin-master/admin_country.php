<?php
    require_once "inc/header.php";
?>
   <div class="container pcoded-content">
        <div class="row justify-content-center">
            <div class="col-lg-12">                          
                <h2 class="text-center text-primary mt-2">Country Dashboard</h2>
            </div>
        </div>
        <div class="card border-primary">
            <h5 class="card-header bg-primary d-flex justify-content-between">
                <span class="text-light lead align-self-center">All Country</span>
                <a href="addcountry.php" class="btn btn-light"><i class="fas fa-plus-circle fa-lg"></i>&nbsp;Add Country</a>
            </h5>
            <div class="card-body">
                <img src="images/spinner.gif" id="loaderCountry" alt="" style="display:none;">
                
                <div class="table-responsive" id="showNote"></div>
        </div>
   </div>
<?php
    require_once "inc/footer.php";
?>
   