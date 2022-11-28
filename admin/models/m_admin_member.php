<?php
require_once("database.php");
class m_admin_member extends database
{
    public function insert_admin_member($id, $email, $password, $fullname,  $role_)
    {
        $sql = "INSERT INTO user  VALUES (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $email, $password, $fullname,  $role_));
    }
    public function read_admin_member()
    {
        $sql = "SELECT * FROM user where vai_tro=0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_admin_member_by_id($id)
    {
        $sql = "SELECT * FROM user where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_admin_member($fullname, $email, $password, $id)
    {
        $sql = "UPDATE user set full_name = ?,email = ?,password = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($fullname, $email, $password, $id));
    }
    public  function delete_admin_member($id)
    {
        $sql = "DELETE from user where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    //login

    //check username and pass
    function read_admin_member_by_id_pass($email, $password)
    {
        $sql = "SELECT * from user where email=? and password=?";
        $this->setQuery($sql);
        return $this->loadRow(array($email, md5($password)));
    }
    function read_admin_member_by_username($email)
    {
        $sql = "SELECT * from user where email=?";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }
}
