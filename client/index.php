<?php
include_once("controllers/c_home.php");
include_once("controllers/c_comfirmation_screen.php");
include_once("controllers/c_contact.php");
include_once("controllers/c_booking_type.php");
include_once("controllers/c_movie_booking.php");
include_once("controllers/c_seat_booking.php");
include_once("controllers/c_movie_detail.php");
include_once("controllers/c_user.php");
include_once("controllers/c_payment.php");
include_once("models/m_home.php");
include_once('models/m_lich_chieu.php');
include_once('models/m_ticket.php');
include_once('models/m_phim.php');
include_once('models/m_user.php');
include_once('models/m_payment.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';
session_start();
switch ($ctr) {
    case '/':
    case 'home':
        $home = new c_home();
        $home->show_home();
        break;
    case 'confirmation_screen':
        $comfirmation_screen = new c_comfirmation_screen();
        $comfirmation_screen->show_comfirmation_screen();
        break;
    case 'contact':
        $contact = new c_contact();
        $contact->show_contact();
        break;
    case 'booking_type':
        $booking_type = new c_booking_type();
        $booking_type->show_booking_type();
        break;
    case 'movie_booking':
        $movie_booking = new c_movie_booking();
        $movie_booking->show_movie_booking();
        break;
    case 'seat_booking':
        $seat_booking = new c_seat_booking();
        $seat_booking->show_seat_booking();
        break;
    case 'movie_detail':
        $movie_detail = new c_movie_detail();
        $movie_detail->show_movie_detail();
        break;

    case 'get_time_day':
        $get_time_day = new c_movie_booking();
        $get_time_day->get_time_day();
        break;
    case 'show_gio_chieu':
        $show_gio_chieu = new c_movie_booking();
        $show_gio_chieu->show_time();
        break;
    case 'booking_ticket':
        $seat_booking=new c_seat_booking();
        $seat_booking->seat_booking();
        break;
//    case 'add_ticket':
//        $add_ticket=new c_booking_type();
//        $add_ticket->add_ticket();
//        break;
    case 'login':
        $login = new c_user();
        $login->login();
        break;
    case 'logout':
        $logout= new c_user();
        $logout->logout();
        break;
    case 'signup':
        $signup= new c_user();
        $signup->signup();
    case 'forgot_password':
        $forgotpassword= new c_user();
        $forgotpassword->forgot_password();
        break;
    case 'reset_password':
        $reset_pass=new  c_user();
        $reset_pass->reset_password();
        break;
//    case 'thanh_toan_momo':
//        $momo=new  c_payment();
//        $momo->thanh_toan_momo();
//        break;
//    case 'thanh_toan_onepay':
//        $onepay=new  c_payment();
//        $onepay->thanh_toan_onepay();
//        break;
    case 'thanh_toan_vnpay':
        $vnpay=new  c_payment();
        $vnpay->thanh_toan_vnpay();
        break;
    default:
//        $error = new c_404_error();
//        $error->show_404_error();
}