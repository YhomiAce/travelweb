<?php
    require_once "inc/header.php";
    require_once "../inc/config.php";
    if(isset($_GET['country_id'])){
        $id = $_GET['country_id'];
        $sql = "SELECT * FROM country WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
    }else{
        header("location:admin_country.php");
    }
?>
   <div class="pcoded-content container mt-4">
        <div class="row px-5">
            <div class="col-md-12 mt-2">
                <img src="../uploads/<?= $row['image'];?>" class="img-thumbnail">
            </div>
            <div class="col-md-6 mt-4">
                
                 <h3 class="mt-2 mb-2">Country Name: <span  class="text-primary"><?=$row['name'] ;?></span></h3>
                <h3 class="mt-2 mb-2">Duration:<span class="text-danger"><?=$row['duration'] ;?></span> </h3>
                <h3 class="mt-2 mb-2">Type of Relocation:<span class="text-secondary"><?=$row['type'] ;?></span> </h3>
                <h3 class="mt-2 mb-4">Estimated Cost: <span class="text-warning"><?=$row['price'] ;?></span></h3>
                <a href="admin_country.php" class="btn btn-secondary mt-4">Back</a>
            </div>
            <div class="col-md-6 mt-4">
                <img src="../uploads/<?= $row['country_flag'];?>" class="img-thumbnail">
                <h4 class="text-info mt-4">About The Process</h4>
                <br>
                <div class="px-2 mb-4"><?= $row['description']; ?></div>
            </div>
            
        </div>
   </div>
<?php
    require_once "inc/footer.php";
?>
   