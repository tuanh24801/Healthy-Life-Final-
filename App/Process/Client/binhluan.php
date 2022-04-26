<?php 
    include '../../../Config/database.php';
    include '../../../Connection/connection.php';
    $email = $_POST['email'];
    $hoten = $_POST['hoten'];
    $noidung = $_POST['noidung'];
    $idbv = $_POST['idbv'];

    $addcmt = "INSERT INTO binhluan(noidung, email_nguoidang, hoten_nguoidang, id_baiviet) VALUES ('$noidung','$email','$hoten', '$idbv')";
    // echo $addcmt;
    // die();
    $query = mysqli_query($conn,$addcmt);
    if(!$query){
        echo 'lỗi thêm cmt';
    }
    header("Location: ../../Public/Client/chitietcongthuc.php?inf=Cảm ơn bạn đã quan tâm&id=$idbv")



?>