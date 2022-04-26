<?php 
    include '../../../Config/database.php';
    include '../../../Connection/connection.php';
    session_start();
    if(isset($_POST['textsearch'])){
        $_SESSION['textsearch'] = $_POST['textsearch']; 
    }

    $where = " ";
    if(isset($_SESSION['textsearch'])){
        $textsearch = $_SESSION['textsearch'];
        $where = "WHERE tieude LIKE '%$textsearch%'";
        // $where = $_SESSION['textsearch'];
    }
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
    <title>HealthyLife</title>
</head>
<body>
    <!-- header -->
    <div class="container-fluid header">
        <div class="menu-logo-top">
            <div class="row">
                <div class="col-lg-3 col-md-4 text-center"><a  href="trangchu.php"><img src="../../../Image/logo.png" alt="" class = "img_logo_header"></a></div>
                <div class="col-lg-5 col-md-8 mt-3"><p class = "text_name_logo_header text-center">Healthylife</p></div>
                <div class="col-lg-3 mt-5 mb-5">
                    <form class="d-flex " action="congthuc.php" method="post">
                        <input class="form-control me-2" type="search" placeholder="Bạn muốn tìm kiếm ..." aria-label="Search" name="textsearch" value="<?php 
                                if(isset($_SESSION['textsearch'])){
                                 echo $_SESSION['textsearch'];
                                }
                            ?>">
                        <button class="btn btn-outline-success " type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
       </div>
       <div class="menu-list">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="trangchu.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gioithieu.php">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="congthuc.php">Công thức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="thongtinhuuich.php">Thông tin hữu ích</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lienhe.php">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dangki.php">Đăng kí</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- header -->