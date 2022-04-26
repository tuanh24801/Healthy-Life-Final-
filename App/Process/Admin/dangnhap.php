<?php 
    session_start();
    $taikhoan = $_POST['taikhoan'];
    $matkhau = $_POST['matkhau'];
    if($taikhoan == "admin" && $matkhau == "admin"){
        $_SESSION['adminlogin'] = "admin";
        header("Location: ../../Public/Admin/index.php");
    }else{
        header("Location: ../../Public/Admin/dangnhap.php?inf=Đăng nhập thất bại");
    }

?>