<?php
//include_once("models/m_admin_member.php");

class c_admin_member
{
    public function admin_member_add()
    {
        if (isset($_POST['btn_add_member'])) {
            $id = NULL;
            $user_name = $_POST['username'];
            $pass_word = $_POST['password'];
            $full_name = $_POST['fullname'];
            $email = $_POST['email'];
            $vai_tro = $_POST['vai_tro'];

            $m_admin_member = new m_admin_member();
            $result = $m_admin_member->insert_admin_member($id, $user_name, md5($pass_word), $full_name, $email, $vai_tro);
        }
        include_once("view/admin_member/v_admin_member_add.php");
    }

    public function admin_member_list()
    {
        $m_admin_member = new m_admin_member();
        $admin_member = $m_admin_member->read_admin_member();
        include_once("view/admin_member/v_admin_member_list.php");
    }

    public function show_admin_member_edit()
    {
        $m_admin_member = new m_admin_member();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $admin_member = $m_admin_member->read_admin_member_by_id($id);
            include_once("view/admin_member/v_admin_member_edit.php");
        }
    }

    public function admin_member_update()
    {
        $m_admin_member = new m_admin_member();
        if (isset($_POST['btn_update_member'])) {
            $id = $_POST['id'];
            $full_name = $_POST['full_name'];
            $email = $_POST['email'];
            $vai_tro = $_POST['vai_tro'];
            $m_admin_member->edit_admin_member($full_name, $email, $vai_tro, $id);
            header('location:?ctr=admin_member_list');
        }

    }

    public function admin_member_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_admin_member = new m_admin_member();
            $m_admin_member->delete_admin_member($id);
            header('location:?ctr=admin_member_list&dl=success');
        }
    }


    public function v_login(){
        include_once 'view/v_login.php';
    }

    public function login()
    {
        if(isset($_POST["btn_login"]))
        {
            $user_name=$_POST["user_name"];
            $pass_word=$_POST["pass_word"];
            $m_admin_member=new m_admin_member();
            $this->luu_dang_nhap($user_name,$pass_word);
            $admin=$m_admin_member->read_admin_member_by_username($user_name);
            if(isset($_SESSION['user_admin'])) {
                header('location:?ctr=home');
            }
            else{
                header('location:?ctr=v_login&login_fail&u='.$user_name);
                echo $admin;
            }
        }
    }

    public function luu_dang_nhap($user_name,$pass_word)
    {
        session_start();
        $m_admin_member=new m_admin_member();
        $admin = $m_admin_member->read_admin_member_by_id_pass($user_name,$pass_word);
        if(!empty($admin)) {
            $_SESSION['user_admin'] = $admin;
        }
    }
    public function logout()
    {
        //  session_destroy();
        unset($_SESSION['user_admin']);
        header("location:?ctr=v_login");
    }

}