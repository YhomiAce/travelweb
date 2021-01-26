<?php
    require_once "inc/header.php";
    require_once "inc/config.php";
    $results_per_page = 7;
    $sql = "SELECT * FROM country";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->rowCount();
   //  echo '<h1 class="text-danger">'.$result.'</h1>';
     $number_of_pages = ceil($result/$results_per_page);

    

    if(!isset($_GET['page'])){
       $page =1;
    }else{
       $page = $_GET['page'];
    }

    $pageNum = ($page-1)* $results_per_page;
    $sql = "SELECT * FROM country LIMIT :initial,:final";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['initial'=>$pageNum,'final'=>$results_per_page]);
    $rows = $stmt->fetchAll();
    
?>
   <div class="pcoded-content mt-4 px-5 container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h2 class="text-center text-primary mb-4">All Countries List</h2>
                <ul class="list-group">
                    <?php foreach($rows as $key=>$row) : ?>
                    <li class="list-group-item"><?=($key+1) ;?>: <span></span><?= $row['name']; ?> 
                    <a href="viewcountry.php?country_id=<?=$row['id']; ?>" class="btn btn-secondary float-right"> View Country</a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
               <div class="col text-center">
               <?php for($page=1; $page<=$number_of_pages;$page++): ?>
                  <a href="countrylist.php?page=<?= $page; ?>" class="btn btn-primary"><?= $page ;?></a>
               <?php endfor; ?>
               </div>
        </div>
   </div>

<?php
    require_once "inc/footer.php";
?>
   