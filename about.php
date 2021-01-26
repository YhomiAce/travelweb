<?php
    require_once "inc/header.php";
    require_once "inc/config.php";

    $sql = "SELECT * FROM posts ORDER BY RAND() limit 7";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll();
?>

<!--page start-->
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
                                   <a title="Homepage" href="index.html">Home</a>
                               </span>
                               <span>About Us</span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>                    
       </div>
       <!-- page-title end -->


   <!--site-main start-->
   <div class="site-main">

       
       <!--about-section-->
       <section class="cmt-row about_2-section clearfix">
           <div class="container">
               <div class="row">
                   <div class="col-lg-4 col-md-4 col-sm-5 col-5 mr-lg-auto ml-lg-0 offset-3">
                       <div class="cmt-bg cmt-col-bgcolor-yes cmt-bgcolor-grey pt-25 pb-25 pl-25 pr-25 ml-80 res-991-ml-0">
                           <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                           <div class="layer-content">
                               <div class="cmt-bgcolor-white pt-60 pb-50 res-991-pt-50 res-991-pb-40">
                                   <div class="col-lg-12">
                                 <div class="ttm_single_image-wrapper ml_110 mr_200 res-575-mr_140">
                                       <img class="img-fluid" src="images/single-img-08.jpg" alt="">
                                   </div>      
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-12 col-xs-12">
                       <div class="pt-15 pr-30 mb_30 res-991-pr-0 res-991-pt-30">
                           <!-- section title -->
                           <div class="section-title">
                               <div class="title-header">
                                   <h5>why choose us</h5>
                                   <h2 class="title">Why Choose <strong>Tripzia Visa Consultancy?</strong></h2>
                               </div>
                           </div><!-- section title end -->
                           <p>Foundation was established with a small idea that was incepted in the minds of its promoters in the year 1994! We skillfully guide the applicants for their immigration process to any country they aspire to settle. </p>
                           <div class="pt-10 pr-15 res-991-pr-0">
                               <!-- featured-icon-box -->
                               <div class="featured-icon-box icon-align-before-content style2">
                                   <div class="featured-icon">
                                       <div class="cmt-icon cmt-icon_element-border cmt-icon_element-color-skincolor cmt-icon_element-size-lg cmt-icon_element-style-square"> 
                                           <i class="flaticon-policy"></i>
                                       </div>
                                   </div>
                                   <div class="featured-content">
                                       <div class="featured-title">
                                           <h5><a href="#">Accurate Guidance</a></h5>
                                       </div>
                                       <div class="featured-desc">
                                           <p>Skilled professionals are always ready to provide reliable services to our clients!</p>
                                       </div>
                                   </div>
                               </div><!-- featured-icon-box end -->
                               <!-- featured-icon-box -->
                               <div class="featured-icon-box icon-align-before-content style2">
                                   <div class="featured-icon">
                                       <div class="cmt-icon cmt-icon_element-border cmt-icon_element-color-skincolor cmt-icon_element-size-lg cmt-icon_element-style-square"> 
                                           <i class="flaticon-contract"></i>
                                       </div>
                                   </div>
                                   <div class="featured-content">
                                       <div class="featured-title">
                                           <h5><a href="#">Our Presence</a></h5>
                                       </div>
                                       <div class="featured-desc">
                                           <p>Branches are situated in major metro cities and overseas, always open for you!</p>
                                       </div>
                                   </div>
                               </div><!-- featured-icon-box end -->
                           </div>
                       </div>
                   </div>
               </div><!-- row end -->
           </div>
       </section>
       <!--about-section end-->


       <!--broken-section-->
       <section class="cmt-row broken-section bg-layer-equal-height clearfix">
           <div class="container">
               <div class="row no-gutters">
                   <div class="col-lg-6">
                       <div class="cmt-bg cmt-col-bgcolor-yes cmt-left-span cmt-bgcolor-darkgrey spacing-6">
                           <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                           <div class="layer-content">
                               <div class="pl-15 mt-2 text-left res-991-pl-0 res-991-mt-15">
                                   <!-- section title -->
                                   <div class="section-title">
                                       <div class="title-header">
                                           <h5>ABOUT consultant</h5>
                                           <h2 class="title">Immigration Services From <strong>Experienced Agents.</strong></h2>
                                       </div>
                                   </div><!-- section title end -->
                                   <p>Foundation was established with a small idea that was incepted in the minds of its promoters in the year 1994! We skillfully guide applicants for their immigration process to any country they aspire to settle. <a class="cmt-textcolor-skincolor" href="#">Read More</a></p>
                                   <div class="pt-10">
                                       <!-- cmt-progress-bar -->
                                       <div class="cmt-progress-bar" data-percent="92%">
                                           <div class="progressbar-title">Immigration Consultant</div>
                                           <div class="progress-bar-inner">
                                               <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                           </div>
                                           <div class="progress-bar-percent" data-percentage="92"></div>
                                       </div><!-- cmt-progress-bar end -->
                                       <!-- cmt-progress-bar -->
                                       <div class="cmt-progress-bar clearfix" data-percent="80%">
                                           <div class="progressbar-title">Study and work visa</div>
                                           <div class="progress-bar-inner">
                                               <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                           </div>
                                           <div class="progress-bar-percent" data-percentage="80"></div>
                                       </div><!-- cmt-progress-bar end -->
                                       <!-- cmt-progress-bar -->
                                       <div class="cmt-progress-bar clearfix" data-percent="88%">
                                           <div class="progressbar-title">buisness visit visa</div>
                                           <div class="progress-bar-inner">
                                               <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                           </div>
                                           <div class="progress-bar-percent" data-percentage="88"></div>
                                       </div><!-- cmt-progress-bar end -->
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-12 mx-auto">
                       <!-- col-img-img-five -->
                       <div class="cmt-bg cmt-col-bgimage-yes col-bg-img-five cmt-right-span">
                           <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                           <div class="layer-content h-100">
                               <div class="col-lg-7 col-md-4 p-0 h-100">
                                   <div class="cmt-bgcolor-skincolor d-flex flex-column h-100 justify-content-between featured-icon-box icon-align-top-content style7">
                                       <div class="featured-content cmt-bgcolor-skincolor bor_rad_5">
                                           <div class="featured-title">
                                               <h5>The Future Of Bussiness <strong>Visa Consulting.</strong></h5>
                                           </div>
                                       </div>
                                       <a class="cmt-btn btn-inline cmt-btn-size-sm cmt-icon-btn-left cmt-btn-color-white" href="contact.php" title=""><i class="fa fa-minus"></i>Contact us</a>
                                   </div>
                               </div>
                           </div>
                       </div><!-- col-img-bg-img-five end-->
                   </div>
               </div><!-- row end -->
           </div>
       </section>
       <!--broken-section end-->


       <!--team-section-->
       <section class="cmt-row team-section clearfix">
           <div class="container">
               <!-- section title -->
               <div class="section-title title-style-center_text">
                   <div class="title-header">
                       <h5>Skillful Professionals</h5>
                       <h2 class="title">Meet Our <strong>Dedicated Team!</strong></h2>
                   </div>
               </div><!-- section title end -->
               <!-- row -->
               <div class="row slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":991,"settings":{"slidesToShow": 3}}, {"breakpoint":678,"settings":{"slidesToShow": 2}}, {"breakpoint":460,"settings":{"slidesToShow": 1}}]}'>
                   <div class="cmt-box-col-wrapper col-lg-4">
                       <!-- featured-imagebox-team -->
                       <div class="featured-imagebox featured-imagebox-team bor_rad_5">
                           <div class="cmt-team-box-view-overlay">
                               <div class="featured-iconbox cmt-media-link">
                                   <div class="media-block">
                                       <ul class="social-icons">
                                           <li class="social-twitter"><a href="#"><i class="ti ti-twitter-alt"></i></a></li>
                                           <li class="social-facebook"><a href="#"><i class="ti ti-facebook"></i></a></li>
                                           <li class="social-instagram"><a href="#"><i class="ti ti-instagram"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="featured-thumbnail">
                                   <img class="img-fluid" src="images/team-member/team-img01.jpg" alt="image"> 
                               </div>
                           </div>
                           <div class="featured-content featured-content-team">
                               <div class="featured-title">
                                   <h5><a href="team-details.php">Melika Fonals</a></h5>
                               </div>
                               <div class="team-position">Migration Agent</div>
                           </div>
                       </div><!-- featured-imagebox-team end-->
                   </div>
                   <div class="cmt-box-col-wrapper col-lg-4">
                       <!-- featured-imagebox-team -->
                       <div class="featured-imagebox featured-imagebox-team bor_rad_5">
                           <div class="cmt-team-box-view-overlay">
                               <div class="featured-iconbox cmt-media-link">
                                   <div class="media-block">
                                       <ul class="social-icons">
                                           <li class="social-twitter"><a href="#"><i class="ti ti-twitter-alt"></i></a></li>
                                           <li class="social-facebook"><a href="#"><i class="ti ti-facebook"></i></a></li>
                                           <li class="social-instagram"><a href="#"><i class="ti ti-instagram"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="featured-thumbnail">
                                   <img class="img-fluid" src="images/team-member/team-img02.jpg" alt="image">
                               </div>
                           </div>
                           <div class="featured-content featured-content-team">
                               <div class="featured-title">
                                   <h5><a href="team-details.php">Sophia Arthur</a></h5>
                               </div>
                               <div class="team-position">Migration Agent</div>
                           </div>
                       </div><!-- featured-imagebox-team end-->
                   </div>
                   <div class="cmt-box-col-wrapper col-lg-4">
                       <!-- featured-imagebox-team -->
                       <div class="featured-imagebox featured-imagebox-team bor_rad_5">
                           <div class="cmt-team-box-view-overlay">
                               <div class="featured-iconbox cmt-media-link">
                                   <div class="media-block">
                                       <ul class="social-icons">
                                           <li class="social-twitter"><a href="#"><i class="ti ti-twitter-alt"></i></a></li>
                                           <li class="social-facebook"><a href="#"><i class="ti ti-facebook"></i></a></li>
                                           <li class="social-instagram"><a href="#"><i class="ti ti-instagram"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="featured-thumbnail">
                                   <img class="img-fluid" src="images/team-member/team-img03.jpg" alt="image"> 
                               </div>
                           </div>
                           <div class="featured-content featured-content-team">
                               <div class="featured-title">
                                   <h5><a href="team-details.php">Robert Walter</a></h5>
                               </div>
                               <div class="team-position">Migration Agent</div>
                           </div>
                       </div><!-- featured-imagebox-team end-->
                   </div>
                   <div class="cmt-box-col-wrapper col-lg-4">
                       <!-- featured-imagebox-team -->
                       <div class="featured-imagebox featured-imagebox-team bor_rad_5">
                           <div class="cmt-team-box-view-overlay">
                               <div class="featured-iconbox cmt-media-link">
                                   <div class="media-block">
                                       <ul class="social-icons">
                                           <li class="social-twitter"><a href="#"><i class="ti ti-twitter-alt"></i></a></li>
                                           <li class="social-facebook"><a href="#"><i class="ti ti-facebook"></i></a></li>
                                           <li class="social-instagram"><a href="#"><i class="ti ti-instagram"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="featured-thumbnail">
                                   <img class="img-fluid" src="images/team-member/team-img04.jpg" alt="image"> 
                               </div>
                           </div>
                           <div class="featured-content featured-content-team">
                               <div class="featured-title">
                                   <h5><a href="team-details.php">Michael Grey</a></h5>
                               </div>
                               <div class="team-position">Migration Agent</div>
                           </div>
                       </div><!-- featured-imagebox-team end-->
                   </div>
                   <div class="cmt-box-col-wrapper col-lg-4">
                       <!-- featured-imagebox-team -->
                       <div class="featured-imagebox featured-imagebox-team bor_rad_5">
                           <div class="cmt-team-box-view-overlay">
                               <div class="featured-iconbox cmt-media-link">
                                   <div class="media-block">
                                       <ul class="social-icons">
                                           <li class="social-twitter"><a href="#"><i class="ti ti-twitter-alt"></i></a></li>
                                           <li class="social-facebook"><a href="#"><i class="ti ti-facebook"></i></a></li>
                                           <li class="social-instagram"><a href="#"><i class="ti ti-instagram"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="featured-thumbnail">
                                   <img class="img-fluid" src="images/team-member/team-img05.jpg" alt="image"> 
                               </div>
                           </div>
                           <div class="featured-content featured-content-team">
                               <div class="featured-title">
                                   <h5><a href="team-details.php">John Doe</a></h5>
                               </div>
                               <div class="team-position">Migration Agent</div>
                           </div>
                       </div><!-- featured-imagebox-team end-->
                   </div>
               </div><!-- row end -->
               <div class="row">
                   <div class="col-lg-12">
                       <div class="mt-35 text-center res-991-mt-20">
                           <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-border cmt-btn-color-dark" href="team.php">View more taem!</a>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!--team-section end-->


       <!--testimonial-section-->
       <section class="cmt-row testimonial-section cmt-bgcolor-grey clearfix">
           <div class="container">
               <div class="row">
                   <div class="col-xl-6 col-xs-12">
                       <div class="pt-65 res-1199-pt-0">
                           <!-- section title -->
                           <div class="section-title">
                               <div class="title-header">
                                   <h5>ABOUT AGENCY</h5>
                                   <h2 class="title">Immigration Services From <strong>Experienced Agents.</strong></h2>
                               </div>
                           </div><!-- section title end -->
                           <p>Lorem Ipsum is simply dummy text of the printing ypesetting industry.Professor at Hampden-Sydney been tndustry dard dummy text ever since the 1500s, when aknown contary tonter.</p>
                           <div class="featuredbox-number">
                               <!--featured-icon-box-->
                               <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                                   <div class="featured-icon">
                                       <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-skincolor cmt-icon_element-size-xs cmt-icon_element-style-rounded"> 
                                           <i class="cmt-num ti-info"></i>
                                       </div>
                                   </div>
                                   <div class="featured-content">
                                       <div class="featured-title">
                                           <h5>We modify whole system</h5>
                                       </div>
                                       <div class="featured-desc">
                                           <p>To guard, Avoid Revealing Too Much, Apply for a Provisional Patent, Trademark.</p>
                                       </div>
                                   </div>
                               </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->
                               <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                                   <div class="featured-icon">
                                       <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-skincolor cmt-icon_element-size-xs cmt-icon_element-style-rounded"> 
                                           <i class="cmt-num ti-info"></i>
                                       </div>
                                   </div>
                                   <div class="featured-content">
                                       <div class="featured-title">
                                           <h5>Safeguard for Your Bussiness</h5>
                                       </div>
                                       <div class="featured-desc">
                                           <p>To guard, Avoid Revealing Too Much, Apply for a Provisional Patent, Trademark.</p>
                                       </div>
                                   </div>
                               </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->
                               <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                                   <div class="featured-icon">
                                       <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-skincolor cmt-icon_element-size-xs cmt-icon_element-style-rounded"> 
                                           <i class="cmt-num ti-info"></i>
                                       </div>
                                   </div>
                                   <div class="featured-content">
                                       <div class="featured-title">
                                           <h5>Beneficial Strategies </h5>
                                       </div>
                                       <div class="featured-desc">
                                           <p>To guard, Avoid Revealing Too Much, Apply for a Provisional Patent, Trademark.</p>
                                       </div>
                                   </div>
                               </div><!-- featured-icon-box end-->
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-6">
                       <div class="testimonials-nav z-index-2" >
                           <div class="testimonial-nav_item">
                               <div class="nav_item">
                                   <img class="img-fluid" src="images/testimonial/nav-01.jpg" alt="testimonial-nav_item">
                               </div>
                           </div>
                           <div class="testimonial-nav_item">
                               <div class="nav_item">
                                   <img class="img-fluid" src="images/testimonial/nav-02.jpg" alt="testimonial-nav_item">
                               </div>
                           </div>
                           <div class="testimonial-nav_item">
                               <div class="nav_item">
                                   <img class="img-fluid" src="images/testimonial/nav-03.jpg" alt="testimonial-nav_item">
                               </div>
                           </div>
                           <div class="testimonial-nav_item">
                               <div class="nav_item">
                                   <img class="img-fluid" src="images/testimonial/nav-04.jpg" alt="testimonial-nav_item">
                               </div>
                           </div>
                       </div>
                       <div class="cmt-col-bgcolor-yes cmt-bgcolor-skincolor cmt-col-bgimage-yes cmt-bg col-bg-img-one cmt-right-span cmt-bg-pattern spacing-1">
                           <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                               <div class="cmt-col-wrapper-bg-layer-inner"></div>
                           </div>
                           <div class="layer-content">
                               <div class="testimonials-info">
                                   <!-- testimonials -->
                                   <div class="testimonials">
                                       <div class="testimonial-avatar">
                                           <div class="testimonial-img">
                                               <img class="img-fluid" src="images/testimonial/01.jpg" alt="testimonial-img">
                                           </div>
                                       </div>
                                       <div class="testimonial-content">
                                           <blockquote class="testimonial-text">I really would like to appreciate Tripzia and the entire team, especially Ms Anandias Alex for helping me get my student visa for the Brunel University. She helped me all way to find the University & right course. She was there for me through the entire process.</blockquote>
                                           <div class="testimonial-bottom">
                                               <div class="testimonial-caption cmt-textcolor-white">
                                                   <h5>RAshley Foster</h5>
                                                   <label>(CEO 7 Founder)</label>
                                               </div>
                                               <div class="star-ratings">
                                                   <ul class="rating">
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                   </ul>
                                               </div>
                                           </div>
                                       </div>
                                   </div><!-- testimonials end -->
                                   <!-- testimonials -->
                                   <div class="testimonials"> 
                                       <div class="testimonial-avatar">
                                           <div class="testimonial-img">
                                               <img class="img-fluid" src="images/testimonial/02.jpg" alt="testimonial-img">
                                           </div>
                                       </div>
                                       <div class="testimonial-content">
                                           <blockquote class="testimonial-text">I really would like to appreciate Tripzia and the entire team, especially Ms Anandias Alex for helping me get my student visa for the Brunel University. She helped me all way to find the University & right course. She was there for me through the entire process.</blockquote>
                                           <div class="testimonial-bottom">
                                               <div class="testimonial-caption cmt-textcolor-white">
                                                   <h5>Alan Sears</h5>
                                                   <label>(CEO 7 Founder)</label>
                                               </div>
                                               <div class="star-ratings">
                                                   <ul class="rating">
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                   </ul>
                                               </div>
                                           </div>
                                       </div>
                                   </div><!-- testimonials end -->
                                   <!-- testimonials -->
                                   <div class="testimonials"> 
                                       <div class="testimonial-avatar">
                                           <div class="testimonial-img">
                                               <img class="img-fluid" src="images/testimonial/03.jpg" alt="testimonial-img">
                                           </div>
                                       </div>
                                       <div class="testimonial-content">
                                           <blockquote class="testimonial-text">I really would like to appreciate Tripzia and the entire team, especially Ms Anandias Alex for helping me get my student visa for the Brunel University. She helped me all way to find the University & right course. She was there for me through the entire process.</blockquote>
                                           <div class="testimonial-bottom">
                                               <div class="testimonial-caption cmt-textcolor-white">
                                                   <h5>Raymon Myers</h5>
                                                   <label>(CEO 7 Founder)</label>
                                               </div>
                                               <div class="star-ratings">
                                                   <ul class="rating">
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                   </ul>
                                               </div>
                                           </div>
                                       </div>
                                   </div><!-- testimonials end -->
                                   <!-- testimonials -->
                                   <div class="testimonials"> 
                                       <div class="testimonial-avatar">
                                           <div class="testimonial-img">
                                               <img class="img-fluid" src="images/testimonial/04.jpg" alt="testimonial-img">
                                           </div>
                                       </div>
                                       <div class="testimonial-content">
                                           <blockquote class="testimonial-text">I really would like to appreciate Tripzia and the entire team, especially Ms Anandias Alex for helping me get my student visa for the Brunel University. She helped me all way to find the University & right course. She was there for me through the entire process.</blockquote>
                                           <div class="testimonial-bottom">
                                               <div class="testimonial-caption cmt-textcolor-white">
                                                   <h5>Jhon Martin</h5>
                                                   <label>(CEO 7 Founder)</label>
                                               </div>
                                               <div class="star-ratings">
                                                   <ul class="rating">
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                       <li><i class="fa fa-star-o"></i></li>
                                                   </ul>
                                               </div>
                                           </div>
                                       </div>
                                   </div><!-- testimonials end -->
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!--testimonial-section end-->


       <!--blog-section-->
       <section class="cmt-row blog-section clearfix">
           <div class="container">
               <!-- row -->
               <div class="row align-items-center">
                   <div class="col-xl-9 col-lg-9 col-md-12">
                       <!-- section title -->
                       <div class="section-title">
                           <div class="title-header">
                               <h5>our latest news/blog</h5>
                               <h2 class="title">our work business <strong>innovation!</strong></h2>
                           </div>
                       </div><!-- section title end -->
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-12">
                       <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-border cmt-btn-color-dark mb-30 float-lg-right" href="blog.php">View More News</a>
                   </div>
               </div><!-- row end -->
               <!-- slick_slider -->
               <div class="row slick_slider mt-15" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "centerMode":true, "initialSlide":2, "centerPadding":0, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 2}}, {"breakpoint":540,"settings":{"slidesToShow": 1}}]}'>
               <?php foreach($rows as $row): ?>
                    <div class="cmt-box-col-wrapper col-lg-12">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style3">
                            <div class="cmt-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="uploads/<?= $row['post_image'];?>" alt="image">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-header">
                                    <div class="post-title featured-title">
                                        <h5><a href="blog-single.php?post_id=<?=$row['id']; ?>"><?=$row['title']; ?></a></h5>
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <span class="cmt-meta-line byline">
                                        <img class="img-fluid" src="images/blog/b_thumbb-01.jpg" alt="post-img /"><?=$row['author']; ?>
                                    </span>
                                    <span class="cmt-meta-line post-date"><i class="fa fa-calendar"></i><?= date('d M Y',strtotime($row['created_at'])); ?></span>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p><?= substr($row['body'],0,50);?></p>
                                </div>
                                <div class="post-bottom cmt-post-link">
                                    <a class="cmt-btn cmt-btn-size-sm cmt-icon-btn-left cmt-btn-color-skincolor btn-inline" href="blog-single.php?post_id=<?=$row['id']; ?>" tabindex="0"><i class="fa fa-minus"></i>Read more</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <?php endforeach; ?>    
                   
                   
               </div>
           </div>
       </section>
       <!--blog-section end-->


   </div><!--site-main end-->

<?php
    require_once "inc/footer.php";
?>