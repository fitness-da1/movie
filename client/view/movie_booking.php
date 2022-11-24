<?php include_once 'view/layout/header.php' ?>
<!-- prs navigation End -->
<!-- prs title wrapper Start -->
<div class="prs_title_main_sec_wrapper">
    <div class="prs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_title_heading_wrapper">
                    <h2>Movie Booking</h2>
                    <ul>
                        <li><a href="?ctr=home">Home</a>
                        </li>
                        <li>&nbsp;&nbsp; >&nbsp;&nbsp; Movie Bookin</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs title wrapper End -->
<!-- prs video top Start -->
<div class="prs_booking_main_div_section_wrapper">
    <div class="prs_top_video_section_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="st_video_slider_inner_wrapper float_left">
                        <div class="st_video_slider_overlay"></div>
                        <div class="st_video_slide_sec float_left">
                            <a rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'
                               class="test-popup-link">
                                <img src="view/asset/images/index_III/icon.png" alt="img">
                            </a>
                            <h3><?= $phim->name ?></h3>
                            <?php $m_home = new m_home();
                            $the_loai = $m_home->get_the_loai_phim($phim->id);
                            ?>
                            <h4>
                                <?php foreach ($the_loai as $tl) {
                                    echo $tl->the_loai . "</br>";
                                } ?>
                            </h4>

                            <!--                            <h5><span>2d</span> <span>3d</span> <span>D 4DX</span> <span>Imax 3D</span></h5>-->
                        </div>
                        <div class="st_video_slide_social float_left">
                            <div class="st_slider_rating_btn_heart st_slider_rating_btn_heart_5th">
                                <h5><i class="fa fa-star"></i> <?= $phim->rate ?></h5>
                                <!--                                <h4>52,291 votes</h4>-->
                            </div>
                            <!--                            <div class="st_video_slide_social_left float_left">-->
                            <!--                                <ul>-->
                            <!--                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a>-->
                            <!--                                    </li>-->
                            <!--                                    <li><a href="#"><i class="fa fa-twitter"></i></a>-->
                            <!--                                    </li>-->
                            <!--                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>-->
                            <!--                                    </li>-->
                            <!--                                    <li><a href="#"><i class="fa fa-youtube"></i></a>-->
                            <!--                                    </li>-->
                            <!--                                </ul>-->
                            <!--                            </div>-->
                            <div class="st_video_slide_social_right float_left">
                                <ul>
                                    <li data-animation="animated fadeInUp" class=""><i
                                                class="far fa-calendar-alt"></i> <?= $phim->ngay_khoi_chieu ?>
                                    </li>
                                    <li data-animation="animated fadeInUp" class=""><i
                                                class="far fa-clock"></i> <?= $phim->thoi_luong ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs video top End -->
    <!-- st slider rating wrapper Start -->
    <div class="st_slider_rating_main_wrapper float_left">
        <div class="container">
            <div class="st_calender_tabs">
                <ul class="nav nav-tabs">

                    <li class="nav-item active">
                        <a data-toggle="tab" href="#home"><span>MON</span>
                            <br>19</a>
                    </li>

                    <!--                    <li class="nav-item">-->
                    <!--                        <a data-toggle="tab" href="#menu1"> <span>THU</span>-->
                    <!--                            <br>20</a>-->
                    <!--                    </li>-->
                    <!---->
                    <!--                    <li>-->
                    <!--                        <a data-toggle="tab" href="#menu2"> <span>FRI</span>-->
                    <!--                            <br>21</a>-->
                    <!--                    </li>-->
                    <!--                    <li>-->
                    <!--                        <a data-toggle="tab" href="#menu3"> <span>SAT</span>-->
                    <!--                            <br>22</a>-->
                    <!--                    </li>-->
                    <!--                    <li>-->
                    <!--                        <a data-toggle="tab" href="#menu4"> <span>SUN</span>-->
                    <!--                            <br>23</a>-->
                    <!--                    </li>-->

                </ul>
            </div>
        </div>
    </div>
    <!-- st slider rating wrapper End -->
    <!-- st slider sidebar wrapper Start -->
    <div class="st_slider_index_sidebar_main_wrapper st_slider_index_sidebar_main_wrapper_booking float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="st_indx_slider_main_container float_left">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content">

                                    <div id="home" class="tab-pane active">
                                        <div class="st_calender_contant_main_wrapper float_left" id="time">
                                            <!--                                            start time-->
                                            <!--                                            <div class="st_calender_row_cont float_left">-->
                                            <!--                                                <div class="st_calender_asc">-->
                                            <!--                                                    <div class="st_calen_asc_heart"><a href="#"> <i-->
                                            <!--                                                                    class="fa fa-heart"></i></a>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="st_calen_asc_heart_cont">-->
                                            <!--                                                        <h3>Ariesplex SL Cinemas</h3>-->
                                            <!--                                                        <ul>-->
                                            <!--                                                            <li>-->
                                            <!--                                                                <img src="view/asset/images/content/fast-food.png">-->
                                            <!--                                                            </li>-->
                                            <!--                                                            <li>-->
                                            <!--                                                                <img src="view/asset/images/content/bill.png">-->
                                            <!--                                                            </li>-->
                                            <!--                                                        </ul>-->
                                            <!--                                                    </div>-->
                                            <!--                                                </div>-->
                                            <!--                                                <div class="st_calen_asc_tecket_time_select">-->
                                            <!--                                                    <ul id=time_chi_nhanh>-->
                                            <!--                                                        <li>-->
                                            <!--                                                            <a href="?ctr=seat_booking&chi_nhanh=1&time=11:30">11:30 AM</a>-->
                                            <!--                                                        </li>-->
                                            <!--                                                    </ul>-->
                                            <!--                                                </div>-->
                                        </div>
                                        <!--                                            end time-->
                                        <!--                                            <div class="st_calender_row_cont st_calender_row_cont2 float_left">-->
                                        <!--                                                <div class="st_calender_asc">-->
                                        <!--                                                    <div class="st_calen_asc_heart"><a href="#"> <i-->
                                        <!--                                                                    class="fa fa-heart"></i></a>-->
                                        <!--                                                    </div>-->
                                        <!--                                                    <div class="st_calen_asc_heart_cont">-->
                                        <!--                                                        <h3>Carnival: Artech Mall,<br>-->
                                        <!--                                                            Trivandrum</h3>-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li>-->
                                        <!--                                                                <img src="view/asset/images/content/ticket.png">-->
                                        <!--                                                            </li>-->
                                        <!--                                                            <li>-->
                                        <!--                                                                <img src="view/asset/images/content/bill.png">-->
                                        <!--                                                            </li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                                <div class="st_calen_asc_tecket_time_select">-->
                                        <!--                                                    <ul>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">11:30 AM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">02:45 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">06:30 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                    </ul>-->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!--                                            <div class="st_calender_row_cont st_calender_row_cont2 float_left">-->
                                        <!--                                                <div class="st_calender_asc">-->
                                        <!--                                                    <div class="st_calen_asc_heart"><a href="#"> <i-->
                                        <!--                                                                    class="fa fa-heart"></i></a>-->
                                        <!--                                                    </div>-->
                                        <!--                                                    <div class="st_calen_asc_heart_cont">-->
                                        <!--                                                        <h3>Carnival: Greenfield, <br>-->
                                        <!--                                                            Trivandrum</h3>-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li>-->
                                        <!--                                                                <img src="view/asset/images/content/ticket.png">-->
                                        <!--                                                            </li>-->
                                        <!--                                                            <li>-->
                                        <!--                                                                <img src="view/asset/images/content/fast-food.png">-->
                                        <!--                                                            </li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                                <div class="st_calen_asc_tecket_time_select">-->
                                        <!--                                                    <ul>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">11:30 AM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">02:45 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">06:30 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                    </ul>-->
                                        <!--                                                    <p class="asc_bottom_pera">Cancellation Available</p>-->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!--                                            <div class="st_calender_row_cont st_calender_row_cont2 float_left">-->
                                        <!--                                                <div class="st_calender_asc">-->
                                        <!--                                                    <div class="st_calen_asc_heart"><a href="#"> <i-->
                                        <!--                                                                    class="fa fa-heart"></i></a>-->
                                        <!--                                                    </div>-->
                                        <!--                                                    <div class="st_calen_asc_heart_cont">-->
                                        <!--                                                        <h3>Carnival: Mall Of Travancore-->
                                        <!--                                                            (Red Carpet)</h3>-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li>-->
                                        <!--                                                                <img src="view/asset/images/content/ticket.png">-->
                                        <!--                                                            </li>-->
                                        <!--                                                            <li>-->
                                        <!--                                                                <img src="view/asset/images/content/fast-food.png">-->
                                        <!--                                                            </li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                                <div class="st_calen_asc_tecket_time_select">-->
                                        <!--                                                    <ul>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">11:30 AM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                    </ul>-->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!--                                            <div class="st_calender_row_cont st_calender_row_cont2 float_left">-->
                                        <!--                                                <div class="st_calender_asc">-->
                                        <!--                                                    <div class="st_calen_asc_heart"><a href="#"> <i-->
                                        <!--                                                                    class="fa fa-heart"></i></a>-->
                                        <!--                                                    </div>-->
                                        <!--                                                    <div class="st_calen_asc_heart_cont">-->
                                        <!--                                                        <h3>Dhanya Remya: Trivandrum</h3>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                                <div class="st_calen_asc_tecket_time_select">-->
                                        <!--                                                    <ul>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">11:30 AM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">02:45 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">06:30 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                    </ul>-->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!--                                            <div class="st_calender_row_cont st_calender_row_cont2 float_left">-->
                                        <!--                                                <div class="st_calender_asc">-->
                                        <!--                                                    <div class="st_calen_asc_heart"><a href="#"> <i-->
                                        <!--                                                                    class="fa fa-heart"></i></a>-->
                                        <!--                                                    </div>-->
                                        <!--                                                    <div class="st_calen_asc_heart_cont">-->
                                        <!--                                                        <h3>JV Cinemas: Kattakkada</h3>-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li>-->
                                        <!--                                                                <img src="view/asset/images/content/ticket.png">-->
                                        <!--                                                            </li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                                <div class="st_calen_asc_tecket_time_select">-->
                                        <!--                                                    <ul>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">11:30 AM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">02:45 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">06:30 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                    </ul>-->
                                        <!--                                                    <p class="asc_bottom_pera">Cancellation Available</p>-->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!--                                            <div class="st_calender_row_cont st_calender_row_cont2 float_left">-->
                                        <!--                                                <div class="st_calender_asc">-->
                                        <!--                                                    <div class="st_calen_asc_heart"><a href="#"> <i-->
                                        <!--                                                                    class="fa fa-heart"></i></a>-->
                                        <!--                                                    </div>-->
                                        <!--                                                    <div class="st_calen_asc_heart_cont">-->
                                        <!--                                                        <h3>MT Cineplex 4K Dolby-->
                                        <!--                                                            ATMOS: Pothencode</h3>-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li>-->
                                        <!--                                                                <img src="view/asset/images/content/fast-food.png">-->
                                        <!--                                                            </li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                                <div class="st_calen_asc_tecket_time_select">-->
                                        <!--                                                    <ul>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">11:30 AM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">02:45 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">06:30 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                    </ul>-->
                                        <!--                                                    <p class="asc_bottom_pera">Cancellation Available</p>-->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!--                                            <div class="st_calender_row_cont st_calender_row_cont2 float_left">-->
                                        <!--                                                <div class="st_calender_asc">-->
                                        <!--                                                    <div class="st_calen_asc_heart"><a href="#"> <i-->
                                        <!--                                                                    class="fa fa-heart"></i></a>-->
                                        <!--                                                    </div>-->
                                        <!--                                                    <div class="st_calen_asc_heart_cont">-->
                                        <!--                                                        <h3>SPI: Kripa Cinemas --->
                                        <!--                                                            Mahathma Gandhi Road</h3>-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li>-->
                                        <!--                                                                <img src="view/asset/images/content/ticket.png">-->
                                        <!--                                                            </li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                                <div class="st_calen_asc_tecket_time_select">-->
                                        <!--                                                    <ul>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">11:30 AM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">02:45 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">06:30 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                    </ul>-->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!--                                            <div class="st_calender_row_cont st_calender_row_cont2 st_calender_row_cont_last float_left">-->
                                        <!--                                                <div class="st_calender_asc">-->
                                        <!--                                                    <div class="st_calen_asc_heart"><a href="#"> <i-->
                                        <!--                                                                    class="fa fa-heart"></i></a>-->
                                        <!--                                                    </div>-->
                                        <!--                                                    <div class="st_calen_asc_heart_cont">-->
                                        <!--                                                        <h3>Ganga Cine house-->
                                        <!--                                                            4K Dolby Atmos: Attingal</h3>-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li>-->
                                        <!--                                                                <img src="view/asset/images/content/fast-food.png">-->
                                        <!--                                                            </li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                                <div class="st_calen_asc_tecket_time_select">-->
                                        <!--                                                    <ul>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">11:30 AM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">02:45 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                        <li>	<span>-->
                                        <!--															<h4>Rs.160.00</h4>-->
                                        <!--															<p class="asc_pera1">Executive</p>-->
                                        <!--															<p class="asc_pera2">Filling Fast</p>-->
                                        <!--															</span>-->
                                        <!--                                                            <a href="?ctr=seat_booking">06:30 PM</a>-->
                                        <!--                                                        </li>-->
                                        <!--                                                    </ul>-->
                                        <!--                                                    <p class="asc_bottom_pera">Cancellation Available</p>-->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">-->
            <!--                    <div class="prs_mcc_left_side_wrapper">-->
            <!--                        <div class="prs_mcc_left_searchbar_wrapper">-->
            <!--                            <input type="text" placeholder="Search Movie">-->
            <!--                            <button><i class="flaticon-tool"></i>-->
            <!--                            </button>-->
            <!--                        </div>-->
            <!--                        <div class="prs_mcc_bro_title_wrapper">-->
            <!--                            <h2>browse title</h2>-->
            <!--                            <ul>-->
            <!--                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">All-->
            <!--                                        <span>23,124</span></a>-->
            <!--                                </li>-->
            <!--                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Action-->
            <!--                                        <span>512</span></a>-->
            <!--                                </li>-->
            <!--                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Romantic-->
            <!--                                        <span>548</span></a>-->
            <!--                                </li>-->
            <!--                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Love-->
            <!--                                        <span>557</span></a>-->
            <!--                                </li>-->
            <!--                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Musical-->
            <!--                                        <span>554</span></a>-->
            <!--                                </li>-->
            <!--                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Drama-->
            <!--                                        <span>567</span></a>-->
            <!--                                </li>-->
            <!--                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Thriller-->
            <!--                                        <span>689</span></a>-->
            <!--                                </li>-->
            <!--                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Horror-->
            <!--                                        <span>478</span></a>-->
            <!--                                </li>-->
            <!--                            </ul>-->
            <!--                        </div>-->
            <!--                        <div class="prs_mcc_event_title_wrapper">-->
            <!--                            <h2>Top Events</h2>-->
            <!--                            <img src="view/asset/images/content/movie_category/event_img.jpg" alt="event_img">-->
            <!--                            <h3><a href="#">Music Event in india</a></h3>-->
            <!--                            <p>Pune <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i-->
            <!--                                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i-->
            <!--                                            class="fa fa-star-o"></i></span>-->
            <!--                            </p>-->
            <!--                            <h4>June 07 <span>08:00-12:00 pm</span></h4>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->

        </div>
    </div>
</div>
</div>
<!-- st slider sidebar wrapper End -->
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
<div class="prs_newsletter_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="prs_newsletter_text">
                    <h3>Get update sign up now !</h3>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="prs_newsletter_field">
                    <input type="text" placeholder="Enter Your Email">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"
        integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function loadChiNhanh() {
        $.ajax({
            url: '?ctr=get_time_day&id_phim=1&ngay=2022-11-24',
            dataType: 'json',
            success: function (data) {
                $('#time').html("");
                for (i = 0; i < data.length; i++) {
                    var time = data[i];
                    var str = `
                                            <div class="st_calender_row_cont ${i == 1 ? 'st_calender_row_cont2' : ''} float_left">
                                                <div class="st_calender_asc" >
                                                    <div class="st_calen_asc_heart"><a href="#"> <i
                                                                    class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="st_calen_asc_heart_cont">
                                                        <h3>${time['ten_chi_nhanh']}</h3>
                                                        <ul>
                                                            <li>
                                                                <img src="view/asset/images/content/fast-food.png">
                                                            </li>
                                                            <li>
                                                                <img src="view/asset/images/content/bill.png">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="st_calen_asc_tecket_time_select" >
                                                    <ul id=time_chi_nhanh>

                                                    </ul>
                                                </div>
                                            </div>
                                         `;
                    loadGioChieu(time['id_phim'], time['ngay_chieu'], time['id_chi_nhanh']);
                    // loadGioChieu();
                    $('#time').append(str);
                }

                // $('#time_chi_nhanh').html("");
                // for (i = 0; i < data.length; i++) {
                //     var time = data[i];
                //     var cn = `
                //             <li>
                //                  <a href="?ctr=seat_booking&chi_nhanh=>${time['id_chi_nhanh']}&time=${time['gio_bat_dau']}">${time['gio_bat_dau']}</a>
                //             </li>
                //     `;
                //     $('#time_chi_nhanh').append(cn);
                // }
            }
        });
    }

    function loadGioChieu(id_phim, ngay, chi_nhanh) {
        $.ajax({
            url: '?ctr=show_gio_chieu&id_phim=' + id_phim + '&ngay=' + ngay + '&chi_nhanh=' + chi_nhanh,
            // url: '?ctr=show_gio_chieu&id_phim=1&ngay=2022-11-24&chi_nhanh=1',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                // $('#time_chi_nhanh').html("");
                for (i = 0; i < data.length; i++) {
                    var time = data[i];
                    var str = `
                            <li>
                                  <a href="?ctr=seat_booking&id_lich_chieu=${time['id']}">${time['gio_bat_dau']}</a>
                            </li>

                    `;
                    $('#time_chi_nhanh').append(str);
                }
            }
        });
    }

    loadChiNhanh();

</script>


<!-- prs Newsletter Wrapper End -->
<?php include_once 'view/layout/footer.php' ?>;