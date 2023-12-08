<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Chi tiết sản phẩm</li>
            </ul>
        </div>
    </div>
</div>
<div class="li-main-blog-page li-main-blog-details-page pt-60 pb-60 pb-sm-45 pb-xs-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Blog Sidebar Area -->
            <div class="col-lg-3 order-lg-1 order-2">
                <div class="li-blog-sidebar-wrapper">

                    <div class="li-blog-sidebar pt-25">
                        <?php
                        $iddm = 0;
                        $data_tintuc = get_catogories($iddm);
                        if (!isset($_GET['iddm'])) {
                            $iddm = 0;
                        } else {
                            $iddm = $_GET['iddm'];
                        }
                        ?>
                        <h4 class="li-blog-sidebar-title">Thể loại</h4>
                        <?php
                        foreach ($data_tintuc as $dm) :
                            extract($dm);
                            $link = 'index.php?pg=blog&iddm=' . $id;

                        ?>
                        <ul class="li-blog-archive">
                            <li><a href="index.php?pg=blog&iddm=<?= $dm['id'] ?>"><?= $dm['ten_dm'] ?></a></li>
                        </ul>
                        <?php endforeach; ?>
                    </div>
                    <!-- tin tức mới -->
                    <div class="li-blog-sidebar">
                        <?php
                        $data_newspapers = get_newspapers();
                        ?>
                        <h4 class="li-blog-sidebar-title">Tin tức mới</h4>
                        <?php foreach ($data_newspapers as $tt) : ?>
                        <div class="li-recent-post pb-30">
                            <div class="li-recent-post-thumb">
                                <a href="blog-details-left-sidebar.html">
                                    <img class="img-full" src="./view/layout/images/blog/<?= $tt['hinh'] ?>" alt="Li's Product Image">
                                </a>
                            </div>
                            <div class="li-recent-post-des">
                                <span><a href="blog-details-left-sidebar.html"><?= $tt['tieude'] ?></a></span>
                                <span class="li-post-date"><?= $tt['ngay'] ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
            <!-- Li's Blog Sidebar Area End Here -->
            <!-- Begin Li's Main Content Area -->
            <div class="col-lg-9 order-lg-2 order-1">
                <?php
                if (isset($_GET['id'])) {
                    $data['CTSP'] = get_tintuc($_GET['id']);
                }
                ?>
                <div class="row li-main-content">
                    <div class="col-lg-12">
                        <div class="li-blog-single-item pb-30">
                            <div class="li-blog-banner" style="display: flex; justify-content: center;">
                                <a href="blog-details.html"><img class="img-full" src="./view/layout/images/blog/<?= $data['CTSP']['hinh'] ?>"
                                        alt=""></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h4 class="li-blog-heading pt-25"><a href="#"><?= $data['CTSP']['tieude'] ?></a>
                                    </h4>
                                    <div class="li-blog-meta">
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
                                    </div>
                                    <!-- <p> -->
                                    <span>
                                        <?= $data['CTSP']['noidung'] ?>
                                    </span>
                                    <!-- </p> -->

                                    <div class="li-blog-sharing text-center pt-30">
                                        <h4>share this post:</h4>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Blog comment Box Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Main Content Area End Here -->
        </div>
    </div>
</div>