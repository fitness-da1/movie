<?php

class c_chi_nhanh
{
    public function chi_nhanh_add()
    {
        if (isset($_POST['btn_add_chi_nhanh'])) {
            $id = NULL;
            $name = $_POST['name'];
            $m_chi_nhanh = new m_chi_nhanh();
            $result = $m_chi_nhanh->insert_chi_nhanh($id, $name);
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

    public function add_film_of_chi_nhanh()
    {
        $m_chi_nhanh = new m_chi_nhanh();
        $m_phim = new m_phim();
        $chi_nhanh = $m_chi_nhanh->read_chi_nhanh();
        $phim = $m_phim->read_phim();
        include_once 'view/chi_nhanh/v_add_film_of_chi_nhanh.php';
        if (isset($_POST['btn_add_phim_cn'])) {
            $id = null;
            $id_phim = $_POST['id_phim'];
            $id_chi_nhanh = $_POST['id_chi_nhanh'];
            foreach ($id_phim as $id_ph) {
                $m_chi_nhanh->add_film_of_chi_nhanh($id, $id_ph, $id_chi_nhanh);
            }
        }
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

}