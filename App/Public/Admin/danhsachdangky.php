<?php 
    include './partition/header.php';
?>
  <div class="container p-2">

        <h4 class="text-center mt-4 mb-3">Danh sách người đăng ký nhận thông báo Admin</h4>
        <div class="row">
                <table class="table table-striped mt-2">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $All = "SELECT * FROM dangky";
                            $query = mysqli_query($conn,$All);
                            while($row = mysqli_fetch_assoc($query)){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id_dangky']?></th>
                                    <td><?php echo $row['hoten']?></td>
                                    <td><?php echo $row['sodienthoai']?></td>
                                    <td><?php echo $row['email']?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
        </div>
  </div>
<?php 
    include './partition/footer.php';
?>