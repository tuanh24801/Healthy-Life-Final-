<?php
   include './CheckAdmin.php';
   include '../../../Config/database.php';
   include '../../../Connection/connection.php';
   $tieude = $_POST['tieude'];
   $nguyenlieu = $_POST['nguyenlieu'];
   $cachlam = $_POST['cachlam'];
   $mota = $_POST['mota'];
    $id_baiviet = $_POST['id_baiviet'];
   $anhmota = basename($_FILES["anhmota"]["name"]);
   $anhchitiet = basename($_FILES["anhchitiet"]["name"]);
    
//    die();
   $target_dir = "../../uploads/";
   if($anhmota != ""){
        $target_file = $target_dir.$anhmota;
        move_uploaded_file($_FILES["anhmota"]["tmp_name"], $target_file);
        $suaanh = " UPDATE anh SET tenanh =  '$anhmota' WHERE id_baiviet = '$id_baiviet' AND trangthai = '0'";
         $result_suaanh = mysqli_query($conn,$suaanh);
         if(!$result_suaanh > 0){
            echo 'Lỗi ở sửa ảnh mô tả';
            die();
        }
   }
   if($anhchitiet != ""){
        $target_file = $target_dir.$anhchitiet;
        move_uploaded_file($_FILES["anhchitiet"]["tmp_name"], $target_file);
        $suaanh2 = " UPDATE anh SET tenanh = '$anhchitiet' WHERE id_baiviet = '$id_baiviet' AND trangthai = '1'";
        $result_suaanh2 = mysqli_query($conn,$suaanh2);
        if(!$result_suaanh2 > 0){
            echo 'Lỗi ở sửa ảnh chi tiết';
            die();
        }
   }
  
  
    //inset baiviet    
    $suabaiviet= "UPDATE baiviet SET tieude = '$tieude',
                                    nguyenlieu = '$nguyenlieu',
                                    mota = '$mota',
                                    cachlam  = '$cachlam'  WHERE id_baiviet = '$id_baiviet'";
    $result_suabaiviet = mysqli_query($conn,$suabaiviet);
    //inset baiviet
    if(!$result_suabaiviet > 0){
        echo 'Lỗi ở sửa bài viết';
        die();

    }
    // update anh

    

    header("location: ../../Public/Admin/suabaiviet.php?inf=sửa bài viết thành công&id=$id_baiviet");
 
?>