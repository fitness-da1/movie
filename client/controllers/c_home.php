<?php
class c_home{
    public function show_home(){
        $m_home = new m_home();
        $film=$m_home->get_film();
        include_once 'view/home.php';
    }
}