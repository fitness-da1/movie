<?php
require_once ("database.php");
class m_chi_nhanh extends database {
    public function insert_chi_nhanh($id,$name) {
        $sql = "INSERT INTO chi_nhanh  VALUES (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$name));
    }
    public function read_chi_nhanh() {
        $sql = "SELECT * from chi_nhanh";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_chi_nhanh_by_id($id) {
        $sql = "SELECT * from chi_nhanh where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_chi_nhanh($name,$id) {
        $sql = "UPDATE chi_nhanh set name = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($name,$id));
    }
    public function chi_nhanh_delete($id){
        $sql="DELETE from chi_nhanh where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}
