<?php
    require_once "inc/header.php";
    require_once "inc/config.php";
    $results_per_page = 6;
    $sql = "SELECT * FROM posts";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->rowCount();
   //  echo '<h1 class="text-danger">'.$result.'</h1>';
     $number_of_pages = ceil($result/$results_per_page);

    $displayPerPage =3;

    if(!isset($_GET['page'])){
       $page =1;
    }else{
       $page = $_GET['page'];
    }

    $pageNum = ($page-1)* $results_per_page;
    $sql = "SELECT * FROM posts LIMIT :initial,:final";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['initial'=>$pageNum,'final'=>$results_per_page]);
    $rows = $stmt->fetchAll();
?>


        <!-- page-title -->
        <div class="cmt-page-title-row">
            <div class="cmt-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">Blog Posts</h2>
                                <p>Founded In 1996 New York,USA</p>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span>News</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
        <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">

        <section class="cmt-row grid-section clearfix">
            <div class="container">
                <div class="row">
                    <?php foreach($rows as $row): ?>

                    <div class="col-lg-4 col-md-4 col-sm-6">
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
                                    <span class="cmt-meta-line post-date"><i class="fa fa-calendar"></i><?= date('d F, Y',strtotime($row['created_at'])); ?></span>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p><?= (substr($row['body'],0,80)); ?></p>
                                </div>
                                <div class="post-bottom cmt-post-link">
                                    <a class="cmt-btn cmt-btn-size-sm cmt-icon-btn-left cmt-btn-color-skincolor btn-inline" href="blog-single.php?blog_id=<?=$row['id']; ?>" tabindex="0"><i class="fa fa-minus"></i>Read more</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <?php endforeach; ?>
                   
                </div>
                <div class="pagination-block mb-15 res-991-mb-0">
                    <?php for($page=1; $page<=$number_of_pages;$page++): ?>
                        <a href="blog.php?page=<?= $page; ?>" class="btn btn-primary"><?= $page ;?></a>
                    <?php endfor; ?>
                    <a class="next page-numbers" href="blog.php?page=<?= $page; ?>"><i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </section>

      
    </div><!--site-main end-->


    <?php
    require_once "inc/footer.php";
?>