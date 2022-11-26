<?php
require_once ("database.php");
class m_contact extends database {
    public function insert_contact($id, $full_name, $email, $message, $status) {
        $sql = "INSERT INTO contact  VALUES (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $full_name, $email, $message, $status));
    }
    public function read_contact() {
        $sql = "SELECT * from contact";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_contact_by_id($id) {
        $sql = "SELECT * from contact where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_contact($status, $id) {
        $sql = "UPDATE contact set status=? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($status, $id));
    }
    public  function delete_contact($id){
        $sql="DELETE from contact where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}
