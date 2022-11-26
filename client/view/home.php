<?php include_once 'view/layout/header.php' ?>
    <!-- prs navigation End -->
    <!-- prs mc slider wrapper Start -->
    <div class="prs_mc_slider_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_heading_section_wrapper">
                        <h2>Comming soon</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_mc_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="view/asset/images/content/movie_category/slider_img1.jpg" alt="about_img">
                            </div>
                            <div class="item">
                                <img src="view/asset/images/content/movie_category/slider_img1.jpg" alt="about_img">
                            </div>
                            <div class="item">
                                <img src="view/asset/images/content/movie_category/slider_img1.jpg" alt="about_img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs mc slider wrapper End -->
    <!-- prs mc category slidebar Start -->
    <div class="prs_mc_category_sidebar_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="prs_mcc_left_side_wrapper">
                        <div class="prs_mcc_bro_title_wrapper">
                            <h2>Thể loại</h2>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="?ctr=home">All
                                        </a>
                                </li>
                                <?php foreach ($the_loai as $tl): ?>
                                    <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="?ctr=home&the_loai=<?=$tl->id?>"><?=$tl->name?>
                                           </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="prs_mcc_right_side_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="prs_mcc_right_side_heading_wrapper">
                                    <h2>Our Top Movies</h2>
                                    <ul class="nav nav-pills">
                                        <li class="active"><a data-toggle="pill" href="#grid"><i
                                                        class="fa fa-th-large"></i></a>
                                        </li>
                                        <li><a data-toggle="pill" href="#list"><i class="fa fa-list"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="tab-content">
                                    <div id="grid" class="tab-pane fade in active">
                                        <div class="row">
                                            <!--                                        start movie-->
                                            <?php foreach ($film as $fl): ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 prs_upcom_slide_first">
                                                    <div class="prs_upcom_movie_box_wrapper prs_mcc_movie_box_wrapper">
                                                        <div class="prs_upcom_movie_img_box">
                                                            <img src="view/asset/images/content/movie_category/up1.jpg"
                                                                 alt="movie_img"/>
                                                            <div class="prs_upcom_movie_img_overlay"></div>
                                                            <div class="prs_upcom_movie_img_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="<?= $fl->trailer ?>">View Trailer</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="?ctr=movie_detail&id_phim=<?= $fl->id ?>">View
                                                                            Details</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="prs_upcom_movie_content_box">
                                                            <div class="prs_upcom_movie_content_box_inner">
                                                                <h2><a href="#"><?= $fl->name ?></a></h2>
                                                                <?php $m_home = new m_home();
                                                                $the_loai = $m_home->get_the_loai_phim($fl->id);
                                                                ?>
                                                                <p>
                                                                    <?php foreach ($the_loai as $tl) {
                                                                        echo $tl->the_loai . "</br>";
                                                                    } ?>
                                                                </p>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="prs_upcom_movie_content_box_inner_icon">
                                                                <ul>
                                                                    <li>
                                                                        <a <?php if (isset($_SESSION['user'])) {
                                                                            echo 'href="?ctr=movie_booking&id_phim=' . $fl->id . '"';
                                                                        } else {
                                                                            echo 'data-toggle="modal" data-target="#myModal"';
                                                                        } ?>><i
                                                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                    <div id="list" class="tab-pane fade">
                                        <div class="row">
                                            <?php foreach ($film as $fl): ?>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="prs_mcc_list_movie_main_wrapper">
                                                        <div class="prs_mcc_list_movie_img_wrapper">
                                                            <img src="view/asset/images/content/movie_category/up1.jpg"
                                                                 alt="categoty_img">
                                                        </div>
                                                        <div class="prs_mcc_list_movie_img_cont_wrapper">
                                                            <div class="prs_mcc_list_left_cont_wrapper">
                                                                <h2><a href="#"><?= $fl->name ?></a></h2>
                                                                <?php $m_home = new m_home();
                                                                $the_loai = $m_home->get_the_loai_phim($fl->id);
                                                                ?>
                                                                <p>
                                                                    <?php foreach ($the_loai as $tl) {
                                                                        echo $tl->the_loai . " | ";
                                                                    } ?>
                                                                    &nbsp;&nbsp;&nbsp;<i
                                                                            class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i><i
                                                                            class="fa fa-star-o"></i><i
                                                                            class="fa fa-star-o"></i>
                                                                </p>
                                                                <!--                                                        <h4>Movie Director - Jhon Doe</h4>-->
                                                            </div>
                                                            <div class="prs_mcc_list_right_cont_wrapper"><a
                                                                        href="?ctr=movie_booking&id_phim=<?= $fl->id ?>"><i
                                                                            class="flaticon-cart-of-ecommerce"></i></a>
                                                            </div>
                                                            <div class="prs_mcc_list_bottom_cont_wrapper">
                                                                <p><?= $fl->description ?></p>
                                                                <ul>
                                                                    <li><a href="#">View Trailer</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="?ctr=movie_detail&id_phim=<?= $fl->id ?>">View
                                                                            Details</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                            <!--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                                            <!--                                            <div class="prs_mcc_list_movie_main_wrapper">-->
                                            <!--                                                <div class="prs_mcc_list_movie_img_wrapper">-->
                                            <!--                                                    <img src="view/asset/images/content/movie_category/up2.jpg"-->
                                            <!--                                                         alt="categoty_img">-->
                                            <!--                                                </div>-->
                                            <!--                                                <div class="prs_mcc_list_movie_img_cont_wrapper">-->
                                            <!--                                                    <div class="prs_mcc_list_left_cont_wrapper">-->
                                            <!--                                                        <h2>Busting Car</h2>-->
                                            <!--                                                        <p>Drama , Acation &nbsp;&nbsp;&nbsp;<i-->
                                            <!--                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i-->
                                            <!--                                                                class="fa fa-star"></i><i class="fa fa-star-o"></i><i-->
                                            <!--                                                                class="fa fa-star-o"></i>-->
                                            <!--                                                        </p>-->
                                            <!--                                                        <h4>Movie Director - Jhon Doe</h4>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="prs_mcc_list_right_cont_wrapper"><a href="#"><i-->
                                            <!--                                                            class="flaticon-cart-of-ecommerce"></i></a>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="prs_mcc_list_bottom_cont_wrapper">-->
                                            <!--                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed-->
                                            <!--                                                            do eiusod tempor incididunt ut labore et dolore magna-->
                                            <!--                                                            aliqua. Ut enim ad minim veniam, quis trud exercitation-->
                                            <!--                                                            ullamco.</p>-->
                                            <!--                                                        <ul>-->
                                            <!--                                                            <li><a href="#">View Trailer</a>-->
                                            <!--                                                            </li>-->
                                            <!--                                                           <li><a href="?ctr=movie_detail">View Details</a>-->
                                            <!--                                                            </li>-->
                                            <!--                                                        </ul>-->
                                            <!--                                                    </div>-->
                                            <!--                                                </div>-->
                                            <!--                                            </div>-->
                                            <!--                                        </div>-->
                                            <!--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                                            <!--                                            <div class="prs_mcc_list_movie_main_wrapper">-->
                                            <!--                                                <div class="prs_mcc_list_movie_img_wrapper">-->
                                            <!--                                                    <img src="view/asset/images/content/movie_category/up3.jpg"-->
                                            <!--                                                         alt="categoty_img">-->
                                            <!--                                                </div>-->
                                            <!--                                                <div class="prs_mcc_list_movie_img_cont_wrapper">-->
                                            <!--                                                    <div class="prs_mcc_list_left_cont_wrapper">-->
                                            <!--                                                        <h2>Busting Car</h2>-->
                                            <!--                                                        <p>Drama , Acation &nbsp;&nbsp;&nbsp;<i-->
                                            <!--                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i-->
                                            <!--                                                                class="fa fa-star"></i><i class="fa fa-star-o"></i><i-->
                                            <!--                                                                class="fa fa-star-o"></i>-->
                                            <!--                                                        </p>-->
                                            <!--                                                        <h4>Movie Director - Jhon Doe</h4>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="prs_mcc_list_right_cont_wrapper"><a href="#"><i-->
                                            <!--                                                            class="flaticon-cart-of-ecommerce"></i></a>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="prs_mcc_list_bottom_cont_wrapper">-->
                                            <!--                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed-->
                                            <!--                                                            do eiusod tempor incididunt ut labore et dolore magna-->
                                            <!--                                                            aliqua. Ut enim ad minim veniam, quis trud exercitation-->
                                            <!--                                                            ullamco.</p>-->
                                            <!--                                                        <ul>-->
                                            <!--                                                            <li><a href="#">View Trailer</a>-->
                                            <!--                                                            </li>-->
                                            <!--                                                           <li><a href="?ctr=movie_detail">View Details</a>-->
                                            <!--                                                            </li>-->
                                            <!--                                                        </ul>-->
                                            <!--                                                    </div>-->
                                            <!--                                                </div>-->
                                            <!--                                            </div>-->
                                            <!--                                        </div>-->
                                            <!--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                                            <!--                                            <div class="prs_mcc_list_movie_main_wrapper">-->
                                            <!--                                                <div class="prs_mcc_list_movie_img_wrapper">-->
                                            <!--                                                    <img src="view/asset/images/content/movie_category/up4.jpg"-->
                                            <!--                                                         alt="categoty_img">-->
                                            <!--                                                </div>-->
                                            <!--                                                <div class="prs_mcc_list_movie_img_cont_wrapper">-->
                                            <!--                                                    <div class="prs_mcc_list_left_cont_wrapper">-->
                                            <!--                                                        <h2>Busting Car</h2>-->
                                            <!--                                                        <p>Drama , Acation &nbsp;&nbsp;&nbsp;<i-->
                                            <!--                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i-->
                                            <!--                                                                class="fa fa-star"></i><i class="fa fa-star-o"></i><i-->
                                            <!--                                                                class="fa fa-star-o"></i>-->
                                            <!--                                                        </p>-->
                                            <!--                                                        <h4>Movie Director - Jhon Doe</h4>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="prs_mcc_list_right_cont_wrapper"><a href="#"><i-->
                                            <!--                                                            class="flaticon-cart-of-ecommerce"></i></a>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="prs_mcc_list_bottom_cont_wrapper">-->
                                            <!--                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed-->
                                            <!--                                                            do eiusod tempor incididunt ut labore et dolore magna-->
                                            <!--                                                            aliqua. Ut enim ad minim veniam, quis trud exercitation-->
                                            <!--                                                            ullamco.</p>-->
                                            <!--                                                        <ul>-->
                                            <!--                                                            <li><a href="#">View Trailer</a>-->
                                            <!--                                                            </li>-->
                                            <!--                                                           <li><a href="?ctr=movie_detail">View Details</a>-->
                                            <!--                                                            </li>-->
                                            <!--                                                        </ul>-->
                                            <!--                                                    </div>-->
                                            <!--                                                </div>-->
                                            <!--                                            </div>-->
                                            <!--                                        </div>-->
                                            <!--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                                            <!--                                            <div class="prs_mcc_list_movie_main_wrapper">-->
                                            <!--                                                <div class="prs_mcc_list_movie_img_wrapper">-->
                                            <!--                                                    <img src="view/asset/images/content/movie_category/up5.jpg"-->
                                            <!--                                                         alt="categoty_img">-->
                                            <!--                                                </div>-->
                                            <!--                                                <div class="prs_mcc_list_movie_img_cont_wrapper">-->
                                            <!--                                                    <div class="prs_mcc_list_left_cont_wrapper">-->
                                            <!--                                                        <h2>Busting Car</h2>-->
                                            <!--                                                        <p>Drama , Acation &nbsp;&nbsp;&nbsp;<i-->
                                            <!--                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i-->
                                            <!--                                                                class="fa fa-star"></i><i class="fa fa-star-o"></i><i-->
                                            <!--                                                                class="fa fa-star-o"></i>-->
                                            <!--                                                        </p>-->
                                            <!--                                                        <h4>Movie Director - Jhon Doe</h4>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="prs_mcc_list_right_cont_wrapper"><a href="#"><i-->
                                            <!--                                                            class="flaticon-cart-of-ecommerce"></i></a>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="prs_mcc_list_bottom_cont_wrapper">-->
                                            <!--                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed-->
                                            <!--                                                            do eiusod tempor incididunt ut labore et dolore magna-->
                                            <!--                                                            aliqua. Ut enim ad minim veniam, quis trud exercitation-->
                                            <!--                                                            ullamco.</p>-->
                                            <!--                                                        <ul>-->
                                            <!--                                                            <li><a href="#">View Trailer</a>-->
                                            <!--                                                            </li>-->
                                            <!--                                                           <li><a href="?ctr=movie_detail">View Details</a>-->
                                            <!--                                                            </li>-->
                                            <!--                                                        </ul>-->
                                            <!--                                                    </div>-->
                                            <!--                                                </div>-->
                                            <!--                                            </div>-->
                                            <!--                                        </div>-->
                                            <!--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                                            <!--                                            <div class="prs_mcc_list_movie_main_wrapper">-->
                                            <!--                                                <div class="prs_mcc_list_movie_img_wrapper">-->
                                            <!--                                                    <img src="view/asset/images/content/movie_category/up6.jpg"-->
                                            <!--                                                         alt="categoty_img">-->
                                            <!--                                                </div>-->
                                            <!--                                                <div class="prs_mcc_list_movie_img_cont_wrapper">-->
                                            <!--                                                    <div class="prs_mcc_list_left_cont_wrapper">-->
                                            <!--                                                        <h2>Busting Car</h2>-->
                                            <!--                                                        <p>Drama , Acation &nbsp;&nbsp;&nbsp;<i-->
                                            <!--                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i-->
                                            <!--                                                                class="fa fa-star"></i><i class="fa fa-star-o"></i><i-->
                                            <!--                                                                class="fa fa-star-o"></i>-->
                                            <!--                                                        </p>-->
                                            <!--                                                        <h4>Movie Director - Jhon Doe</h4>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="prs_mcc_list_right_cont_wrapper"><a href="#"><i-->
                                            <!--                                                            class="flaticon-cart-of-ecommerce"></i></a>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="prs_mcc_list_bottom_cont_wrapper">-->
                                            <!--                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed-->
                                            <!--                                                            do eiusod tempor incididunt ut labore et dolore magna-->
                                            <!--                                                            aliqua. Ut enim ad minim veniam, quis trud exercitation-->
                                            <!--                                                            ullamco.</p>-->
                                            <!--                                                        <ul>-->
                                            <!--                                                            <li><a href="#">View Trailer</a>-->
                                            <!--                                                            </li>-->
                                            <!--                                                           <li><a href="?ctr=movie_detail">View Details</a>-->
                                            <!--                                                            </li>-->
                                            <!--                                                        </ul>-->
                                            <!--                                                    </div>-->
                                            <!--                                                </div>-->
                                            <!--                                            </div>-->
                                            <!--                                        </div>-->
<!--                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                                <div class="pager_wrapper gc_blog_pagination">-->
<!--                                                    <ul class="pagination">-->
<!--                                                        <li><a href="#"><i class="flaticon-left-arrow"></i></a>-->
<!--                                                        </li>-->
<!--                                                        <li><a href="#">1</a>-->
<!--                                                        </li>-->
<!--                                                        <li><a href="#">2</a>-->
<!--                                                        </li>-->
<!--                                                        <li class="prs_third_page"><a href="#">3</a>-->
<!--                                                        </li>-->
<!--                                                        <li class="hidden-xs"><a href="#">4</a>-->
<!--                                                        </li>-->
<!--                                                        <li><a href="#"><i class="flaticon-right-arrow"></i></a>-->
<!--                                                        </li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </div>-->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-sm visible-xs">
                    <div class="prs_mcc_left_side_wrapper">
                        <!--                        <div class="prs_mcc_left_searchbar_wrapper">-->
                        <!--                            <input type="text" placeholder="Search Movie">-->
                        <!--                            <button><i class="flaticon-tool"></i>-->
                        <!--                            </button>-->
                        <!--                        </div>-->
                        <div class="prs_mcc_bro_title_wrapper">
                            <h2>Thể loại</h2>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="?ctr=home">All
                                        </a>
                                </li>
                                <?php foreach ($the_loai as $tl): ?>
                                    <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="?ctr=home&the_loai=<?=$tl->id?>"><?=$tl->name?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs mc category slidebar End -->
    <!-- prs patner slider Start -->
    <div class="prs_patner_main_section_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_heading_section_wrapper">
                        <h2>Our Patner’s</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_pn_slider_wraper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="view/asset/images/content/p1.jpg" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="view/asset/images/content/p2.jpg" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="view/asset/images/content/p3.jpg" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="view/asset/images/content/p4.jpg" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="view/asset/images/content/p5.jpg" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="view/asset/images/content/p6.jpg" alt="patner_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs patner slider End -->
    <!-- prs Newsletter Wrapper Start -->
<!--    <div class="prs_newsletter_wrapper">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">-->
<!--                    <div class="prs_newsletter_text">-->
<!--                        <h3>Get update sign up now !</h3>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">-->
<!--                    <div class="prs_newsletter_field">-->
<!--                        <input type="text" placeholder="Enter Your Email">-->
<!--                        <button type="submit">Submit</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- prs Newsletter Wrapper End -->
    <!-- prs footer Wrapper Start -->
<?php include_once 'view/layout/footer.php' ?>