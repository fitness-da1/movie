<?php

class c_the_loai
{
    public function the_loai_add()
    {
        if (isset($_POST['btn_add_the_loai'])) {
            $id = NULL;
            $name = $_POST['name'];
            $m_the_loai = new m_the_loai();
            $result = $m_the_loai->insert_the_loai($id, $name);
        }
        include_once("view/the_loai/v_the_loai_add.php");
    }
    public function the_loai_list()
    {
        $m_the_loai = new m_the_loai();
        $the_loai = $m_the_loai->read_the_loai();
        include_once("view/the_loai/v_the_loai_list.php");
    }

    public function show_the_loai_edit()
    {
        $m_the_loai = new m_the_loai();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $the_loai = $m_the_loai->read_the_loai_by_id($id);
            include_once("view/the_loai/v_the_loai_edit.php");
        }
    }

    public function the_loai_update()
    {
        if (isset($_POST['btn_update_the_loai'])) {
            $id = $_POST['id'];
            $name= $_POST['name'];
            $m_the_loai = new m_the_loai();
            $m_the_loai->edit_the_loai($name, $id);
            header('location:?ctr=the_loai_list');
        }
    }
    public function the_loai_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_the_loai = new m_the_loai();
            $m_the_loai->the_loai_delete($id);
            header('location:?ctr=the_loai_list&dl=success');
        }
    }

}