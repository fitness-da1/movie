<?php

class c_lich_chieu {
    public function lich_chieu_add(){
//        $m_lich_chieu = new m_lich_chieu();
        $m_chi_nhanh = new m_chi_nhanh();
        $chi_nhanh=$m_chi_nhanh->read_chi_nhanh();
        include_once 'view/lich_chieu/v_lich_chieu_add.php';
    }
  public function lich_chieu_list()
  {
      $m_lich_chieu = new m_lich_chieu();
      $lich_chieu = $m_lich_chieu->read_lich_chieu();
      include_once("view/lich_chieu/v_lich_chieu_list.php");
  }
  public function load_phim_of_chi_nhanh(){
      $m_lich_chieu = new m_lich_chieu();
      if (isset($_GET['id'])){
          $id=$_GET['id'];
          $phim=$m_lich_chieu->read_phim_of_cn($id);
          echo json_encode($phim);
      }
  }
}