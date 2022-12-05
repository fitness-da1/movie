<?php


class c_phim
{
    public function phim_add()
    {
        $m_phim = new m_phim();
        $m_the_loai = new m_the_loai();
        $the_loai=$m_the_loai->read_the_loai();
        if (isset($_POST['btn_add_phim'])) {
            $id = NULL;
            $name = $_POST['name'];
            $description = $_POST['description'];
            $thoi_luong = $_POST['thoi_luong'];
            $rate = $_POST['rate'];
            $avatar = $_FILES['avatar']['name'];
            $ngay_khoi_chieu = date_format(date_create($_POST['ngay_khoi_chieu']), "Y-m-d");
            $trailer = $_POST['trailer'];
            if (isset($_POST['the_loai'])){
            $the_loai=$_POST['the_loai'];}
            $status = 1;
            $check_name = $m_phim->read_phim_by_name($name);

            $last_id=$m_phim->getLastId();
            $id_phim=$last_id->lastID+1;

            if (!$check_name && trim($name) != '' && trim($description) != '' && trim($thoi_luong) != '' && trim($rate) != '' && trim($avatar) != '' && trim($ngay_khoi_chieu) != '' && trim($trailer) != '') {
                foreach ($the_loai as $value){
                    $m_phim->insert_the_loai_of_phim($id,$value,$id_phim);
                }
                $kq = $m_phim->insert_phim($id, $name, $description, $thoi_luong, $rate, $avatar, $ngay_khoi_chieu, $trailer,$status);
                if ($kq) {
                    if ($_FILES["avatar"]["error"] == 0) {
                        move_uploaded_file($_FILES["avatar"]["tmp_name"], "../public/image/$avatar");
                    }
                    echo "<script>alert('Thêm thành công')</script>";
                } else {
                    echo "<script>alert('Thêm không thành công')</script>";
                }
            } else {
                $error = 'Tên phim đã tồn tại hoặc bạn chưa nhập đủ thông tin';
            }
        }
        include_once("view/phim/v_phim_add.php");
    }

    public function phim_list()
    {
        $m_phim = new m_phim();
        $phim = $m_phim->read_phim();
        include_once("view/phim/v_phim_list.php");
    }

    public function show_phim_edit()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_phim = new m_phim();
            $phim = $m_phim->read_phim_by_id($id);
            include_once("view/phim/v_phim_edit.php");
        }
    }

    public function phim_update()
    {
        $m_phim = new m_phim();
        if (isset($_POST['btn_update_phim'])) {
            $id = $_POST['id'];
            $image = $m_phim->read_phim_by_id($id);
            $name = $_POST['name'];
            $description = $_POST['description'];
            $thoi_luong = $_POST['thoi_luong'];
            $rate = $_POST['rate'];
            $ngay_khoi_chieu = date_format(date_create($_POST['ngay_khoi_chieu']), "Y-m-d");
            $trailer = $_POST['trailer'];
            $avatar = !empty($_FILES['avatar']['name']) ? $_FILES['avatar']['name'] : $image->avatar;
            $kq = $m_phim->edit_phim($name, $description, $thoi_luong, $rate, $avatar, $ngay_khoi_chieu, $trailer, $id);
            if ($kq) {
                if ($_FILES["avatar"]["error"] == 0) {
                    move_uploaded_file($_FILES["avatar"]["tmp_name"], "../public/image/$avatar");
                }
                header('location:?ctr=phim_list&add=success');
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
//            header('location:?ctr=phim_list');
    }

    public function phim_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_phim = new m_phim();
            $m_phim->phim_delete($id);
            header('location:?ctr=phim_list&dl=success');
        }
    }
    public function active_phim()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_phim = new m_phim();
            $m_phim->active_phim($id);
            header('location:?ctr=phim_list&act=success');
        }
    }
}