<?php 
    require_once "inc/header.php";
    require_once "inc/config.php";
    if(isset($_GET['country_id'])){
        $id = $_GET['country_id'];
        $sql = "SELECT * FROM country WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        if($row == null){
            header("Location:error.php");
        }

        $sql2 = "SELECT * FROM country";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->execute();
        $rows = $stmt2->fetchAll();
    }else{
        header("Location:error.php");
    }
?>


        <!-- page-title -->
        <div class="cmt-page-title-row">
            <div class="cmt-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title"><?=$row['name']; ?></h2>
                                <p>Founded In 1996 New York,USA</p>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span><?=$row['name']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
        <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">

        <div class="cmt-row sidebar cmt-sidebar-left cmt-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-4 ttm-col-bgcolor-yes cmt-bg cmt-left-span cmt-bgcolor-grey mt_80 pt-60 mb_80 pb-60 res-991-mt-0 res-991-pt-0 widget-area sidebar-left">
                        <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu">
                                <?php foreach($rows as $cun) : ?>
                                    <li class="<?= ($_GET['country_id'] == $cun['id']) ? "active" : "" ;?> "><a href="single-country.php?country_id=<?=$cun['id']; ?>"><?=$cun['name']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </aside>
                        <aside class="widget widget-contact">
                            <img class="img-fluid" src="images/single-img-12.jpg" alt="single_12" />
                            <div class="cmt-col-bgcolor-yes cmt-bgcolor-skincolor cmt-bg pt-20 pl-20 pr-20 pr-20 pb-20">
                                <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                                    <div class="cmt-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <p class="mb-10">Our Appoinment Service Call Us</p>
                                    <h4><i class="flaticon-call mr-3"></i>+123 456 7890</h4>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget widget-form with-title">
                            <h3 class="widget-title">Free Immigration Assessment</h3>
                            <form id="immigration_form" class="immigration_form wrap-form clearfix" method="post" novalidate="novalidate" action="#">
                                <label>
                                    <span class="text-input"><input name="name" type="text" value="" placeholder="Your" required="required"></span>
                                </label>
                                <label>
                                    <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone" required="required"></span>
                                </label>
                                <label>
                                    <span class="text-input">
                                        <select id="search_category" name="search_category" aria-invalid="false">
                                            <option value="Select Visa">Select Visa</option>
                                            <option value="Business Visa">Business Visa</option>
                                            <option value="Diplomatic & Offical Visa">SDiplomatic & Offical Visa</option>
                                            <option value="Family Visa">Family Visa</option>
                                            <option value="Student Visa">Student Visa</option>
                                            <option value="Temporary Work Visa">Temporary Work Visa</option>
                                            <option value="Visitor Visa">Visitor Visa</option>
                                        </select>
                                    </span>
                                </label>
                                <label>
                                    <span class="text-input"><textarea name="message" rows="4" placeholder="Message" required="required"></textarea></span>
                                </label>
                                <button class="submit cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-fill cmt-btn-color-skincolor" type="submit">Send A Message</button>
                            </form>
                        </aside>
                    </div>
                    <div class="col-lg-8 content-area">
                        <div class="cmt-service-single-content-area">
                            <div class="cmt-featured-wrapper mb-40 res-991-mb-20">
                                <img class="img-fluid" src="images/country/country-details_02.jpg" alt="">
                            </div>
                            <div class="cmt-service-description">
                                <h4>Study, Work, Live in <?=$row['name']; ?></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="ttm_single_image-wrapper mt-20">
                                            <img class="img-fluid" src="images/single-img-14.jpg" alt="single_14">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="cmt-list cmt-list-style-icon cmt-list-icon-color-skincolor mt-20">
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Which material types can you work with?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Can I have multiple  in a single feature?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Is Smart Lock required for instant apps?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Which material types can you work with?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Can I have multiple  in a single feature?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Is Smart Lock required for instant apps?</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-30">
                                    <h4>Study, Work, Live in <?=$row['name']; ?> Benifits</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box icon-align-before-content style2">
                                            <div class="featured-icon">
                                                <div class="cmt-icon cmt-icon_element-border cmt-icon_element-color-skincolor cmt-icon_element-size-xl cmt-icon_element-style-square"> 
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
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box icon-align-before-content style2">
                                            <div class="featured-icon">
                                                <div class="cmt-icon cmt-icon_element-border cmt-icon_element-color-skincolor cmt-icon_element-size-xl cmt-icon_element-style-square"> 
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                <div class="mt-20">
                                    <h4>Our Best Consultants</h4>
                                    <!-- row -->
                                    <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":991,"settings":{"slidesToShow": 3}}, {"breakpoint":678,"settings":{"slidesToShow": 2}}, {"breakpoint":460,"settings":{"slidesToShow": 1}}]}'>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>

      
    </div><!--site-main end-->


<?php 
    require_once "inc/footer.php";
?>
