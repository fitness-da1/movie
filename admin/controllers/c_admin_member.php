<?php
//include_once("models/m_admin_member.php");

class c_admin_member
{
    public function admin_member_add()
    {
        $m_admin_member = new m_admin_member();
        if (isset($_POST['btn_add_member'])) {
            $id = NULL;
            $password = $_POST['password'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $vai_tro = 0;
            $check_email = $this->validate_email($email);//check định dạng email
            $admin = $m_admin_member->read_admin_member_by_email($email);//check email đã tồn tại chưa
            if (!$admin && trim($password) != '' && trim($fullname) != '' && trim($email) != '' && $check_email == true) {
                $m_admin_member->insert_admin_member($id, $email, md5($password), $fullname, $vai_tro);
                echo "<script>alert('Thêm thành công!');</script>";
            } elseif (trim($password) == '' || trim($fullname) == '' || trim($email) == '') {
                $error = 'Vui lòng điền đầy đủ thông tin và đúng định dạng!';
            } elseif ($check_email == false) {
                $error = 'Email không hợp lệ!';
            } else {
                    $error = "Email đã tồn tại";
                }
//            header('location:admin_member_add.php?result=' . $username);
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
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $m_admin_member->edit_admin_member($email, $fullname, md5($password), $id);
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


    public function v_login()
    {
        include_once 'view/v_login.php';
    }

    public function login()
    {
        if (isset($_POST["btn_login"])) {
            $user_name = $_POST["user_name"];
            $password = $_POST["password"];
            $m_admin_member = new m_admin_member();
            $this->luu_dang_nhap($user_name, $password);
            $admin = $m_admin_member->read_admin_member_by_email($user_name);
            if (isset($_SESSION['user_admin'])) {
                header('location:?ctr=home');
            } else {
                header('location:?ctr=v_login&login_fail&u=' . $user_name);
                echo $admin;
            }
        }
    }

    public function luu_dang_nhap($user_name, $password)
    {
        session_start();
        $m_admin_member = new m_admin_member();
        $admin = $m_admin_member->read_admin_member_by_id_pass($user_name, $password);
        if (!empty($admin) && $admin->vai_tro == 0) {
            $_SESSION['user_admin'] = $admin;
        }
    }

    public function logout()
    {
        //  session_destroy();
        unset($_SESSION['user_admin']);
        header("location:?ctr=v_login");
    }

    public function validate_email($email)
    {
        $isValid = true;
        $atIndex = strrpos($email, "@");

        if (is_bool($atIndex) && !$atIndex) {
            $isValid = false;
        } else {
            $domain = substr($email, $atIndex + 1);
            $local = substr($email, 0, $atIndex);
            $localLen = strlen($local);
            $domainLen = strlen($domain);

            if ($localLen < 1 || $localLen > 64) {
                $isValid = false;
            } else if ($domainLen < 1 || $domainLen > 255) {
                $isValid = false;
            } else if ($local[0] == '.' || $local[$localLen - 1] == '.') {
                $isValid = false;
            } else if (preg_match('/\\.\\./', $local)) {
                $isValid = false;
            } else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
                $isValid = false;
            } else if (preg_match('/\\.\\./', $domain)) {
                $isValid = false;
            } else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))) {
                if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local))) {
                    $isValid = false;
                }
            }

            if ($isValid && !(checkdnsrr($domain, "MX") || checkdnsrr($domain, "A"))) {
                $isValid = false;
            }
        }

        return $isValid;
    }
}