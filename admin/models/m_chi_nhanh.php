<?php
require_once("database.php");

class m_chi_nhanh extends database
{
    public function insert_chi_nhanh($id, $name)
    {
        $sql = "INSERT INTO chi_nhanh  VALUES (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name));
    }

    public function read_chi_nhanh()
    {
        $sql = "SELECT * from chi_nhanh";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_chi_nhanh_by_id($id)
    {
        $sql = "SELECT * from chi_nhanh where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_chi_nhanh($name, $id)
    {
        $sql = "UPDATE chi_nhanh set name = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($name, $id));
    }

    public function chi_nhanh_delete($id)
    {
        $sql = "DELETE from chi_nhanh where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function add_film_of_chi_nhanh($id, $id_phim, $id_chi_nhanh)
    {
        $sql = "INSERT INTO phim_of_chi_nhanh values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $id_phim, $id_chi_nhanh));
    }

    public function list_film_of_chi_nhanh($id_chi_nhanh)
    {
        $sql = "SELECT pfcn.id as id_phim_of_cn,ph.* FROM phim_of_chi_nhanh as pfcn
               inner join phim as ph on pfcn.id_phim=ph.id
               where pfcn.id_chi_nhanh=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_chi_nhanh));
    }
    public function delete_phim_of_chi_nhanh($id){
        $sql="DELETE from phim_of_chi_nhanh where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
