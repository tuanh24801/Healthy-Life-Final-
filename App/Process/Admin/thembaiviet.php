<?php
   include './CheckAdmin.php';
   $tieude = $_POST['tieude'];
   $nguyenlieu = $_POST['nguyenlieu'];
   $cachlam = $_POST['cachlam'];
   $mota = $_POST['mota'];
   $anhmota = basename($_FILES["anhmota"]["name"]);
   $anhchitiet = basename($_FILES["anhchitiet"]["name"]);
   $target_dir = "../../uploads/";
   $target_file = $target_dir.$anhmota;
   move_uploaded_file($_FILES["anhmota"]["tmp_name"], $target_file);
   $target_file = $target_dir.$anhchitiet;
   move_uploaded_file($_FILES["anhchitiet"]["tmp_name"], $target_file);

   include '../../../Config/database.php';
   include '../../../Connection/connection.php';
    //inset baiviet    
    $thembaiviet= "INSERT INTO baiviet(tieude,nguyenlieu,cachlam,mota) 
                                VALUES('$tieude', '$nguyenlieu', '$cachlam', '$mota')";
    $result_thembaiviet = mysqli_query($conn,$thembaiviet);
    //inset baiviet
    $result_thembaiviet = 1;
    if(!$result_thembaiviet > 0){
        // header('location: ../../Public/trangchu.php?inf=');
        echo 'Lỗi ở thêm bài viết';
        die();

    }

    // Check id baiviet
    $checkid = "SELECT * FROM baiviet ORDER BY id_baiviet DESC";
    $result_check = mysqli_query($conn,$checkid);
    if(!$result_check > 0){
        // header('location: ../../Public/trangchu.php?inf=');
        echo 'Lỗi ở check id bài viết';
        die();

    }
    $row = mysqli_fetch_assoc($result_check);
    $id_baiviet = $row['id_baiviet'];
    echo $id_baiviet;
    // END Check id baiviet

    $themanh = " INSERT INTO anh (tenanh,trangthai,id_baiviet) 
                    VALUES ('$anhmota','0', '$id_baiviet')";
    $themanh2 = " INSERT INTO anh (tenanh,trangthai,id_baiviet) 
                    VALUES ('$anhchitiet', '1', '$id_baiviet') ";
    $result_themanh = mysqli_query($conn,$themanh);
    $result_themanh2 = mysqli_query($conn,$themanh2);

    if(!$result_themanh > 0 || !$result_themanh2 > 0){
        echo 'Lỗi ở thêm ảnh';
        die();
    }

    header('location: ../../Public/Admin/thembaiviet.php?inf=Thêm bài viết thành công');
 
?>