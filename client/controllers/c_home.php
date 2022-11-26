<?php

class c_home
{
    public function show_home()
    {
        $m_home = new m_home();
        if (isset($_GET['the_loai'])) {
            $id_the_loai = $_GET['the_loai'];
            $film = $m_home->get_phim_by_the_loai($id_the_loai);
        } else {
            $film = $m_home->get_film();
        }
        $the_loai = $m_home->get_the_loai();
        include_once 'view/home.php';
    }
}