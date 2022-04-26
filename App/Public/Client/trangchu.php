<?php 
    include './partition/header.php';
    if(isset($_SESSION['textsearch'])){
        unset($_SESSION['textsearch']);
    }
?>

    <!-- content -->
    <div class="container mt-4">
        <div class="content-header">
            <p><b>
                "HealthyLife là nơi chúng mình chia sẻ những thực đơn eat clean, những công thức món ăn, nước uống thú vị, 
                những kiến thức về eat clean mà mình đã tìm tòi học hỏi và sưu tầm từ các nguồn tin cậy trong nhiều năm qua.<br>
                Chúng ta hãy cùng nhau vui vẻ, tận hưởng những món ăn thức uống lành mạnh mà vẫn ngon miệng nhé."
            </br></p>
        </div>
        <div class="content-container-img">
            <div class="content-box-img" style = "background-image:linear-gradient(0,rgba(93, 93, 100, 0.7),rgba(93, 93, 100, 0.3)), url(../../../Image/88d4b62ebe43701d2952.jpg);">
                <p><b>"HealthyLife là nơi chúng mình chia sẻ những thực đơn eat clean, những công thức món ăn, nước uống thú vị, 
                những kiến thức về eat clean mà mình đã tìm tòi học hỏi và sưu tầm từ các nguồn tin cậy trong nhiều năm qua."</b></p>
                <a href="./gioithieu.php" class = "btn btn-primary">Xem thêm</a>
            </div>
        </div>
        <div class="content-container-img mt-3">
            <div class="content-box-img" style = "background-image:linear-gradient(0,rgba(93, 93, 100, 0.7),rgba(93, 93, 100, 0.3)), url(../../../Image/0c3353cd5ba095feccb1.jpg);">
                <p><b>"HealthyLife được tạo nên với mong muốn có thể giúp cho người nội trợ sẽ dễ dàng hơn trong việc nấu ăn hàng ngày của mình. Từ công việc chuẩn bị các nguyên liệu, 
                    phải chọn món ăn hàng ngày hoặc lựa chọn những thiết bị dùng bếp sẽ trở nên dễ dàng hơn.."</b></p>
                <a href="./congthuc.php" class = "btn btn-primary">Xem thêm</a>
            </div>
        </div>
        <div class="content-container-img mt-3">
            <div class="content-box-img" style = "background-image:linear-gradient(0,rgba(93, 93, 100, 0.7),rgba(93, 93, 100, 0.3)), url(../../../Image/3.jpg);">
                <p><b>"HealthyLife là ngôi nhà của những thành viên yêu Eat Clean chúng ta. Cùng nhau tìm hiểu, học hỏi 
                    và thực hành những món ăn mới lạ, ngon miệng và tốt cho sức khoẻ nhé."</b></p>
                <a href="./thongtinhuuich.php" class = "btn btn-primary">Xem thêm</a>
            </div>
        </div>
        <div class="content-sub mt-5">
            <p><b>“Hãy cùng kết nối với cộng đồng những người yêu Eat Clean.” <a href="#" class = "sub-undercontent">Đăng ký ngay tại đây…</a> </b></p>   
        </div>
    </div>
    <!-- content -->
<?php 
    include './partition/footer.php';
?>

   