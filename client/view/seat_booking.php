<?php include_once 'view/layout/header.php';
$seat = [
    "D" => [
        "D1",
        "D2",
        "D3",
        "D4",
        "D5",
        "D6",
        "D7",
        "D8",
        "D9",
        "D10",
        "D11",
        "D12",
        "D13",
        "D14",
        "D15",
        "D16",
        "D17",
        "D18",
        "D19",
        "D20",
        "D21",
        "D22",
        "D23",
    ],
    "C" => [
        "C1",
        "C2",
        "C3",
        "C4",
        "C5",
        "C6",
        "C7",
        "C8",
        "C9",
        "C10",
        "C11",
        "C12",
        "C13",
        "C14",
        "C15",
        "C16",
        "C17",
        "C18",
        "C19",
        "C20",
        "C21",
        "C22",
        "C23"
    ],
    "B" => [
        "B1",
        "B2",
        "B3",
        "B4",
        "B5",
        "B6",
        "B7",
        "B8",
        "B9",
        "B10",
        "B11",
        "B12",
        "B13",
        "B14",
        "B15",
        "B16",
        "B17",
        "B18",
        "B19",
        "B20",
        "B21",
        "B22",
        "B23"
    ],
    "A" => [
        "A1",
        "A2",
        "A3",
        "A4",
        "A5",
        "A6",
        "A7",
        "A8",
        "A9",
        "A10",
        "A11",
        "A12",
        "A13",
        "A14",
        "A15",
        "A16",
        "A17",
        "A18",
        "A19",
        "A20",
        "A21",
        "A22",
        "A23"
    ]
];

$close = ["D1", "D12", "A3", "B10"];
//print_r($seat_close);
//$te=implode(',',$seat_close);
//$test=explode(',',$te);
//print_r($test);
//print_r($seat_close);
//
////    $close = explode(',', $sss);
//   $ttt=array_merge($seat_close>$seat_close[0],$seat_close[1]);
//$close=$ttt;
//print_r($ttt);




?>
    <!-- color picker start -->
    <!-- st top header Start -->
    <form action="?ctr=booking_ticket" method="post">
        <input type="text" name="id_user" value="1" hidden>
        <input type="text" name="ngay_chieu" value="<?=$info->ngay_chieu?>" hidden>
        <input type="text" name="gio_chieu" value="<?=$info->gio_bat_dau?>" hidden>
        <input type="text" name="phong_chieu" value="<?=$info->ten_phong?>" hidden>
        <input type="text" name="ten_phim" value="<?=$info->ten_phim?>" hidden>
        <input type="text" name="id_lich_chieu" value="<?=$info->id?>" hidden>
        <input type="text" name="chi_nhanh" value="<?=$info->ten_chi_nhanh?>" hidden>
        <div class="st_bt_top_header_wrapper float_left">
            <div class="container container_seat">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="st_bt_top_back_btn st_bt_top_back_btn_seatl float_left"><a
                                    href="?ctr=movie_booking&id_phim=1"><i
                                        class="fas fa-long-arrow-alt-left"></i> &nbsp;Back</a>
                        </div>
                        <div class="cc_ps_quantily_info cc_ps_quantily_info_tecket">
                            <!--						<p>Select Ticket</p>-->
                            <div class="select_number">
                                <!--												<button onclick="changeQty(1); return false;" class="increase"><i class="fa fa-plus"></i>-->
                                <!--												</button>-->
                                <!--												<input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />-->
                                <!--												<button onclick="changeQty(0); return false;" class="decrease"><i class="fa fa-minus"></i>-->
                                <!--												</button>-->
                            </div>
                            <input type="hidden" name="product_id"/>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="st_bt_top_center_heading st_bt_top_center_heading_seat_book_page float_left">
                            <h3>Tên phim: <?=$info->ten_phim?></h3>
                            <h4>Ngày chiếu: <?=$info->ngay_chieu?> | Giờ chiếu: <?=$info->gio_bat_dau?> | Phòng: <?=$info->ten_phong?></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <!--                    <div class="st_bt_top_close_btn st_bt_top_close_btn2 float_left"><a href="#"><i-->
                        <!--                                    class="fa fa-times"></i></a>-->
                        <!--                    </div>-->
                        <div class="st_seatlay_btn float_left">
                            <!--                            <a href="?ctr=booking_type">Proceed to Pay</a>-->
                            <button type="submit" name="btn_proceed" class="btn btn-primary">Proceed to Pay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- st top header Start -->
        <!-- st seat Layout Start -->
        <div class="st_seatlayout_main_wrapper float_left">
            <div class="container container_seat">
                <div class="st_seat_lay_heading float_left">
                    <h3>Ariesplex SL Cinemas</h3>
                </div>
                <div class="st_seat_full_container">
                    <div class="st_seat_lay_economy_wrapper float_left">
                        <div class="screen">
                            <img src="view/asset/images/content/screen.png">
                        </div>

                        <!--                    <form action="?seat_booking" method="post">-->
                        <div class="st_seat_lay_row float_left">
                            <?php foreach ($seat as $item => $value): ?>
                                <ul>
                                    <li class="st_seat_heading_row"><?= $item ?></li>
                                    <?php foreach ($value as $key => $st): ?>
                                        <ul>
                                            <li class="<?= in_array($st, $close) == true ? 'seat_disable' : '' ?>">
                                                <input type="checkbox" id="<?= $st ?>" name="seat[]" value="<?= $st ?>" placeholder="1">
                                                <label for="<?= $st ?>"></label>
                                            </li>
                                        </ul>

                                    <?php endforeach; ?>
                                </ul>
                            <?php endforeach; ?>
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c2" name="seat[]">-->
                            <!--                                    <label for="c2"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c3" name="seat[]">-->
                            <!--                                    <label for="c3"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c4" name="seat[]">-->
                            <!--                                    <label for="c4"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c5" name="seat[]">-->
                            <!--                                    <label for="c5"></label>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                            <!--                            <ul class="st_eco_second_row">-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c6" name="seat[]">-->
                            <!--                                    <label for="c6"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c7" name="seat[]" placeholder="1">-->
                            <!--                                    <label for="c7"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c8" name="seat[]">-->
                            <!--                                    <label for="c8"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c9" name="seat[]">-->
                            <!--                                    <label for="c9"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c10" name="seat[]">-->
                            <!--                                    <label for="c10"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c11" name="seat[]">-->
                            <!--                                    <label for="c11"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c12" name="seat[]">-->
                            <!--                                    <label for="c12"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c13" name="seat[]">-->
                            <!--                                    <label for="c13"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c14" name="seat[]">-->
                            <!--                                    <label for="c14"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c15" name="seat[]">-->
                            <!--                                    <label for="c15"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c16" name="seat[]">-->
                            <!--                                    <label for="c16"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c17" name="seat[]">-->
                            <!--                                    <label for="c17"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c18" name="seat[]">-->
                            <!--                                    <label for="c18"></label>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                            <!--                            <ul class="st_eco_second_row">-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c19" name="seat[]">-->
                            <!--                                    <label for="c19"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c20" name="seat[]" placeholder="1">-->
                            <!--                                    <label for="c20"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c21" name="seat[]">-->
                            <!--                                    <label for="c21"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c22" name="seat[]">-->
                            <!--                                    <label for="c22"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c23" name="seat[]">-->
                            <!--                                    <label for="c23"></label>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="st_seat_lay_economy_wrapper st_seat_lay_economy_wrapperexicutive float_left">-->
                            <!--                         <div class="st_seat_lay_economy_heading float_left">-->
                            <!--                            <h3>Executive + 3d glasss - rs 190.00</h3>-->
                            <!--                        </div> -->
                            <!--                        <div class="st_seat_lay_row float_left">-->
                            <!--                            <ul>-->
                            <!--                                <li class="st_seat_heading_row">C</li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c24" name="seat[]">-->
                            <!--                                    <label for="c24"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c25" name="seat[]" placeholder="1">-->
                            <!--                                    <label for="c25"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c26" name="seat[]">-->
                            <!--                                    <label for="c26"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c27" name="seat[]">-->
                            <!--                                    <label for="c27"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c28" name="seat[]">-->
                            <!--                                    <label for="c28"></label>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                            <!--                            <ul class="st_eco_second_row">-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c29" name="seat[]">-->
                            <!--                                    <label for="c29"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c30" name="seat[]" placeholder="1">-->
                            <!--                                    <label for="c30"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c31" name="seat[]">-->
                            <!--                                    <label for="c31"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c32" name="seat[]">-->
                            <!--                                    <label for="c32"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c33" name="seat[]">-->
                            <!--                                    <label for="c33"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c34" name="seat[]">-->
                            <!--                                    <label for="c34"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c35" name="seat[]">-->
                            <!--                                    <label for="c35"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c36" name="seat[]">-->
                            <!--                                    <label for="c36"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c37" name="seat[]">-->
                            <!--                                    <label for="c37"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c38" name="seat[]">-->
                            <!--                                    <label for="c38"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c39" name="seat[]">-->
                            <!--                                    <label for="c39"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c40" name="seat[]">-->
                            <!--                                    <label for="c40"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c41" name="seat[]">-->
                            <!--                                    <label for="c41"></label>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                            <!--                            <ul class="st_eco_second_row">-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c42" name="seat[]">-->
                            <!--                                    <label for="c42"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c43" name="seat[]" placeholder="1">-->
                            <!--                                    <label for="c43"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c44" name="seat[]">-->
                            <!--                                    <label for="c44"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c45" name="seat[]">-->
                            <!--                                    <label for="c45"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c46" name="seat[]">-->
                            <!--                                    <label for="c46"></label>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                            <!--                        </div>-->
                            <!--                        <div class="st_seat_lay_row float_left">-->
                            <!--                            <ul>-->
                            <!--                                <li class="st_seat_heading_row">B</li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c47" name="seat[]">-->
                            <!--                                    <label for="c47"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c48" name="seat[]" placeholder="1">-->
                            <!--                                    <label for="c48"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c49" name="seat[]">-->
                            <!--                                    <label for="c49"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c50" name="seat[]">-->
                            <!--                                    <label for="c50"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c51" name="seat[]">-->
                            <!--                                    <label for="c51"></label>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                            <!--                            <ul class="st_eco_second_row">-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c52" name="seat[]">-->
                            <!--                                    <label for="c52"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c53" name="seat[]" placeholder="1">-->
                            <!--                                    <label for="c53"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c54" name="seat[]">-->
                            <!--                                    <label for="c54"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c55" name="seat[]">-->
                            <!--                                    <label for="c55"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c56" name="seat[]">-->
                            <!--                                    <label for="c56"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c57" name="seat[]">-->
                            <!--                                    <label for="c57"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c58" name="seat[]">-->
                            <!--                                    <label for="c58"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c59" name="seat[]">-->
                            <!--                                    <label for="c59"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c60" name="seat[]">-->
                            <!--                                    <label for="c60"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c61" name="seat[]">-->
                            <!--                                    <label for="c61"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c62" name="seat[]">-->
                            <!--                                    <label for="c62"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c63" name="seat[]">-->
                            <!--                                    <label for="c63"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c64" name="seat[]">-->
                            <!--                                    <label for="c64"></label>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                            <!--                            <ul class="st_eco_second_row">-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c65" name="seat[]">-->
                            <!--                                    <label for="c65"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c66" name="seat[]" placeholder="1">-->
                            <!--                                    <label for="c66"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c67" name="seat[]">-->
                            <!--                                    <label for="c67"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c68" name="seat[]">-->
                            <!--                                    <label for="c68"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c69" name="seat[]">-->
                            <!--                                    <label for="c69"></label>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                            <!--                        </div>-->
                            <!--                        <div class="st_seat_lay_row float_left">-->
                            <!--                            <ul>-->
                            <!--                                <li class="st_seat_heading_row">A</li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c70" name="seat[]">-->
                            <!--                                    <label for="c70"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c71" name="seat[]" placeholder="1">-->
                            <!--                                    <label for="c71"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c72" name="seat[]">-->
                            <!--                                    <label for="c72"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c73" name="seat[]">-->
                            <!--                                    <label for="c73"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c74" name="seat[]">-->
                            <!--                                    <label for="c74"></label>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                            <!--                            <ul class="st_eco_second_row">-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c75" name="seat[]">-->
                            <!--                                    <label for="c75"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c76" name="seat[]" placeholder="1">-->
                            <!--                                    <label for="c76"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c77" name="seat[]">-->
                            <!--                                    <label for="c77"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c78" name="seat[]">-->
                            <!--                                    <label for="c78"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c79" name="seat[]">-->
                            <!--                                    <label for="c79"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c80" name="seat[]">-->
                            <!--                                    <label for="c80"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c81" name="seat[]">-->
                            <!--                                    <label for="c81"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c82" name="seat[]">-->
                            <!--                                    <label for="c82"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c83" name="seat[]">-->
                            <!--                                    <label for="c83"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c84" name="seat[]">-->
                            <!--                                    <label for="c84"></label>-->
                            <!--                                </li>-->
                            <!--                                <li class="seat_disable">-->
                            <!--                                    <input type="checkbox" id="c85" name="seat[]">-->
                            <!--                                    <label for="c85"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c86" name="seat[]">-->
                            <!--                                    <label for="c86"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c87" name="seat[]">-->
                            <!--                                    <label for="c87"></label>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                            <!--                            <ul class="st_eco_second_row">-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c88" name="seat[]">-->
                            <!--                                    <label for="c88"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c89" name="seat[]" placeholder="1">-->
                            <!--                                    <label for="c89"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c90" name="seat[]">-->
                            <!--                                    <label for="c90"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c91" name="seat[]">-->
                            <!--                                    <label for="c91"></label>-->
                            <!--                                </li>-->
                            <!--                                <li>-->
                            <!--                                    <input type="checkbox" id="c92" name="seat[]">-->
                            <!--                                    <label for="c92"></label>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- st seat Layout End -->
    <!--main js file start-->
    <script>
        //* Isotope js
        //     function protfolioIsotope(){
        //         if ( $('.st_fb_filter_left_box_wrapper').length ){
        //             // Activate isotope in container
        //             $(".protfoli_inner, .portfoli_inner").imagesLoaded( function() {
        //                 $(".protfoli_inner, .portfoli_inner").isotope({
        //                     layoutMode: 'masonry',
        //                 });
        //             });
        //
        //             // Add isotope click function
        //             $(".protfoli_filter li").on('click',function(){
        //                 $(".protfoli_filter li").removeClass("active");
        //                 $(this).addClass("active");
        //                 var selector = $(this).attr("data-filter");
        //                 $(".protfoli_inner, .portfoli_inner").isotope({
        //                     filter: selector,
        //                     animationOptions: {
        //                         duration: 450,
        //                         easing: "linear",
        //                         queue: false,
        //                     }
        //                 });
        //                 return false;
        //             });
        //         };
        //     };
        //  protfolioIsotope ();

        // function changeQty(increase) {
        // 	            var qty = parseInt($('.select_number').find("input").val());
        // 	            if (!isNaN(qty)) {
        // 	                qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
        // 	                $('.select_number').find("input").val(qty);
        // 	            } else {
        // 	                $('.select_number').find("input").val(1);
        // 	            }
        // 	        }
    </script>
<?php include_once 'view/layout/footer.php' ?>