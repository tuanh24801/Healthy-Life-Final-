<?php 
    include '../../../Config/database.php';
    include '../../../Connection/connection.php';
    $email = $_POST['email'];
    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];

    $addcmt = "INSERT INTO dangky(sodienthoai, email, hoten) VALUES ('$sdt','$email','$hoten')";
    // echo $addcmt;
    // die();
    $query = mysqli_query($conn,$addcmt);
    if(!$query){
        echo 'lỗi thêm cmt';
    }
    header("Location: ../../Public/Client/dangki.php?inf=Bạn đã đăng ký nhận thông báo của Admin")



?>