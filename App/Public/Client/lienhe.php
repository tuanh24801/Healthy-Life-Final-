<?php 
    include './partition/header.php';
?>
    <section class = "mt-4">
        <div class="container">
            <div class="containerinfo">
                <div>
                    <h2>Thông Tin Liên Hệ</h2>      
                    <ul class="info">
                        <li>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span>Đường Hồ Tùng Mậu<br />
                                Quận Cầu Giấy,<br />
                                Hà Nội
                            </span>
                        </li>
                        <li>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <span>healthylife@gmail.com</span>
                        <li>
                            <span><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                            <span>012-345-6789</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bắt đầu đoạn mã mới-->
            <div class="containerForm">
            <h2>Gửi Lời Nhắn</h2>
            <div class="formBox">
                <div class="inputBox w50">
                    <input type="text" name="" required>
                    <span>Họ</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" name="" required>
                    <span>Tên</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" name="" required>
                    <span>Email</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" name="" required>
                    <span>Số Điện Thoại</span>
                </div>
                <div class="inputBox w100">
                    <textarea name="" required></textarea>
                    <span>Lời Nhắn Của Bạn</span>
                </div>
                <div class="inputBox w100">
                    <input type="submit" value="Gửi">
                </div>
            </div>
        </div>
        <!-- Kết thúc đoạn mã mới-->
    </section>
