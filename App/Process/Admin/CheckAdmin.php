<?php 
    session_start();
    if(!isset($_SESSION['adminlogin'])){
        header('Location: ../../public/Admin/dangnhap.php?inf=Bạn phải đăng nhập để thực hiện chức năng này');
    }

?>