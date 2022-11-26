<?php include_once 'view/layout/header.php';?>

<!--<div style="height: 500px;background-color: white;">-->
<form action="?ctr=reset_password" method="post">
    <div>
    <h3>Đặt lại mật khẩu mới</h3>
    <input type="password" name="password" placeholder="Mật khẩu mới">
    <button type="submit" name="btn_resetpass">Update</button>
    </div>
</form>
<!--</div>-->

<?php include_once 'view/layout/footer.php';?>
