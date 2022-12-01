<?php

class c_lich_chieu {
    public function lich_chieu_add(){
        $m_chi_nhanh = new m_chi_nhanh();
        $m_gio_chieu = new m_lich_chieu();
        $chi_nhanh=$m_chi_nhanh->read_chi_nhanh();
        $gio_chieu=$m_gio_chieu->read_phong_of_gio_chieu();
        include_once 'view/lich_chieu/v_lich_chieu_add.php';
        if (isset($_POST['btn_add_lich_chieu'])){
            $id=null;
            $id_phim=$_POST['id_phim'];
            $ngay_chieu=$_POST['ngay_chieu'];
            $id_gio_chieu=$_POST['gio_chieu'];
            $m_gio_chieu->insert_lich_chieu($id,$id_phim,$ngay_chieu,$id_gio_chieu);
            echo '<script>window.open("?ctr=lich_chieu_add&add=success","_self")</script>';
        }
    }
//  public function lich_chieu_list()
//  {
//      $m_lich_chieu = new m_lich_chieu();
//      $lich_chieu = $m_lich_chieu->read_lich_chieu();
//      include_once("view/lich_chieu/v_lich_chieu_list.php");
//  }
  public function load_phim_of_chi_nhanh(){
      $m_lich_chieu = new m_lich_chieu();
      if (isset($_GET['id'])){
          $id=$_GET['id'];
          $phim=$m_lich_chieu->read_phim_of_cn($id);
          echo json_encode($phim);
      }
  }
}