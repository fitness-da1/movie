<?php
require_once("database.php");

class m_phim extends database
{
    public function insert_phim($id, $name, $description, $thoi_luong, $rate, $avatar, $ngay_khoi_chieu, $trailer)
    {
        $sql = "INSERT INTO phim  VALUES (?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name, $description, $thoi_luong, $rate, $avatar, $ngay_khoi_chieu, $trailer));
    }

    public function read_phim()
    {
        $sql = "SELECT * from phim";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_phim_by_id($id)
    {
        $sql = "SELECT * from phim where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_phim($name, $description, $thoi_luong, $rate, $avatar, $ngay_khoi_chieu, $trailer, $id)
    {
        $sql = "UPDATE phim set name = ?,description=?, thoi_luong=?,rate=?,avatar=?,ngay_khoi_chieu=?,trailer=? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($name, $description, $thoi_luong, $rate, $avatar, $ngay_khoi_chieu, $trailer, $id));
    }

    public function phim_delete($id)
    {
        $sql = "DELETE from phim where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}
