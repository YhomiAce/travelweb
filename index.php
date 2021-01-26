<?php 
    require_once "inc/header.php";
    require_once "inc/config.php";

    $sql = "SELECT * FROM posts ORDER BY RAND() limit 7";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll();
    
    $scount = "SELECT * FROM country";
    $stmtC = $conn->prepare($scount);
    $stmtC->execute();
    $countries = $stmtC->fetchAll();
?>



    <!-- START homemainclassicslider REVOLUTION SLIDER 6.1.0 -->
    <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery">

        <rs-module id="rev_slider_1_1" data-version="6.1.0">

            <rs-slides>
                <rs-slide data-key="rs-1" data-title="Slide" data-anim="ei:d;eo:d;s:d;r:0;t:slotzoom-horizontal;sl:d;">

                    <img src="images/slides/slider-mainbg-003.jpg" title="slider-image" width="1920" height="705" class="rev-slidebg" data-no-retina>

                    <rs-layer id="slider-1-slide-1-layer-1" 
                        data-type="text"
                        data-color="#fff"
                        data-rsp_ch="on"
                        data-xy="xo:50px,50px,20px,-519px;yo:183px,183px,104px,166px;"
                        data-text="s:17;l:22;fw:500,700,700,300;a:inherit;"
                        data-vbility="t,t,t,f"
                        data-frame_0="y:100%;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:270;sp:500;sR:270;"
                        data-frame_999="o:0;tp:600;st:w;sR:8230;"
                        style="z-index:8; text-transform: uppercase;">welcome to visa consulting agency
                    </rs-layer>

                    <rs-layer id="slider-1-slide-1-layer-2" 
                        data-type="text"
                        data-color="#fff"
                        data-rsp_ch="on"
                        data-xy="xo:84px,84px,44px,44px;y:t,t,m,t;yo:223px,223px,-57px,86px;"
                        data-text="w:normal;s:59,59,49,35;l:60,60,50,38;a:left;fw:300;" 
                        data-frame_0="y:100%;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:400;sp:800;sR:400;"
                        data-frame_999="o:0;tp:600;st:w;sR:7800;"
                        style="z-index:9;font-family: 'Roboto', sans-serif; text-transform:capitalize;"> Since 1987 we are <strong>experts</strong>
                    </rs-layer>

                    <rs-layer id="slider-1-slide-1-layer-3" 
                        data-type="text"
                        data-color="#fff"
                        data-rsp_ch="on"
                        data-xy="xo:84px,84px,44px,44px;y:t,t,m,t;yo:296px,296px,4px,134px;"
                        data-text="w:normal;s:59,59,49,35;l:60,60,50,38;a:left;fw:300;" 
                        data-frame_0="y:100%;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:660;sp:800;sR:660;"
                        data-frame_999="o:0;tp:600;st:w;sR:7540;"
                        style="z-index:48;font-family: 'Roboto', sans-serif; text-transform:capitalize;" > in the <strong>global industry </strong>
                    </rs-layer>

                    <rs-layer id="slider-1-slide-1-layer-4" 
                        class="tp-caption cmt-bgcolor-skincolor" 
                        data-type="shape"
                        data-width="6px"
                        data-height="127px,127px,108px,88px"
                        data-rsp_ch="on"
                        data-xy="xo:50px,50px,20px,20px;y:t,t,m,t;yo:223px,223px,-27px,84x;"
                        data-frame_0="scaleY:0;y:100%;tp:600;"
                        data-frame_1="scaleY;1;tp:600;e:Power0.easeIn;st:660;sp:800;sR:660;"
                        data-frame_999="o:0;tp:600;st:w;sR:7640;"
                        style="z-index:48;">
                        
                    </rs-layer>

                    <rs-layer id="slider-1-slide-1-layer-5" 
                        class="rev-btn cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-fill cmt-btn-color-skincolor"
                        data-type="button"
                        data-rsp_ch="on"
                        data-xy="xo:50px,50px,20px,20px;y:b,b,m,m;yo:242px,242px,89px,61px;"
                        data-text="s:15;a:c;fw:600;"
                        data-border="bos:solid;boc:#0067ed;bow:1px,1px,1px,1px;"
                        data-frame_0="y:100%;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:940;sp:350;sR:940;"
                        data-frame_999="o:0;tp:600;st:w;sR:7710;"
                        data-frame_hover="c:#0067ed;bow:1px,1px,1px,1px;boc:#0067ed;"
                        style="z-index:11;">Book a consultaion!
                    </rs-layer>

                    <rs-layer id="slider-1-slide-1-layer-6" 
                        class="rev-btn cmt-btn cmt-btn-size-md cmt-icon-btn-left btn-inline cmt-btn-color-white"
                        data-type="button"
                        data-rsp_ch="on"
                        data-xy="xo:279px,279px,248px,245px;y:b,b,m,m;yo:258px,258px,87px,57px;"
                        data-text="s:15;a:c;fw:600;"
                        data-frame_0="y:100%;tp:600;"
                        data-frame_1="e:none;st:500;sp:1000;sR:500;" 
                        data-frame_1="tp:600;e:Power0.easeIn;st:1070;sp:350;sR:1070;"
                        data-frame_999="o:0;tp:600;st:w;sR:7580;"
                        data-frame_hover="c:#fff;bow:1px,1px,1px,1px;boc:#1d2143;"
                        style="z-index:4;"><i class="fa fa-minus"></i>Contact Us!
                    </rs-layer>

                    <a id="slider-1-slide-1-layer-7" 
                        class="rs-layer cmt-bgcolor-darkgrey cmt_prettyphoto"
                        href="https://youtu.be/7e90gBu4pas" target="_self" 
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:r,r;xo:50px,50px,-114px,-114px;y:b;yo:110px,110px,162px,162px;"
                        data-text="s:26,26,28,28;l:86,86,72,72;a:c;"
                        data-border="bos:solid;boc:#1f2437;bow:1px,1px,1px,1px;bor:0,6px,6px,0;"
                        data-dim="w:77px;h:86px,86px,72px,72px;"
                        data-vbility="t,t,f,f"
                        data-frame_0="sX:0.9;sY:0.9;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:580;sp:500;sR:580;"
                        data-frame_999="o:0;tp:600;st:w;sR:7920;"
                        data-frame_hover="bgc:#0067ed;bos:solid;bow:1px,1px,1px,1px;boc:#0067ed;c:#fff;"
                        style="z-index:15;"><i class="fa fa-play"></i> 
                    </a>

                    <rs-layer id="slider-1-slide-1-layer-8" 
                        class="tp-shape tp-shapewrapper"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="x:r,r;xo:50px,50px,-259px,-259px;y:b;yo:110px,110px,161px,161px;a:l;"
                        data-dim="w:237px,237px,215px,215px;h:86px,86px,72px,72px;lh:86px,86px,72px,72px;"
                        data-border="bos:solid;bow:1px,1px,1px,1px;bor:6px;"
                        data-vbility="t,t,f,f"
                        data-frame_0="x:100%;o:1;tp:600;"
                        data-frame_0_mask="u:t;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:660;sp:500;sR:660;"
                        data-frame_1_mask="u:t;"
                        data-frame_999="o:0;tp:600;st:w;sR:7840;"
                        style="z-index:8;background-color:rgba(31, 36, 55, 0.62)"> 
                    </rs-layer>

                    <rs-layer id="slider-1-slide-1-layer-9" 
                        data-type="text"
                        data-color="#fff"
                        data-rsp_ch="on"
                        data-xy="x:r,r;xo:216px,216px,-199px,-199px;y:b;yo:152px,152px,200px,200px;"
                        data-text="s:28,28,25,25;l:30,30,25,25;a:left;fw:400,400,700,700;"
                        data-vbility="t,t,f,f"
                        data-frame_0="sX:0.9;sY:0.9;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:780;sR:780;"
                        data-frame_999="o:0;tp:600;st:w;sR:7920;"
                        style="z-index:16;font-family:Roboto;">30+ 
                    </rs-layer>

                    <rs-layer id="slider-1-slide-1-layer-10" 
                        data-type="text"
                        data-color="#fff"
                        data-rsp_ch="on"
                        data-xy="x:r,r;xo:166px,166px,-209px,-209px;y:b;yo:128px,128px,176px,176px;"
                        data-text="s:20;l:20;fw:300;a:l;"
                        data-vbility="t,t,f,f"
                        data-frame_0="sX:0.9;sY:0.9;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:860;sR:860;"
                        data-frame_999="o:0;tp:600;st:w;sR:7840;"
                        style="z-index:17;font-family:Roboto;">Experience
                    </rs-layer>
                   
                </rs-slide>

                <rs-slide data-key="rs-2" data-title="Slide" data-thumb="images/slides/slider-mainbg-004.jpg" data-anim="ei:d;eo:d;s:d;r:0;t:slotzoom-horizontal;sl:d;">

                    <img src="images/slides/slider-mainbg-004.jpg" title="slider-image" width="1920" height="705" class="rev-slidebg" data-no-retina>

                    <rs-layer id="slider-1-slide-2-layer-1" 
                        data-type="text"
                        data-color="#fff"
                        data-rsp_ch="on"
                        data-xy="xo:50px,50px,20px,-519px;yo:183px,183px,107px,166px;"
                        data-text="s:17;l:22;fw:500,700,700,300;a:inherit;"
                        data-vbility="t,t,t,f"
                        data-frame_0="y:100%;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:270;sp:500;sR:270;"
                        data-frame_999="o:0;tp:600;st:w;sR:8230;"
                        style="z-index:8; text-transform: uppercase;">travels immigration & visa
                    </rs-layer>

                    <rs-layer id="slider-1-slide-2-layer-2" 
                        data-type="text"
                        data-color="#fff"
                        data-rsp_ch="on"
                        data-xy="xo:84px,84px,44px,44px;y:t,t,m,t;yo:223px,223px,-57px,86px;"
                        data-text="w:normal;s:59,59,49,36;l:60,60,50,38;a:left;fw:300;" 
                        data-frame_0="y:100%;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:400;sp:800;sR:400;"
                        data-frame_999="o:0;tp:600;st:w;sR:7800;"
                        style="z-index:9;font-family: 'Roboto', sans-serif; text-transform:capitalize;">world brilliant student
                    </rs-layer>

                    <rs-layer id="slider-1-slide-2-layer-3" 
                        data-type="text"
                        data-color="#fff"
                        data-rsp_ch="on"
                        data-xy="xo:84px,84px,44px,44px;y:t,t,m,t;yo:296px,296px,4px,134px;"
                        data-text="w:normal;s:59,59,49,34;l:60,60,50,38;a:left;fw:300;" 
                        data-frame_0="y:100%;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:660;sp:800;sR:660;"
                        data-frame_999="o:0;tp:600;st:w;sR:7540;"
                        style="z-index:48;font-family: 'Roboto', sans-serif; text-transform:capitalize;" ><strong>immigration
                        </strong> & <strong>visa </strong> company
                    </rs-layer>

                    <rs-layer id="slider-1-slide-2-layer-4" 
                        class="tp-caption cmt-bgcolor-skincolor" 
                        data-type="shape"
                        data-width="6px"
                        data-height="127px,127px,108px,88px"
                        data-rsp_ch="on"
                        data-xy="xo:50px,50px,20px,20px;y:t,t,m,t;yo:223px,223px,-27px,84x;"
                        data-frame_0="scaleY:0;y:100%;tp:600;"
                        data-frame_1="scaleY:1;tp:600;e:Power0.easeIn;st:660;sp:800;sR:660;"
                        data-frame_999="o:0;tp:600;st:w;sR:7640;"
                        style="z-index:48;">
                        
                    </rs-layer>

                    <rs-layer id="slider-1-slide-2-layer-5" 
                        class="rev-btn cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-fill cmt-btn-color-skincolor"
                        data-type="button"
                        data-rsp_ch="on"
                        data-xy="xo:50px,50px,20px,20px;y:b,b,m,m;yo:242px,242px,89px,61px;"
                        data-text="s:15;a:c;fw:600;"
                        data-border="bos:solid;boc:#0067ed;bow:1px,1px,1px,1px;"
                        data-frame_0="y:100%;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:940;sp:350;sR:940;"
                        data-frame_999="o:0;tp:600;st:w;sR:7710;"
                        data-frame_hover="c:#0067ed;bow:1px,1px,1px,1px;boc:#0067ed;"
                        style="z-index:11;">Book a consultaion!
                    </rs-layer>

                    <rs-layer id="slider-1-slide-2-layer-6" 
                        class="rev-btn cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-border cmt-btn-color-white"
                        data-type="button"
                        data-rsp_ch="on"
                        data-xy="xo:279px,279px,241px,241px;y:b,b,m,m;yo:242px,242px,89px,61px;"
                        data-text="s:15;a:c;fw:600;"
                        data-border="bos:solid;boc:#fff;bow:1px,1px,1px,1px;"
                        data-frame_0="y:100%;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:1070;sp:350;sR:1070;"
                        data-frame_999="o:0;tp:600;st:w;sR:7580;"
                        data-frame_hover="c:#1d2143;bow:1px,1px,1px,1px;boc:#fff;"
                        style="z-index:4;">Contact Us!
                    </rs-layer>

                    <a id="slider-1-slide-2-layer-7" 
                        class="rs-layer cmt-bgcolor-darkgrey"
                        href="#" target="_self" rel="nofollow"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:r,r;xo:50px,50px,-114px,-114px;y:b;yo:110px,110px,162px,162px;"
                        data-text="s:26,26,28,28;l:86,86,72,72;a:c;"
                        data-border="bos:solid;boc:#1f2437;bow:1px,1px,1px,1px;bor:0,6px,6px,0;"
                        data-dim="w:77px;h:86px,86px,72px,72px;"
                        data-vbility="t,t,f,f"
                        data-frame_0="sX:0.9;sY:0.9;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:580;sp:500;sR:580;"
                        data-frame_999="o:0;tp:600;st:w;sR:7920;"
                        data-frame_hover="bgc:#0067ed;bos:solid;bow:1px,1px,1px,1px;boc:#0067ed;"
                        style="z-index:15;"><i class="ti ti-angle-right"></i> 
                    </a>

                    <rs-layer id="slider-1-slide-2-layer-8" 
                        class="tp-shape tp-shapewrapper"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="x:r,r;xo:50px,50px,-259px,-259px;y:b;yo:110px,110px,161px,161px;a:l;"
                        data-dim="w:237px,237px,215px,215px;h:86px,86px,72px,72px;"
                        data-border="bos:solid;bow:1px,1px,1px,1px;bor:6px;"
                        data-vbility="t,t,f,f"
                        data-frame_0="x:100%;o:1;tp:600;"
                        data-frame_0_mask="u:t;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:660;sp:500;sR:660;"
                        data-frame_1_mask="u:t;"
                        data-frame_999="o:0;tp:600;st:w;sR:7840;"
                        style="z-index:8;background-color:rgba(31, 36, 55, 0.62)"> 
                    </rs-layer>

                    <rs-layer id="slider-1-slide-2-layer-9" 
                        data-type="text"
                        data-color="#fff"
                        data-rsp_ch="on"
                        data-xy="x:r,r;xo:202px,202px,-199px,-199px;y:b;yo:152px,152px,200px,200px;"
                        data-text="s:28,28,25,25;l:30,30,25,25;a:left;fw:400,400,700,700;"
                        data-vbility="t,t,f,f"
                        data-frame_0="sX:0.9;sY:0.9;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:780;sR:780;"
                        data-frame_999="o:0;tp:600;st:w;sR:7920;"
                        style="z-index:16;font-family:Roboto;">1987 
                    </rs-layer>

                    <rs-layer id="slider-1-slide-2-layer-10" 
                        data-type="text"
                        data-color="#fff"
                        data-rsp_ch="on"
                        data-xy="x:r,r;xo:166px,166px,-209px,-209px;y:b;yo:128px,128px,176px,176px;"
                        data-text="s:20;l:20;fw:300;a:l;"
                        data-vbility="t,t,f,f"
                        data-frame_0="sX:0.9;sY:0.9;tp:600;"
                        data-frame_1="tp:600;e:Power0.easeIn;st:860;sR:860;"
                        data-frame_999="o:0;tp:600;st:w;sR:7840;"
                        style="z-index:17;font-family:Roboto;">Work Since 
                    </rs-layer>

                </rs-slide>
            </rs-slides>

            <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
        </rs-module>
    </rs-module-wrap>
    <!-- END REVOLUTION SLIDER -->

    
    <!--site-main start-->
    <div class="site-main">


        <!--features-section-->
        <section class="cmt-row features_2-section bg-img1 cmt-bg cmt-bgimage-yes clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt_80 res-991-mt-0">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- featured-imagebox -->
                                    <div class="featured-icon-box icon-align-top-content text-center style4 bor_rad_5">
                                        <div class="bg_icon"><i class="flaticon-passport-10"></i></div>
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                                <i class="flaticon-passport-10"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="content-inner">
                                                <div class="featured-title">
                                                    <h5>immigration program</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>To help foreign nationals find out if they may be eligible to apply as immigrants, visitors or students abroad.</p>
                                                </div>
                                            </div>
                                            <a class="cmt-btn btn-inline cmt-btn-size-sm cmt-btn-color-skincolor" href="#">View more program</a>
                                        </div>
                                    </div><!-- featured-imagebox end-->
                                </div>
                                <div class="col-md-4">
                                    <!-- featured-imagebox -->
                                    <div class="featured-icon-box icon-align-top-content text-center style4 bor_rad_5">
                                        <div class="bg_icon"><i class="flaticon-certificate"></i></div>
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                                <i class="flaticon-certificate"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="content-inner">
                                                <div class="featured-title">
                                                    <h5>Education Permits</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Many students prioritize studying abroad to pursue their career. We guide them better career opportunities.</p>
                                                </div>
                                            </div>
                                            <a class="cmt-btn btn-inline cmt-btn-size-sm cmt-btn-color-skincolor" href="#">View more services</a>
                                        </div>
                                    </div><!-- featured-imagebox end-->
                                </div>
                                <div class="col-md-4">
                                    <!-- featured-imagebox -->
                                    <div class="featured-icon-box icon-align-top-content text-center style4 bor_rad_5">
                                        <div class="bg_icon"><i class="flaticon-address"></i></div>
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                                <i class="flaticon-address"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="content-inner">
                                                <div class="featured-title">
                                                    <h5>Free Visa Enquiry</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>You can directly contact us through filling up the form. Our team will get back to you with your visa enquiry.</p>
                                                </div>
                                            </div>
                                            <a class="cmt-btn btn-inline cmt-btn-size-sm cmt-btn-color-skincolor" href="#">visa enquiry</a>
                                        </div>
                                    </div><!-- featured-imagebox end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-35 mb_20 res-991-mt-20">
                            <h6><span class="font-weight-normal">Don’t Hesitate, Contact us for Better Help and Services. </span><u><a class="cmt-textcolor-skincolor" href="#">Explore all Categories.</a></u></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--features-section-->


        <!--introduction-section-->
        <section class="cmt-row introduction-section mt_180 res-991-mt-0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-xs-12">
                        <div class="cmt-col-bgcolor-yes cmt-bg cmt-bgcolor-white cmt-left-span spacing-5">
                            <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                                <div class="cmt-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h5>ABOUT CONSULTANTS</h5>
                                        <h2 class="title">Immigration Services From <strong>Experienced Agents.</strong></h2>
                                    </div>
                                    <div class="title-desc">The Most Eminent Visas and Immigration Consultant service provider. Branches in India and overseas.</div>
                                </div><!-- section title end -->
                                <p>Foundation was established with a small idea that was incepted in the minds of its promoters in the year 1994! We skillfully guide applicants for their immigration process to any country they aspire to settle. <a class="cmt-textcolor-skincolor" href="#">Read More</a></p>
                                <div class="pt-15 pr-15 res-991-pr-0 res-991-mb-20">
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
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 mx-md-auto col-sm-7 col-10 mx-auto">
                        <div class="d-flex cmt-boxes-spacing-20px mt_170 res-991-mt-0 mb_20">
                            <div class="cmt-box-col-wrapper">
                                <!-- ttm_single_image-wrapper -->
                                <div class="ttm_single_image-wrapper">
                                    <img class="img-fluid" src="images/single-img-05.jpg" alt="single_05">
                                </div>
                            </div>
                            <div class="cmt-box-col-wrapper">
                                <!-- ttm_single_image-wrapper -->
                                <div class="ttm_single_image-wrapper pb-20 mt-35 pt-80 res-991-pt-0">
                                    <img class="img-fluid" src="images/single-img-06.jpg" alt="single_06">
                                </div>
                                <!-- ttm_single_image-wrapper -->
                                <div class="ttm_single_image-wrapper">
                                    <img class="img-fluid" src="images/single-img-07.jpg" alt="single_07">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--introduction-section-->


        <!--services-section-->
        <section class="cmt-row services-section cmt-bgcolor-darkgrey bg-img3 cmt-bg cmt-bgimage-yes clearfix">
            <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>what we do</h5>
                                <h2 class="title">We Provide Experts Create Great<br> Value for<strong> Visa Categories</strong></h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div><!-- row end -->
                <!-- row -->
                <div class="row mb-40 res-991-mb-15">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--featured-icon-box-->
                        <div class=" featured-icon-box icon-align-top-content style5 border bor_rad_3">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon-bussiness-man"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Skilled Worker Visa</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>For the persons whose jobs require a minimum work experience that are not temporary or seasonal.</p>
                                </div>
                                <a class="cmt-btn btn-inline cmt-btn-size-md cmt-btn-color-skincolor" href="skilled-worker-visa.php">View more</a>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--featured-icon-box-->
                        <div class=" featured-icon-box icon-align-top-content style5 border bor_rad_3">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon-passport-3"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Business Immigration Visa</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>People who want to invest in, or start businesses abroad. Expected to support the development.</p>
                                </div>
                                <a class="cmt-btn btn-inline cmt-btn-size-md cmt-btn-color-skincolor" href="business-visa.php">View more</a>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--featured-icon-box-->
                        <div class=" featured-icon-box icon-align-top-content style5 border bor_rad_3">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon-visa-1"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Green card</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>We consult for the permanent residents visa documents issued to immigrants under the Immigration.</p>
                                </div>
                                <a class="cmt-btn btn-inline cmt-btn-size-md cmt-btn-color-skincolor" href="diplomatic-Offical-visa.php">View more</a>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--featured-icon-box-->
                        <div class=" featured-icon-box icon-align-top-content style5 border bor_rad_3">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon-insurance"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Student Visa</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>We guide our clients for the perception & better career opportunities for the students, Overseas services</p>
                                </div>
                                <a class="cmt-btn btn-inline cmt-btn-size-md cmt-btn-color-skincolor" href="student-visa.php">View more</a>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--featured-icon-box-->
                        <div class=" featured-icon-box icon-align-top-content style5 border bor_rad_3">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon-passport-11"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>work permit</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Permit To Work  refers to management systems used to ensure that work is done safely and efficiently.</p>
                                </div>
                                <a class="cmt-btn btn-inline cmt-btn-size-md cmt-btn-color-skincolor" href="temporary-Work-visa.php">View more</a>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--featured-icon-box-->
                        <div class=" featured-icon-box icon-align-top-content style5 border bor_rad_3">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                    <i class="flaticon-plane-tickets"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Visitor Visa</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Visas for the people who want to travel to and enter as a visitor for up to 6 months. We stick the visitor visa.</p>
                                </div>
                                <a class="cmt-btn btn-inline cmt-btn-size-md cmt-btn-color-skincolor" href="visitor-visa.php">View more</a>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--services-section-->


        <!--cta-section-->
        <section class="cmt-row cta-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <div class="cmt-col-bgcolor-yes cmt-bgcolor-skincolor cmt-col-bgimage-yes cmt-bg col-bg-img-two cmt-bg-pattern spacing-2 border bor_rad_5">
                            <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                                <div class="cmt-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content cmt-textcolor-white">
                                <div class="d-lg-flex justify-content-between align-items-center">
                                    <div><h4 class="mb-5">Are You Looking For Visa Applications Just Call Us!</h4>
                                        <h5><span>Need a consultation?</span><span class="font-weight-lighter"> Call us today 1-888-123-45678 or email us: info@domainname.com</span></h5>
                                    </div>
                                    <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-border cmt-btn-color-white mb-10 res-991-mb-0 res-991-mt-15" href="contact.php">book a consultation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--cta-section-->


        <!--services_row-section-->
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
                <div class="row slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false,  "dots":false, "autoplay":true, "centerMode":false, "centerPadding":0, "infinite":true, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 3}} , {"breakpoint":777,"settings":{"slidesToShow": 2}}, {"breakpoint":500,"settings":{"slidesToShow": 1}}]}'>
                    <?php foreach($countries as $country): ?>
                    <div class="cmt-box-col-wrapper col-lg-12">
                        <!--featured-imagebox-->
                        
                        <div class="featured-imagebox featured-imagebox-country style1 bor_rad_5">
                            <div class="cmt-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail bor_rad_5">
                                    <a href="#" tabindex="-1"> 
                                        <img class="img-fluid" src="uploads/<?= $country['image'];?>" alt="image">
                                    </a>
                                </div><!-- featured-thumbnail end-->
                                <div class="featured-content">
                                    <div class="featured-content-icon_img-block">
                                        <img class="img-fluid" src="uploads/<?= $country['country_flag'];?>" alt="image">
                                    </div>
                                    <div class="featured-title">
                                        <h5><a href="single-country.php?country_id=<?=$country['id']; ?>" tabindex="-1"><?= $country['name'];?></a></h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We will help you in every step of the Visa application process.</p>
                                    </div>
                                    <a class="cmt-btn cmt-btn-size-sm btn-inline cmt-btn-color-skincolor" href="single-country.php?country_id=<?=$country['id']; ?>" tabindex="-1">Read More</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <?php endforeach; ?>
                   
                    
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-35 mb_20 res-991-mt-20">
                            <h6><span class="font-weight-normal">Would you like to speak on of our consultant over phone? </span><u><a class="cmt-textcolor-skincolor" href="country.php">Explore all country</a></u></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--services_row-section end-->


        <!--testimonial-section-->
        <section class="cmt-row testimonial_2-section bg-layer-equal-height cmt-bg bg-img4 cmt-bgimage-yes clearfix">
            <div class="bg-anim-2 text-right">
                <img class="img-fluid" src="images/anim_img_02.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- col-img-img-three -->
                        <div class="col-bg-img-three cmt-col-bgimage-yes cmt-bg pt-100 pb-90">
                            <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                                <div class="cmt-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content h-100">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <div class="cmt-play-icon-btn">
                                        <div class="cmt-play-icon-animation">
                                            <a href="https://youtu.be/7e90gBu4pas" target="_self" class="cmt_prettyphoto">
                                                <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-skincolor cmt-icon_element-size-sm cmt-icon_element-style-round">
                                                    <i class="fa fa-play"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col-img-bg-img-one end-->
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="cmt-col-bgcolor-yes cmt-bg cmt-bgcolor-white box-shadow spacing-3">
                            <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                                <div class="cmt-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title title-style-center_text">
                                    <div class="title-header">
                                        <h5>TESTIMONIALS</h5>
                                        <h2 class="title">What Our <strong>Client Says?</strong></h2>
                                    </div>
                                </div><!-- section title end -->
                                <div class="row slick_slider slick-dots-style1" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots":true, "arrows":false, "autoplay":true, "infinite":true,  "responsive": [{"breakpoint":991,"settings":{"slidesToShow": 1}}, {"breakpoint":550,"settings":{"slidesToShow": 1}}]}'>
                                    <div class="col-lg-12">
                                        <!-- testimonials -->
                                        <div class="testimonials cmt-testimonial-box-view-style1">
                                            <div class="testimonial-content">
                                               <blockquote class="testimonial-text">I really would like to appreciate Tripzia and the entire team, especially Ms Anandias Alex for helping me get my student visa for the Brunel University. She helped me all way to find the University 
                                               & right course. She was there for me through the entire process.</blockquote>
                                                <div class="testimonial-avatar">
                                                    <div class="testimonial-img">
                                                        <img class="img-fluid" src="images/testimonial/01.jpg" alt="testimonial-img">
                                                    </div>
                                                     <div class="testimonial-caption">
                                                        <h5>Denial Jhon</h5>
                                                        <label>Newzeland</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- testimonials end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- testimonials -->
                                        <div class="testimonials cmt-testimonial-box-view-style1"> 
                                            <div class="testimonial-content">
                                                <blockquote class="testimonial-text">I really would like to appreciate Tripzia and the entire team, especially Ms Anandias Alex for helping me get my student visa for the Brunel University. She helped me all way to find the University & right course. She was there for me through the entire process.</blockquote>
                                                <div class="testimonial-avatar">
                                                    <div class="testimonial-img">
                                                        <img class="img-fluid" src="images/testimonial/02.jpg" alt="testimonial-img">
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h5>Alan Sears</h5>
                                                        <label>Newzeland</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- testimonials end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- testimonials -->
                                        <div class="testimonials cmt-testimonial-box-view-style1"> 
                                            <div class="testimonial-content">
                                                <blockquote class="testimonial-text">I really would like to appreciate Tripzia and the entire team, especially Ms Anandias Alex for helping me get my student visa for the Brunel University. She helped me all way to find the University & right course. She was there for me through the entire process.</blockquote>
                                                <div class="testimonial-avatar">
                                                    <div class="testimonial-img">
                                                        <img class="img-fluid" src="images/testimonial/03.jpg" alt="testimonial-img">
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h5>Alan Sears</h5>
                                                        <label>Newzeland</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- testimonials end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
            <div class="bg-anim-1 mt_120">
                <img class="img-fluid" src="images/anim_img_01.png" alt="">
            </div>
        </section>
        <!--testimonial-section-->


        <!--blog-section-->
        <section class="cmt-row blog_2-section mt_240 res-991-mt-0 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header pb-5">
                                <h5>our latest news/blog</h5>
                                <h2 class="title">our work business <strong>innovation!</strong></h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-border cmt-btn-color-dark mb-30 float-md-right" href="blog.php">View More News</a>
                    </div>
                </div><!-- row end -->
                <!-- slick_slider -->
                <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "centerMode":true, "initialSlide":2, "centerPadding":0, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 2}}, {"breakpoint":540,"settings":{"slidesToShow": 1}}]}'>
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
                                        <h5><a href="blog-single.php?blog_id=<?=$row['id']; ?>"><?=$row['title']; ?></a></h5>
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
                                    <a class="cmt-btn cmt-btn-size-sm cmt-icon-btn-left cmt-btn-color-skincolor btn-inline" href="blog-single.php?blog_id=<?=$row['id']; ?>" tabindex="0"><i class="fa fa-minus"></i>Read more</a>
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