<?php
    require_once "inc/header.php";
    require_once "inc/config.php";
    if(isset($_GET['blog_id'])){
        $id = $_GET['blog_id'];
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();

        if($row == null){
            header("Location:error.php");
        }

        $sql2 = "SELECT * FROM posts ORDER BY RAND() limit 3";
        $stm = $conn->prepare($sql2);
        $stm->execute();
        $rows = $stm->fetchAll();
    }else{
        header('Location:error.php');
    }
?>

        <!-- page-title -->
        <div class="cmt-page-title-row">
            <div class="cmt-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">Blog Single</h2>
                                <p>Founded In 1996 New York,USA</p>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Blog</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
        <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">

        <div class="cmt-row sidebar cmt-sidebar-right cmt-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 content-area">
                        <!-- post -->
                        <article class="post cmt-blog-single clearfix">
                            <!-- cmt-post-featured-wrapper -->
                            <div class="cmt-post-featured-wrapper cmt-featured-wrapper mb-20">
                                <div class="cmt-post-featured">
                                    <img class="img-fluid" src="uploads/<?= $row['post_image'];?>" alt="">
                                </div>
                                <div class="cmt-box-post-date">
                                    <span class="cmt-entry-date">
                                        <time class="entry-date" datetime="2019-08-28T08:07:55+00:00"><?= date('d',strtotime($row['created_at'])); ?><span class="entry-month"><?= date('M',strtotime($row['created_at'])); ?></span></time>
                                    </span>
                                </div>
                            </div>
                            <!-- cmt-post-featured-wrapper end -->
                            <!-- cmt-blog-single-content -->
                            <div class="cmt-blog-single-content">
                                <div class="cmt-post-entry-header">
                                    <div class="post-meta">
                                        <span class="cmt-meta-line byline"><i class="fa fa-user"></i><?= $row['author']; ?></span>
                                        <!-- <span class="cmt-meta-line tags-links"><i class="fa fa-comments-o"></i>35 Comments</span> -->
                                        <span class="cmt-meta-line entry-date"><i class="fa fa-calendar"></i><time class="entry-date published" datetime="2018-07-28T00:39:29+00:00"><?= date('d F,  Y',strtotime($row['created_at'])); ?></time></span>
                                    </div>
                                </div>
                                <div class="entry-content mt-10">
                                    <div class="cmt-box-desc-text">
                                        <p><?= $row['body']; ?></p>
                                        <blockquote class="cmt-bgcolor-skincolor cmt-textcolor-white">There are full service engage company is to provide solution  company is your strategic HR partner as instead of HR.<cite class="d-block mt-15">Alex Jhon Martin</cite></blockquote>
                                        <p>There are full service engage company is to provide solution for employees needs training manage the entire HR department for companies. We offer comprehensive employment servic</p>
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <div class="ttm_single_image-wrapper mb-30 mt-20">
                                                    <img class="img-fluid" src="images/single-img-13.jpg" alt="single_13">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-20 mb-30">
                                                    <h4>Beneficial Study Strategies</h4>
                                                    <p>Proin viverra nisi at nisl imperdiet donor auctnec Ornare, estsed tincidunare tincidunt. loream risutincidat, senibeget.t</p>
                                                    <ul class="cmt-list cmt-list-style-icon cmt-list-icon-color-skincolor pt-10">
                                                        <li><i class="fa fa-check"></i><div class="cmt-list-li-content">Quisque aliquet nibh sit amet lectus auctor.</div></li>
                                                        <li><i class="fa fa-check"></i><div class="cmt-list-li-content">Nulla at metus ultricies, placerat augue sed.</div></li>
                                                        <li><i class="fa fa-check"></i><div class="cmt-list-li-content">Curabitur mollis ex vestibulum, ullamcorper.</div></li>
                                                        <li><i class="fa fa-check"></i><div class="cmt-list-li-content">Quisque aliquet nibh sit amet lectus aucto.</div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-20">
                                            <h4>Four major elements that we offer:</h4>
                                            <p>There are full service engage company is to provide solution for employees needs training manage the entire HR dpartment for companies. We offer comepartment for companies. We offer comprehensive employment servicThere are full service engage company is to provide solution for employees needs training manage the entire HR dpartment for companies. We offer comepartment for companies. We offer comprehensive employment servic</p>
                                        </div>
                                        <div class="mb-25">
                                            <h4>Setting the mood with incense</h4>
                                            <p> We offer comepartment for companies. We offer comprehensive employment servicThere are full service engage company is to provide solution for employees needs training manage the entire HR dpartment for companies. We offer comepartment for companehensive employment servic</p>
                                        </div>
                                        <div class="cmt-blogbox-desc-media">
                                            <div class="ttm_tag_lists">
                                                <div><span class="cmt-textcolor-darkgrey">Tags: </span><span>Startup</span></div>
                                            </div>
                                            <div class="cmt-social-share-wrapper">
                                                <ul class="social-icons circle">
                                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                            </div><!-- cmt-blog-single-content -->
                        </article><!-- post end -->
                    </div>
                    <div class="col-lg-4 widget-area sidebar-right cmt-col-bgcolor-yes cmt-bg cmt-right-span cmt-bgcolor-grey mt_80 pt-50 mb_80 pb-60 res-991-mt-0 res-991-pt-0">
                        <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                        <aside class="widget widget-search with-title">
                            <form role="search" method="get" class="search-form" action="#">
                                <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                                </label>
                                <button class="btn" type="submit" value="Search"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                            </form>
                        </aside>
                        
                        <aside class="widget widget-recent-post with-title">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul class="widget-post cmt-recent-post-list">
                                <?php foreach($rows as $post): ?>
                                <li>
                                    <a href="blog-single.php?post_id=<?=$post['id']; ?>"><img src="uploads/<?= $post['post_image'];?>" alt="post-img"></a>
                                    <div class="post-detail">
                                        <span class="post-date"><i class="fa fa-calendar"></i><?= date('d M,  Y',strtotime($post['created_at'])); ?></span>
                                        <a href="blog-single.php?post_id=<?=$post['id']; ?>"><?=$post['title']; ?></a>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                                
                            </ul>
                        </aside>
                        
                        <aside class="widget widget-contact">
                            <div class="cmt-col-bgcolor-yes cmt-bgcolor-darkgrey col-bg-img-five cmt-col-bgimage-yes cmt-bg pt-50 pl-25 pr-20 pb-50">
                                <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                                    <div class="cmt-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <h4>Emergency Study Visa.</h4>
                                    <p>We Offer a full Line Of Services For All Your Plumbing And Drain Cleaning Needs.</p>
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box icon-align-before-content style5 mt-60 cmt-bgcolor-white">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-skincolor cmt-icon_element-size-xs cmt-icon_element-style-rounded">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Call Now: <span class="cmt-textcolor-skincolor"> +123 456 7890</span></h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end -->
                                </div>
                            </div>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>

      
    </div><!--site-main end-->


    <?php
    require_once "inc/footer.php";
?>