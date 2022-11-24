<?php
require_once 'database.php';
class m_home extends database {
    public function get_film()
    {
        $sql="select *from phim";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function get_the_loai_phim($id_phim){
        $sql="select tl.name as the_loai from phim as ph
            inner join the_loai_of_phim as tlp on ph.id=tlp.id_phim
            inner join the_loai as tl on tlp.id_the_loai=tl.id
            where ph.id=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_phim));
    }
}