
<?php
if (isset($_SESSION['ve'])){
    include_once("view/layout/header.php");
?>
	<!-- color picker start -->
	<!-- st top header Start -->
	<div class="st_bt_top_header_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="st_bt_top_back_btn float_left">	<a href="?ctr=seat_booking&id_lich_chieu=<?=$_SESSION['ve']['lich_chieu']?>"><i class="fas fa-long-arrow-alt-left"></i> &nbsp;Back</a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="st_bt_top_center_heading float_left">
						<h3>Thông tin vé đặt</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- st top header Start -->
	<!-- st dtts section Start -->
	<div class="st_dtts_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
					<div class="st_dtts_left_main_wrapper float_left">
						<div class="row">
							<div class="col-md-12">
								<div class="st_dtts_ineer_box float_left">
									<ul>
                                        <li><span class="dtts1">Chi nhánh</span>  <span class="dtts2"><?= $_SESSION['ve']['chi_nhanh']?></span>
                                        </li>
										<li><span class="dtts1">Ngày chiếu</span>  <span class="dtts2"><?= $_SESSION['ve']['ngay_chieu']?></span>
										</li>
										<li><span class="dtts1">Giờ chiếu</span>  <span class="dtts2"><?=$_SESSION['ve']['gio_chieu']?></span>
										</li>
                                        <li><span class="dtts1">Phòng chiếu</span>  <span class="dtts2"><?=$_SESSION['ve']['phong_chieu']?></span>
                                        </li>
										<li><span class="dtts1">Tên phim</span>  <span class="dtts2"><?=$_SESSION['ve']['ten_phim']?></span>
										</li>
										<li><span class="dtts1">Ghế</span>  <span class="dtts2"><?= $_SESSION['ve']['ghe']?></span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-12">
								<div class="st_cherity_section float_left">
<!--									<div class="st_cherity_img float_left">-->
<!--										<img src="asset/images/content/cc1.jpg" alt="img">-->
<!--									</div>-->
<!--									<div class="st_cherity_img_cont float_left">-->
<!--										<div class="box">-->
<!--											<p class="cc_pc_color1">-->
<!--												<input type="checkbox" id="c201" name="cb">-->
<!--												<label for="c201"><span>ADD Rs. 2</span> to your transaction as a donation. (Uncheck if you do not wish to donate)</label>-->
<!--										</div>-->
<!--									</div>-->
								</div>
							</div>
							<div class="col-md-12">
								<div class="st_cherity_btn float_left">
<!--									<h3>SELECT TICKET TYPE</h3>-->
<!--									<ul>-->
<!--										<li><a href="#"><i class="flaticon-tickets"></i> &nbsp;M-Ticket</a>-->
<!--										</li>-->
<!--										<li><a href="#"><i class="flaticon-tickets"></i> &nbsp;Box office Pickup </a>-->
<!--										</li>-->
<!--										<li><button class="btn btn-primary" href="?ctr=confirmation_screen">Proceed to Pay </button>-->
<!--										</li>-->
<!--									</ul>-->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-md-12">
							<div class="st_dtts_bs_wrapper float_left">
								<div class="st_dtts_bs_heading float_left">
									<p>Hóa đơn</p>
								</div>
								<div class="st_dtts_sb_ul float_left">
									<ul>
                                        <li>Tên phim : <?=$_SESSION['ve']['ten_phim']?></li>
										<li>Ghế: <?= $_SESSION['ve']['ghe']?>
											<br>Số vé: <?= $_SESSION['ve']['so_luong_ghe']?><span><?= number_format($_SESSION['ve']['so_luong_ghe']*50000)?> VNĐ</span>
										</li>
										<li>VAT(5%): <span><?= number_format($_SESSION['ve']['so_luong_ghe']*50000*0.05)?> VNĐ</span>
										</li>
									</ul>
<!--									<p>Booking Fees <span>Rs.60.00</span>-->
<!--									</p>-->
<!--									<p>Integrated GST (IGST) @ 18% <span>Rs.60.00</span>-->
<!--									</p>-->
								</div>
								<div class="st_dtts_sb_h2 float_left">
<!--									<h3>Tạm tính <span>--><?//=($_SESSION['ve']['so_luong_ghe']*50000)+($_SESSION['ve']['so_luong_ghe']*50000*0.05)?><!--</span></h3>-->
                                    <h5>Tổng tiền <span><?=number_format(($_SESSION['ve']['so_luong_ghe']*50000)+($_SESSION['ve']['so_luong_ghe']*50000*0.05))?> VNĐ</span></h5>
								</div>

							</div>
                            <div class="check-out" >
<!--                                <form action="?ctr=thanh_toan_momo" method="post">-->
<!--                                    <button name="momo_qr" class="btn btn-primary" style="margin-top: 1em !important; width: 100%">Thanh toán QR Momo</button>-->
<!--                                    <button name="momo_atm" class="btn btn-primary" style="margin-top: 1em !important; width: 100%">Thanh toán ATM Momo</button>-->
<!--                                </form>-->
                                <form action="?ctr=thanh_toan_vnpay" method="post">
                                    <input type="text" name="id_lich_chieu" value="<?=$_SESSION['ve']['lich_chieu']?>" hidden>
                                    <input type="text" name="id_khach_hang" value="<?=$_SESSION['user']->id?>" hidden>
                                    <input type="text" name="gia_ve" value="<?=($_SESSION['ve']['so_luong_ghe']*50000)+($_SESSION['ve']['so_luong_ghe']*50000*0.05)?>" hidden>
                                    <input type="text" name="ghe" value="<?=$_SESSION['ve']['ghe']?>" hidden>
                                    <button name="redirect" class="btn btn-primary" style="margin-top: 1em !important; width: 100%">Thanh toán bằng VNPAY</button>
                                </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- st dtts section End -->
	<!--main js file start-->
<!--	<script src="asset/js/jquery_min.js"></script>-->
<!--	<script src="asset/js/modernizr.js"></script>-->
<!--	<script src="asset/js/bootstrap.js"></script>-->
<!--	<script src="asset/js/owl.carousel.js"></script>-->
<!--	<script src="asset/js/jquery.dlmenu.js"></script>-->
<!--	<script src="asset/js/jquery.sticky.js"></script>-->
<!--	<script src="asset/js/jquery.nice-select.min.js"></script>-->
<!--	<script src="asset/js/jquery.magnific-popup.js"></script>-->
<!--	<script src="asset/js/jquery.bxslider.min.js"></script>-->
<!--	<script src="asset/js/venobox.min.js"></script>-->
<!--	<script src="asset/js/smothscroll_part1.js"></script>-->
<!--	<script src="asset/js/smothscroll_part2.js"></script>-->
<!--	<script src="asset/js/plugin/rs_slider/jquery.themepunch.revolution.min.js"></script>-->
<!--	<script src="asset/js/plugin/rs_slider/jquery.themepunch.tools.min.js"></script>-->
<!--	<script src="asset/js/plugin/rs_slider/revolution.addon.snow.min.js"></script>-->
<!--	<script src="asset/js/plugin/rs_slider/revolution.extension.actions.min.js"></script>-->
<!--	<script src="asset/js/plugin/rs_slider/revolution.extension.carousel.min.js"></script>-->
<!--	<script src="asset/js/plugin/rs_slider/revolution.extension.kenburn.min.js"></script>-->
<!--	<script src="asset/js/plugin/rs_slider/revolution.extension.layeranimation.min.js"></script>-->
<!--	<script src="asset/js/plugin/rs_slider/revolution.extension.migration.min.js"></script>-->
<!--	<script src="asset/js/plugin/rs_slider/revolution.extension.navigation.min.js"></script>-->
<!--	<script src="asset/js/plugin/rs_slider/revolution.extension.parallax.min.js"></script>-->
<!--	<script src="asset/js/plugin/rs_slider/revolution.extension.slideanims.min.js"></script>-->
<!--	<script src="asset/js/plugin/rs_slider/revolution.extension.video.min.js"></script>-->
<!--	<script src="asset/js/custom.js"></script>-->
	<!--main js file end-->
	<script>
		//* Isotope js
		    function protfolioIsotope(){
		        if ( $('.st_fb_filter_left_box_wrapper').length ){
		            // Activate isotope in container
		            $(".protfoli_inner, .portfoli_inner").imagesLoaded( function() {
		                $(".protfoli_inner, .portfoli_inner").isotope({
		                    layoutMode: 'masonry',
		                });
		            });

		            // Add isotope click function
		            $(".protfoli_filter li").on('click',function(){
		                $(".protfoli_filter li").removeClass("active");
		                $(this).addClass("active");
		                var selector = $(this).attr("data-filter");
		                $(".protfoli_inner, .portfoli_inner").isotope({
		                    filter: selector,
		                    animationOptions: {
		                        duration: 450,
		                        easing: "linear",
		                        queue: false,
		                    }
		                });
		                return false;
		            });
		        };
		    };
		 protfolioIsotope ();

		  function changeQty(increase) {
				            var qty = parseInt($('.select_number').find("input").val());
				            if (!isNaN(qty)) {
				                qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
				                $('.select_number').find("input").val(qty);
				            } else {
				                $('.select_number').find("input").val(1);
				            }
				        }
	</script>
<?php
include_once("view/layout/footer.php"); }
header("location: ?ctr=home");
?>