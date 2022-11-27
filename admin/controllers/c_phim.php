<?php


class c_phim
{
    public function phim_add()
    {
        if (isset($_POST['btn_add_phim'])) {
            $id = NULL;
            $name = $_POST['name'];
            $description = $_POST['description'];
            $thoi_luong = $_POST['thoi_luong'];
            $rate = $_POST['rate'];
            $avatar = $_FILES['avatar']['name'];
            $ngay_khoi_chieu = date('Y-m-d');
            $m_phim = new m_phim();
            $kq = $m_phim->insert_phim($id,$name, $description, $thoi_luong,$rate,$avatar,$ngay_khoi_chieu);
            if ($kq) {
                if ($_FILES["image"]["error"] == 0) {
                    move_uploaded_file($_FILES["avatar"]["tmp_name"], "../public/image/$avatar");
                }
                header('location:?ctr=phim_list&add=success');
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
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
            $avatar = $_FILES['avatar']['name'];
            $ngay_khoi_chieu = date('Y-m-d');
            
            $avatar = !empty($_FILES['avatar']['name']) ? $_FILES['avatar']['name'] : $image->avata;
            $kq = $m_phim->edit_phim($name, $description, $thoi_luong, $rate, $avatar,$ngay_khoi_chieu, $id);
            if ($kq) {
                if ($_FILES["image"]["error"] == 0) {
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
            $m_class = new m_phim();
            $m_class->phim_delete($id);
            header('location:?ctr=phim_list&dl=success');
        }
    }
}