<?php
   include './CheckAdmin.php';
   include '../../../Config/database.php';
   include '../../../Connection/connection.php';
   
    $idbv = $_POST['idbv'];
    $deleteimg = "DELETE FROM anh WHERE id_baiviet = '$idbv'";
    $querydeleteimg = mysqli_query($conn,$deleteimg);

    $deletebv = "DELETE FROM baiviet WHERE id_baiviet = '$idbv'";
    $querydeletebv = mysqli_query($conn,$deletebv);
    
  

?>