<?php
require_once ("database.php");
class m_ve extends database {
  
    public function read_ve() {
        $sql = "SELECT na.*,name as name from ve as na 
                inner join chi_nhanh as cn on na.name=cn.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function ve_delete($id){
        $sql="DELETE from ve where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}
