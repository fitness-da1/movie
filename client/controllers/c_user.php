<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
class c_user{
    public function login()
    {
        if(isset($_POST["btn_login"]))
        {
            $email=$_POST["email"];
            $password=$_POST["password"];
            $m_user=new m_user();
            $this->luu_dang_nhap($email,$password);
            $user=$m_user->read_user_by_email($email);
            if(isset($_SESSION['user'])) {
                header('location:?ctr=home');
            }
            else{
                header('location:?ctr=home&loginfail&email='.$email);
//                echo $admin;
            }
        }
    }

    public function luu_dang_nhap($email,$password)
    {
        // session_start();
        $m_user=new m_user();
        $user = $m_user->read_user_by_email_pass($email,$password);
        if(!empty($user)) {
            $_SESSION['user'] = $user;
        }
    }
    public function logout()
    {
        //  session_destroy();
        unset($_SESSION['user']);
        header("location:?ctr=home&logout=success");
    }

    public function signup(){
        $m_user= new m_user();
            if(isset($_POST['btn_signup'])){
                $id=null;
                $email=$_POST['email'];
                $password=$_POST['password'];
                $full_name=$_POST['full_name'];
                $vai_tro=1;
                $m_user->insert_user($id,$email,md5($password),$full_name,$vai_tro);
                header('location:?ctr=home&signup=success');
            }
    }
    public function forgot_password(){
        $m_user= new m_user();
        if(isset($_POST['btn_forgot_password'])){
            $email=$_POST['email'];
            $check=$m_user->read_user_by_email($email);
            if (!empty($check)){
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'binhvt12003@gmail.com';
                $mail->Password = 'uoxleyozosvdbhvb';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
//setup form send
                $mail->setFrom('binhvt12003@gmail.com');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = "FORGOT PASSWORD";
                $mail->Body = "Mật khẩu của bạn là ".$check->password;
                $mail->send();
                echo "<script>
                            alert('Vui lòng kiểm tra email để lấy mật khẩu');
                      </script>";
                header('location:?ctr=home');
            }else {

                echo "<script>
                         alert('Không tồn tại email này. Vui lòng kiểm tra lại email');
                  </script>";
                header('location:?ctr=home');
            }
        }
    }

    public function reset_password(){
//        $m_user= new m_user();
//        if (isset($_GET['id'])){
//            $id=$_GET['id'];
//            $m_user->reset_pass($id);
            include_once 'view/reset_password.php';
//        }
    }

}