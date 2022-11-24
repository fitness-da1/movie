<?php
include_once("controllers/c_home.php");
include_once("controllers/c_comfirmation_screen.php");
include_once("controllers/c_contact.php");
include_once("controllers/c_booking_type.php");
include_once("controllers/c_movie_booking.php");
include_once("controllers/c_seat_booking.php");
include_once("controllers/c_movie_detail.php");
include_once("models/m_home.php");
include_once('models/m_lich_chieu.php');
include_once('models/m_ticket.php');
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
    case 'add_ticket':
        $add_ticket=new c_booking_type();
        $add_ticket->add_ticket();
    default:
//        $error = new c_404_error();
//        $error->show_404_error();
}