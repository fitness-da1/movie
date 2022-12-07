<?php
class c_user{
    public function show_user(){
        $m_user=new m_user();
        $id=$_SESSION['user']->id;
        $user=$m_user->show_edit_user($id);
        include_once 'view/v_user_edit.php';
    }
    public function update_user(){
        $m_user=new m_user();
        if (isset($_POST['btn_update_user'])){
            $id=$_POST['id'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $full_name=$_POST['full_name'];
            $m_user->update_user($email,md5($password),$full_name,$id);
            header('location:?ctr=home');
        }
    }
    public function list_ve(){
        $m_user=new m_user();
        $id=$_SESSION['user']->id;
        $ve=$m_user->show_ve($id);
        include_once 'view/v_ve_list.php';
    }
    public function logout(){
        unset($_SESSION['user']);
        header('location: http://localhost/movie/client/');
    }
}