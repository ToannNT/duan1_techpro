<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog </li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Main Blog Page Area -->
<div class="li-main-blog-page pt-60 pb-55">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Blog Sidebar Area -->
            <div class="col-lg-3 order-lg-1 order-2">
                <div class="li-blog-sidebar-wrapper">

                    <!-- danh mục -->
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
                    <!-- Bài đăng -->
                    <div class="li-blog-sidebar">
                        <?php
                        $data_newspapers = get_newspapers();
                        ?>
                        <h4 class="li-blog-sidebar-title">Tin tức mới</h4>
                        <?php foreach ($data_newspapers as $tt) : ?>

                        <div class="li-recent-post pb-30">
                            <div class="li-recent-post-thumb">
                                <a href="index.php?pg=blog_details&id=<?= $tt['id_blog'] ?>">
                                    <img class="img-full" src="./view/layout/images/blog/<?= $tt['hinh'] ?>"
                                        alt="Li's Product Image">
                                </a>
                            </div>
                            <div class="li-recent-post-des">
                                <span><a
                                        href="index.php?pg=blog_details&id=<?= $tt['id_blog'] ?>"><?= $tt['tieude'] ?></a></span>
                                <span class="li-post-date"><?= $tt['ngay'] ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- Li's Blog Sidebar Area End Here -->
            <!-- Begin Li's Main Content Area -->
            <div class="col-lg-9 order-lg-2 order-1 ">
                <div class="col-lg-12 col-md-12">
                    <div class="li-blog-single-item pb-25 d-flex flex-wrap">
                        <?php

                        $page = 1;
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        }
                        $data_tintuc = get_tintucs($iddm, ($page - 1) * 4, 4); // $iddm sẽ là số bắt đầu- start = 0, *4 vị trí lấy dữ liệu, 4 (số lượng tin tức cần lấy)
                        // 0 ở giữa là tham số bắt đầu
                        $soluongtt = count_tintuc()['soluong'];
                        $sotrang = ceil($soluongtt / 4); //ceil dùng để làm tròn

                        ?>
                        <?php foreach ($data_tintuc as $tt) : ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="li-blog-banner">
                                <a href="index.php?pg=blog_details&id=<?= $tt['id_blog'] ?>">
                                    <img class="img-full" src="./view/layout/images/blog/<?= $tt['hinh'] ?>"></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a
                                            href="index.php?pg=blog_details&id=<?= $tt['id'] ?>">
                                            <?= $tt['tieude'] ?></a>
                                    </h3>
                                    <div class="li-blog-meta">
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i>
                                            <?= $tt['ngay'] ?></a>
                                    </div>
                                    <p> <?= $tt['noidung']   ?></p>
                                    <a class="read-more" href="index.php?pg=blog_details&id=<?= $tt['id_blog'] ?>">Read
                                        More...</a> <br>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Begin Li's Pagination Area -->
                    <div class="col-lg-12">
                        <div class="li-paginatoin-area text-center pt-25">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="li-pagination-box">
                                        <li><a class="Previous" href="#">Previous</a></li>
                                        <?php for ($i = 1; $i <= $sotrang; $i++) : ?>
                                        <li class=""><a href="index.php?pg=blog&page=<?= $i ?>"><?= $i ?></a></li>
                                        <?php endfor; ?>
                                        <li><a class="Next" href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Pagination End Here Area -->
                </div>
            </div>
            <!-- Li's Main Content Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Main Blog Page Area End Here -->
<!-- Begin Footer Area -->