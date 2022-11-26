<?php include_once("view/layout/header.php"); ?>
    <!-- prs navigation End -->
    <!-- prs title wrapper Start -->
    <!--	<div class="prs_title_main_sec_wrapper">-->
    <!--		<div class="prs_title_img_overlay"></div>-->
    <!--		<div class="container">-->
    <!--			<div class="row">-->
    <!--				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
    <!--					<div class="prs_title_heading_wrapper">-->
    <!--						<h2>Confirmation Screen</h2>-->
    <!--						<ul>-->
    <!--							<li><a href="#">Home</a>-->
    <!--							</li>-->
    <!--							<li>&nbsp;&nbsp; >&nbsp;&nbsp; Confirmation Screen</li>-->
    <!--						</ul>-->
    <!--					</div>-->
    <!--				</div>-->
    <!--			</div>-->
    <!--		</div>-->
    <!--	</div>-->
    <!-- prs title wrapper End -->
    <!-- st bc Start -->
    <div class="st_bcc_main_main_wrapper float_left">
        <div class="st_bcc_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="st_bcc_heading_wrapper float_left"><i class="fa fa-check-circle"></i>
                            <h3>Thanh toán thành công <span><?= number_format($ve->gia_ve) ?> VNĐ</span></h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="st_bcc_ticket_boxes_wrapper float_left">
<!--                            <div class="st_bcc_tecket_top_hesder float_left">-->
<!--                                <p>Your Booking is Confirmed!</p>    <span>Booking ID --><!-- </span>-->
<!--                            </div>-->

                            <div class="st_bcc_tecket_bottom_hesder float_left">
                                <div class="st_bcc_tecket_bottom_left_wrapper">
                                    <div class="st_bcc_tecket_bottom_inner_left">
                                        <div class="st_bcc_teckt_bot_inner_img">
                                            <img src="view/asset/images/content/tcc1.png" alt="img">
                                        </div>
                                        <div class="st_bcc_teckt_bot_inner_img_cont">
                                            <h4><?=$ve->ten_phim?></h4>
<!--                                            <h5>Malayalam, 2D</h5>-->
                                            <h3><?=$ve->ngay_chieu?> | <?=$ve->gio_bat_dau?></h3>
                                            <h6><?=$ve->ten_chi_nhanh?></h6>
                                        </div>
                                        <div class="st_purchase_img">
                                            <img src="view/asset/images/content/pur2.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="st_bcc_tecket_bottom_inner_right"><i class="fas fa-chair"></i>
                                        <h3><br>
                                            <span><?=$ve->ghe?></span></h3>
                                    </div>
                                </div>
                                <div class="st_bcc_tecket_bottom_right_wrapper">
<!--                                    <img src="view/asset/images/content/qr.png" alt="img">-->
                                    <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=<?= $ve->id ?>&choe=UTF-8"  alt="qr"/>
                                </div>
                                <div class="st_bcc_tecket_bottom_left_price_wrapper">
                                    <h4>Tổng tiền</h4>
                                    <h5><?= number_format($ve->gia_ve) ?> VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="st_bcc_ticket_boxes_bottom_wrapper float_left">
                            <p>You can access your ticket from your Profile. We will send you
                                <br>an e-Mail/SMS Confirmation with in 15 Minutes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- st bc End -->
<?php include_once("view/layout/footer.php"); ?>