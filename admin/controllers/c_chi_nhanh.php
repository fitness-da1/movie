<?php

class c_chi_nhanh
{
    public function chi_nhanh_add()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        if (isset($_POST['btn_add_chi_nhanh'])) {
            $id = NULL;
            $name = $_POST['name'];
            $check = $m_chi_nhanh->read_chi_nhanh_by_name($name);
            if (!$check && trim($name) != '') {
                $result = $m_chi_nhanh->insert_chi_nhanh($id, $name);
            } elseif (trim($name) == '') {
                $error = 'Vui lòng điền đầy đủ thông tin!';
            } else {
                $error = "Tên chi nhánh đã tồn tại";
            }
        }
        include_once("view/chi_nhanh/v_chi_nhanh_add.php");
    }

    public function chi_nhanh_list()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        $chi_nhanh = $m_chi_nhanh->read_chi_nhanh();
        include_once("view/chi_nhanh/v_chi_nhanh_list.php");
    }

    public function show_chi_nhanh_edit()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $chi_nhanh = $m_chi_nhanh->read_chi_nhanh_by_id($id);
            include_once("view/chi_nhanh/v_chi_nhanh_edit.php");
        }
    }

    public function chi_nhanh_update()
    {
        if (isset($_POST['btn_update_chi_nhanh'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $m_chi_nhanh = new m_chi_nhanh();
            $m_chi_nhanh->edit_chi_nhanh($name, $id);
            header('location:?ctr=chi_nhanh_list');
        }
    }

    public function chi_nhanh_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_chi_nhanh = new m_chi_nhanh();
            $m_chi_nhanh->chi_nhanh_delete($id);
            header('location:?ctr=chi_nhanh_list&dl=success');
        }
    }

//end chi nhánh

    public function add_film_of_chi_nhanh()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        $m_phim = new m_phim();
        $chi_nhanh = $m_chi_nhanh->read_chi_nhanh();
        $phim = $m_phim->read_phim();
        if (isset($_POST['btn_add_phim_cn'])) {
            $id = null;
            if (isset($_POST['id_phim'])) {
                $id_phim = $_POST['id_phim'];
            }
//            $id_phim = $_POST['id_phim'];
            $id_chi_nhanh = $_POST['id_chi_nhanh'];
            if (!empty($id_phim) && !empty($id_chi_nhanh)) {
                foreach ($id_phim as $id_ph) {
                    $m_chi_nhanh->add_film_of_chi_nhanh($id, $id_ph, $id_chi_nhanh);
                }
                echo "<script>alert('Thêm thành công!')</script>";
            } else {
                $error = 'Vui lòng chọn phim và chi nhánh!';
            }

        }
        include_once 'view/chi_nhanh/v_add_film_of_chi_nhanh.php';
    }

    public function ds_phim_cn()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $phim = $m_chi_nhanh->list_film_of_chi_nhanh($id);
            include_once 'view/chi_nhanh/v_list_phim_of_chi_nhanh.php';
        }
    }

    public function dl_phim_cn()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_chi_nhanh->delete_phim_of_chi_nhanh($id);
            header('location: ?ctr=chi_nhanh_list');
        }
    }

    public function read_lich_chieu()
    {
        $m_lich_chieu = new m_lich_chieu();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $lich_chieu = $m_lich_chieu->show_lich_chieu_of_chi_nhanh($id);
            include_once 'view/chi_nhanh/v_lich_chieu_list.php';
        }
    }

    public function read_ve_lich_chieu()
    {
        $m_lich_chieu = new m_chi_nhanh();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $ve = $m_lich_chieu->list_ve_of_lich_chieu($id);
            include_once 'view/chi_nhanh/v_list_ve_of_lich_chieu.php';
        }
    }

    public function active_pay_ve_lich_chieu()
    {
        $m_lich_chieu = new m_chi_nhanh();
        if (isset($_GET['id_ve'])) {
            $id = $_GET['id_ve'];
            $id_lc = $_GET['id_lc'];
            $id_cn = $_GET['id_cn'];
            $m_lich_chieu->active_pay_ve_of_lich_chieu($id);
//            include_once 'view/chi_nhanh/v_list_ve_of_lich_chieu.php';
            header('location: ?ctr=load_ve_of_lich_chieu&id=' . $id_lc . '&id_cn=' . $id_cn);
        }
    }

    public function edit_ve_lich_chieu()
    {
        $m_lich_chieu = new m_chi_nhanh();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $ve = $m_lich_chieu->show_ve_of_lich_chieu($id);
            include_once 'view/ve/v_edit_ve.php';
        }
        if (isset($_POST['btn_edit_ve'])) {
            $id = $_POST['id'];
            $id_lc = $_GET['id_lc'];
            $id_cn = $_GET['id_cn'];
            $ghe = $_POST['ghe'];
            $m_lich_chieu->edit_ve_of_lich_chieu($ghe, $id);
            header('location: ?ctr=load_ve_of_lich_chieu&id=' . $id_lc . '&id_cn=' . $id_cn);
        }
    }

}