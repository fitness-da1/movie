<?php

class c_seat_booking
{
    public function show_seat_booking()
    {
        $m_ticket = new m_ticket();
        $m_lich_chieu= new m_lich_chieu();
        if (isset($_GET['id_lich_chieu'])) {
            $lich_chieu = $_GET['id_lich_chieu'];
            $info = $m_ticket->show_info_phong_chieu($lich_chieu);
            $seat_close=$m_lich_chieu->check_status_seat($lich_chieu);
            include_once 'view/seat_booking.php';
        }
    }

    public function seat_booking()
    {

        $_SESSION['ve'] = [];
        if (isset($_POST['btn_proceed'])) {
            $_SESSION['ve']['ghe'] = implode(',', $_POST['seat']);
            $_SESSION['ve']['so_luong_ghe'] = count($_POST['seat'], 0);
            $_SESSION['ve']['lich_chieu'] = $_POST['id_lich_chieu'];
            $_SESSION['ve']['id_user'] = $_POST['id_user'];
            $_SESSION['ve']['ten_phim'] = $_POST['ten_phim'];
            $_SESSION['ve']['ngay_chieu'] = $_POST['ngay_chieu'];
            $_SESSION['ve']['phong_chieu'] = $_POST['phong_chieu'];
            $_SESSION['ve']['gio_chieu'] = $_POST['gio_chieu'];
            $_SESSION['ve']['chi_nhanh'] = $_POST['chi_nhanh'];
            header('location:?ctr=booking_type');
        }
    }

}





