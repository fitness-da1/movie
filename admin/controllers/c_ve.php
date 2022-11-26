<?php

class c_ve
{
   
    public function ve_list()
    {
        $m_ve = new m_ve();
        $ve = $m_ve->read_ve();
        include_once("view/ve/v_ve_list.php");
    }


}