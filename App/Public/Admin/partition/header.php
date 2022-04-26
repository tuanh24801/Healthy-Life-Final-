<?php 
    session_start();
    if(!isset($_SESSION['adminlogin'])){
        header('Location: index.php');
        die();
    }
    include '../../../Config/database.php';
    include '../../../Connection/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Hi+Melody&family=Roboto+Slab:wght@300&family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
        crossorigin="anonymous"/>
    <link rel="stylesheet" href="../Style/style.css">
    <title>Admin Healthylife</title>
</head>
<body>
    <!-- header -->
    <div class="container-fluid header">
        <div class="menu-logo-top">
            <div class="row">
                <div class="col-lg-5 col-md-4 text-center"><a  href="trangchu.php"><img src="../../../Image/logo.png" alt="" class = "img_logo_header"></a></div>
                <div class="col-lg-6 col-md-8 mt-4"><p class = "text_name_logo_header text-center">Admin Healthylife</p></div>
            </div>
       </div>
       <div class="menu-list">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="danhsachdangky.php">Danh sách đăng ký</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="thembaiviet.php">Thêm bài viết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="baiviet.php">Danh sách bài viết Bài Viết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dangxuat.php">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- header -->