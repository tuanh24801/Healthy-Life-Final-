<?php
 include '../../../Config/database.php';
   include '../../../Connection/connection.php';
   
    // $idbv = $_POST['idbv'];
    $deletebv = "DELETE FROM baiviet WHERE id_baiviet = 3";
    $result = mysqli_query($conn,$deletebv);
    echo $deletebv;