<?php 
    include './partition/header.php';
?>
<div id="body" class="p-4 mt-4">
    <div id="wrapper">
        <form action="../../Process/Client/dangky.php" id="form-login" method="post">
            <h1 class="form-heading">Đăng ký thành viên</h1>
            <p class="form-heading-inf"> <?php 
                if(isset($_GET['inf'])){
                        echo $_GET['inf'];
                }
             ?></p>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="Họ và tên" name = "hoten">
            </div>
            <div class="form-group">
                <i class="fa fa-phone-square"></i>
                <input type="text" class="form-input" placeholder="Số điện thoại" name = "sdt">
            </div>
        
            <div class="form-group">
                <i class="fa fa-envelope"></i>
                <input type="email" class="form-input" placeholder="Email" name = "email">
            </div>
            <input type="submit" value="Đăng ký" class="form-submit">
        </form>
    </div>
</div>