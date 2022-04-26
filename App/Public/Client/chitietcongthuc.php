<?php 
    include './partition/header.php';
    $idbv = $_GET['id'];
?>
    <div class="container mt-5 mb-5">
        <div class="row">
            <?php
                $img1 = "SELECT tenanh FROM anh WHERE id_baiviet = '$idbv' AND trangthai = '0'";
                $queryimg1 = mysqli_query($conn,$img1); 
                $rowimg1 = mysqli_fetch_assoc($queryimg1);
                $img2 = "SELECT tenanh FROM anh WHERE id_baiviet = '$idbv' AND trangthai = '1'";
                $queryimg2 = mysqli_query($conn,$img2);
                $rowimg2 = mysqli_fetch_assoc($queryimg2); 

                $ctbv = "SELECT * FROM baiviet WHERE id_baiviet = '$idbv'";
                $queryctbv = mysqli_query($conn,$ctbv);
                $row = mysqli_fetch_assoc($queryctbv);
            ?>
            <div class="col-lg-8  col-sm-12 me-5">
                <h2 class="mb-4"><b><?php echo $row['tieude'];?></b> </h2>
                <div class="chitietcongthuc-content-congthuc" style="margin-left: 30px;">
                    <img src="../../uploads/<?php echo $rowimg1['tenanh'];?>" alt="..." style="width: 300px;">
                    <!-- nguyen lieu -->
                    <h4 class="mt-4"><b>Nguyên liệu</b> </h4>
                    <ul>
                        <?php echo $row['nguyenlieu'];?>
                    </ul>
                    <!-- <ul>
                        <li>250gr yến mạch cán dẹt</li>
                        <li>50gr hạnh nhân</li>
                        <li>50gr hạt điều </li>
                        <li>150gr hạt bí</li>
                        <li>40ml mật ong</li> 
                        <li>20 dầu dừa</li>
                        <li>1 thìa cà phê bột trà xanh (hoặc quế, hoặc cacao)</li> 
                        <li>70gr quả khô (dùng bất kỳ loại gì bạn có ưu tiên các loại quả ít đường)</li>
                    </ul> -->
                    <img src="../../uploads/<?php echo $rowimg2['tenanh'];?>" alt="..." style="width: 300px;" >
                    <h4 class="mt-4"><b>Cách làm</b> </h4>
                    <ol>
                        <?php echo $row['cachlam'];?>
                    </ol>
                    <!-- <ol>
                        <li>Có thể dùng hạt chín hạt sống đều được. Nhưng nếu dùng hạt sống thì rang qua hoặc nướng sơ qua. Hạnh nhân cắt đôi (nếu sống nướng rồi mới cắt), hạt điều vỡ rửa sạch để ráo nước.</li>
                        <li>Trộn yến mạch đề với các loại hạt</li>
                        <li>Trộn sốt dầu dừa mật ong rồi cho vào hỗn hợp hạt đến khi đều</li>
                        <li>Cho bột vào và trộn đều 1 lần nữa (lần này mình dùng bột trà xanh)</li>
                        <li>Làm nóng lò 180 độ 10p. Sấy 120 độ trong 150p. Trong quá trình sấy 60p đầu tiên xong mang ra đảo qua rồi cho tiếp đến khi hết thời gian</li>
                        <li>Sấy xong đợi nguội rồi trộn hoa quả khô đã cắt nhỏ vào
                            Nếu muốn khô hơn sau khi trộn hoa quả sấy thêm 10p nữa.</li>
                    </ol> -->
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row mt-5">
                    <h4><b>Về chúng tôi</b></h4>
                    <p>HealthyLife là nơi chia sẻ những thực đơn eat clean, những công thức món ăn, 
                        nước uống thú vị, những kiến thức về eat clean mà mình đã tìm tòi học hỏi 
                        và sưu tầm từ các nguồn tin cậy trong nhiều năm qua</p>
                </div>
                <div class="row mt-5">
                    <h4><b>Các bài đăng</b></h4>
                    <p class = "chitietcongthuc-cacbaidang-right"><a href="#">Cách làm xúc xích ít kcal từ ức gà</a></p>
                    <p class = "chitietcongthuc-cacbaidang-right"><a href="#">Cách làm Chesse cake cam từ sữa chua (không cần lò nướng)</a></p>
                    <p class = "chitietcongthuc-cacbaidang-right"><a href="#">Bật mí công thức phở bò ít mỡ cho các bạn ăn kiêng</a></p>
                </div>
                <div class="row mt-5">
                    <h4><b>Tag</b></h4>
                        <div class="col-4 align-items-center text-center">
                            <p class = "gt-text-head p-2">Eat clean</p>
                        </div>
                        <div class="col-4 align-items-center text-center">
                            <p class = "gt-text-head p-2">Hạt chia</p>
                        </div>
                        <div class="col-6 align-items-center text-center">
                            <p class = "gt-text-head p-2">Dinh dưỡng</p>
                        </div>
                        <div class="col-6 align-items-center text-center">
                            <p class = "gt-text-head p-2">Tập luyện</p>
                        </div>
                        <div class="col-6 align-items-center text-center">
                            <p class = "gt-text-head p-2">Circadian</p>
                        </div>
                </div>
                <div class="row mt-5">
                    <h4><b>Đăng ký để nhận thông báo cho các bài viết mới</b></h4>
                    <div class="col-4 align-items-center text-center chitietcongthuc-dangki-buttondangki-right">
                        <p class = "gt-text-head p-2"><a href="">Đăng kí</a></p>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="row mt-5">
            <h2><b>Tag: </b></h2>
            <div class="col-10">
                <div class="row">
                    <div class="col-2 align-items-center text-center">
                        <p class = "gt-text-head p-2">Eat clean</p>
                    </div>
                    <div class="col-2 align-items-center text-center">
                        <p class = "gt-text-head p-2">Hạt chia</p>
                    </div>
                    <div class="col-3 align-items-center text-center">
                        <p class = "gt-text-head p-2">Dinh dưỡng</p>
                    </div>
                    <div class="col-3 align-items-center text-center">
                        <p class = "gt-text-head p-2">Tập luyện</p>
                    </div>
                    <div class="col-2 align-items-center text-center">
                        <p class = "gt-text-head p-2">Circadian</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <h2><b>Bình luận </b></h2>
            <hr>
            <?php 
                $Allcmt = "SELECT * FROM binhluan WHERE id_baiviet = '$idbv'";
                $queryAllcmt = mysqli_query($conn,$Allcmt);
                while($rowcmt = mysqli_fetch_assoc($queryAllcmt)){
                    ?>
                        <div class="chitietcongthuc-binhluan-pushed">
                            <p class = "chitietcongthuc-binhluan-tenguoi"><b><i class="fa fa-user"></i> <?php echo $rowcmt['hoten_nguoidang'];?> </b></p>
                            <p class = "chitietcongthuc-binhluan-noidung"><?php echo $rowcmt['noidung'];?></p>
                        </div>
                    <?php
                }
            ?>
<!--             
            <div class="chitietcongthuc-binhluan-pushed">
                <p class = "chitietcongthuc-binhluan-tenguoi"><b><i class="fa fa-user"></i> Tuấn Anh </b></p>
                <p class = "chitietcongthuc-binhluan-noidung">Hay quá</p>
            </div> -->
        </div>

        <div class="row mt-5">
            <h2><b>Viết bình luận </b></h2>
            <form action="../../Process/Client/binhluan.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Địa chỉ email:</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Địa chỉ email" name = "email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Họ tên:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nhập họ tên" name="hoten">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Bình luận của bạn:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "noidung"></textarea>
                </div>
                <input type="hidden" name = "idbv" value = "<?php echo $idbv; ?>">
                <input type="submit" class="btn btn-outline-primary" value = "Bình luận">
                <?php 
                    if(isset($_GET['inf'])){
                        echo '<br>'.$_GET['inf'];
                    }
                ?>
            </form>
        </div>
        
    </div>
<?php 
    include './partition/footer.php';
?>