<?php
//include_once("models/m_the_loai$m_the_loai.php");

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

    // public function show_categorie_edit()
    // {
    //     $m_the_loai = new m_the_loai();
    //     if (isset($_GET['id'])) {
    //         $id = $_GET['id'];
    //         $categorie = $m_the_loai->read_categorie_by_id($id);
    //         include_once("view/categorie/v_categorie_edit.php");
    //     }
    // }

    // public function categorie_update()
    // {
    //     $m_the_loai = new m_the_loai();
    //     if (isset($_POST['btn_update_categorie'])) {
    //         $id = $_POST['id'];
    //         $categorie = $m_the_loai->read_categorie_by_id($id);
    //         $categorie_name = $_POST['categorie_name'];
          
    //     }
    // }

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