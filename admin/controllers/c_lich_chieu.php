<?php

class c_lich_chieu {
  public function lich_chieu_list()
  {
      $m_lich_chieu = new m_lich_chieu();
      $lich_chieu = $m_lich_chieu->read_lich_chieu();
      include_once("view/lich_chieu/v_lich_chieu_list.php");
  }
}