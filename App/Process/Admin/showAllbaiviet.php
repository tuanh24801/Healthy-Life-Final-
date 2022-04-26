<?php 
    include './CheckAdmin.php';
    if(isset($_SESSION['textsearch'])){
        unset($_SESSION['textsearch']);
    }
    header('Location: ../../Public/Admin/baiviet.php');
?>