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
            $name= $_POST['name'];
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

}