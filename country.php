<?php
    require_once "inc/header.php";
    require_once "inc/config.php";

    $sql = "SELECT * FROM country";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll();
    // print_r($rows);
?>

<div class="page">
       
       <!-- page-title -->
       <div class="cmt-page-title-row">
           <div class="cmt-page-title-row-inner">
               <div class="container">
                   <div class="row align-items-center">
                       <div class="col-lg-12">
                           <div class="page-title-heading">
                               <h2 class="title">About Our Visa Consultancy</h2>
                               <p>Founded In 1996 New York,USA</p>
                           </div>
                           <div class="breadcrumb-wrapper">
                               <span>
                                   <a title="Homepage" href="index.php">Home</a>
                               </span>
                               <span>Country</span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>                    
       </div>
       <!-- page-title end -->

       <section class="cmt-row services_row-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-9 col-11 m-auto">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>Favourite destination</h5>
                                <h2 class="title">For The Immigration, Choose <strong> Country!</strong></h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div><!-- row end -->
                <!-- slick_slider -->
                <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false,  "dots":false, "autoplay":true, "centerMode":false, "centerPadding":0, "infinite":true, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 3}} , {"breakpoint":777,"settings":{"slidesToShow": 2}}, {"breakpoint":500,"settings":{"slidesToShow": 1}}]}'>
                    <?php foreach($rows as $row): ?>
                    <div class="cmt-box-col-wrapper col-lg-12">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-country style1 bor_rad_5">
                            <div class="cmt-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail bor_rad_5">
                                    <a href="#" tabindex="-1"> 
                                        <img class="img-fluid" src="uploads/<?= $row['image'];?>" alt="image">
                                    </a>
                                </div><!-- featured-thumbnail end-->
                                <div class="featured-content">
                                    <div class="featured-content-icon_img-block">
                                        <img class="img-fluid" src="uploads/<?= $row['country_flag'];?>" alt="image">
                                    </div>
                                    <div class="featured-title">
                                        <h5><a href="single-country.php?country_id=<?=$row['id']; ?>" tabindex="-1"><?= $row['name'];?></a></h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We will help you in every step of the Visa application process.</p>
                                    </div>
                                    <a class="cmt-btn cmt-btn-size-sm btn-inline cmt-btn-color-skincolor" href="single-country.php?country_id=<?=$row['id']; ?>" tabindex="-1">Read More</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <?php endforeach; ?>
                                       
                    
                    
                </div><!-- row end -->
                
            </div>
        </section>
</div>

<?php
    require_once "inc/footer.php";
?>