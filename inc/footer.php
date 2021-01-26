<?php
    require_once "inc/config.php";
    $sql = "SELECT * FROM posts ORDER BY RAND() limit 3";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll();
    // print_r($rows);
?>
<!--footer start-->
<footer class="footer cmt-bgcolor-darkgrey widget-footer clearfix">
        <div class="first-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text mr-25 clearfix">
                            <h3 class="widget-title">About Us</h3>
                            <div class="textwidget widget-text">
                                <p>The Most Eminent Visas and Immigration Consultant service provider in major metros and overseas with reliability since 1994. We are committed to provide reliable client support.</p>
                            </div>
                            <div class="cmt-horizontal_sep mt-25 mb-30"></div>
                            <div class="social-icons circle">
                                <ul class="list-inline cmt-textcolor-skincolor">
                                    <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                                    <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="twitter"><i class="ti ti-twitter-alt"></i></a></li>
                                    <li class="social-instagram"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Google"><i class="ti ti-google"></i></a></li>
                                    <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Linkedin"><i class="ti ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           <h3 class="widget-title">Visa Services</h3>
                            <ul id="menu-footer-quick-links">
                                <li><a href="diplomatic-Offical-visa.php">Diplomatic & Offical Visa</a></li>
                                <li><a href="skilled-worker-visa.php">Skilled Worker Visa</a></li>
                                <li><a href="student-visa.php">Student Visa</a></li>
                                <li><a href="temporary-Work-visa.php">Temporary Work Visa</a></li>
                                <li><a href="visitor-visa.php">Visitor Visa</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget-recent-post clearfix">
                           <h3 class="widget-title">Recent Posts</h3>
                            <ul class="widget-post cmt-recent-post-list">
                                <?php foreach($rows as $row): ?>
                                <li>
                                    <a href="blog-single.php?blog_id=<?=$row['id']; ?>"><img src="uploads/<?= $row['post_image'];?>" alt="post-img"></a>
                                    <div class="post-detail">
                                        <span class="post-date"><i class="fa fa-calendar"></i><?= date('d M, Y',strtotime($row['created_at'])); ?></span>
                                        <a href="blog-single.php?blog_id=<?=$row['id']; ?>"><?=$row['title']; ?></a>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget contact_map clearfix">
                            <h3 class="widget-title">Useful Links</h3>
                            <div class="footer_map mb-20">
                                <img src="images/footer_map.png" alt="">
                            </div>
                            <ul class="widget_contact_wrapper">
                                <li><i class="cmt-textcolor-skincolor fa fa-map-marker"></i>Australia: 1234  567 890</li>
                                <li><i class="cmt-textcolor-skincolor fa fa-map-marker"></i>Ontario: 1234  567 890</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <div class="row no-gutters">
                    <div class="widget-area col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <aside class="widget widget-text">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-square">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5><a href="mailto:info@example.com">info@example.com</a></h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Drop Us a Line</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
                    </div>
                    <div class="widget-area col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <aside class="widget widget-text cmt-bgcolor-skincolor">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-square">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>+0 (123) 456 7890</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Call Us Now!</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
                    </div>
                    <div class="widget-area col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <aside class="widget widget-text">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-square">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>78 St. Road, NJ USA</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Get Direction</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright text-center">
                            <div id="menu-footer-menu">
                                <ul class="footer-nav-menu text-center">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <span>Copyright © <?= date('Y') ?>&nbsp;<a href="#">Tripzia</a>. All rights reserved.</span>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/numinate.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery-isotope.js"></script>
    <script src="js/main.js"></script>

    <!-- Revolution Slider -->
    
    <script src="revolution/js/slider.js"></script>

    <!-- SLIDER REVOLUTION 6.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    

    <script  src='revolution/js/revolution.tools.min.js'></script>
    <script  src='revolution/js/rs6.min.js'></script>

    <!-- Javascript end-->

</body>

<!-- Mirrored from www.cymolthemes.com/html//tripzia/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2021 17:36:25 GMT -->
</html>