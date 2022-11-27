<?php
require_once("database.php");
class m_admin_member extends database
{
    public function insert_admin_member($id, $user_name, $pass_word, $full_name, $email, $vai_tro)
    {
        $sql = "INSERT INTO user  VALUES (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $user_name, $pass_word, $full_name, $email, $vai_tro));
    }
    public function read_admin_member()
    {
        $sql = "SELECT * FROM user";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_admin_member_by_id($id)
    {
        $sql = "SELECT * FROM user where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_admin_member($full_name, $email, $vai_tro, $id)
    {
        $sql = "UPDATE user set full_name = ?,email = ?,vai_tro = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($full_name, $email, $vai_tro, $id));
    }
    public  function delete_admin_member($id)
    {
        $sql = "DELETE from user where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    //login

    //check username and pass
    function read_admin_member_by_id_pass($user_name, $pass_word)
    {
        $sql = "SELECT * from user where user_name=? and pass_word=?";
        $this->setQuery($sql);
        return $this->loadRow(array($user_name, md5($pass_word)));
    }
    function read_admin_member_by_username($user_name)
    {
        $sql = "SELECT * from user where user_name=?";
        $this->setQuery($sql);
        return $this->loadRow(array($user_name));
    }
}
