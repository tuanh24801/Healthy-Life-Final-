<?php 
    include './partition/header.php';
    if(isset($_GET['id'])){
        $id_baiviet = $_GET['id'];
    }
?>
    <div class="container p-2">
        <h4 class="mt-3 text-center">Sửa bài viết</h4>
        <a href="baiviet.php" class = "mt-3 btn btn-outline-warning text-black">quay lại</a>
        <p class="mt-3 text-center">
            <?php 
                if(isset($_GET['inf'])){
                    echo $_GET['inf'];
                }

                $baiviet = "SELECT * FROM baiviet WHERE id_baiviet = '$id_baiviet'";
                $querybv = mysqli_query($conn,$baiviet);
                $row = mysqli_fetch_assoc($querybv);
            ?>
        </p>
        <form action="../../Process/Admin/suabaiviet.php" class="mt-5" method = "post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Tiêu đề</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name = "tieude" value = "<?php echo $row['tieude'];?>">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Nguyên liệu</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="exampleFormControlTextarea1"  rows="3" name = "nguyenlieu"><?php echo $row['nguyenlieu'];?></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Cách làm</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="exampleFormControlTextarea1"  rows="3" name = "cachlam"><?php echo $row['cachlam'];?></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Mô tả bài viết</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="exampleFormControlTextarea1"  rows="3" name = "mota"><?php echo $row['mota'];?></textarea>
                </div>
            </div>
            <?php 
                $anh1 = "SELECT * FROM anh WHERE id_baiviet = '$id_baiviet' AND trangthai = '0'";
                $queryanh1= mysqli_query($conn,$anh1);
                while($rowanh1 = mysqli_fetch_assoc($queryanh1)){
                    ?>
                    <div class="mb-3 row">
                        <div class="col-sm-1"></div>
                        <label for="inputPassword" class="col-sm-1 col-form-label">Ảnh mô tả</label>
                        <div class="col-sm-9">
                            <img src="../../uploads/<?php echo $rowanh1['tenanh']?>" alt="" style="width: 200px;">
                            <input type="file" class="form-control mt-2" name = "anhmota" id="image" placeholder = "Chọn file" >
                        </div>
                    </div>
                    <?php
                }
            ?>
            <?php 
                $anh2 = "SELECT * FROM anh WHERE id_baiviet = '$id_baiviet' AND trangthai = '1'";
                $queryanh2= mysqli_query($conn,$anh2);
                while($rowanh2 = mysqli_fetch_assoc($queryanh2)){
                    ?>
                    <div class="mb-3 row">
                        <div class="col-sm-1"></div>
                        <label for="inputPassword" class="col-sm-1 col-form-label">Ảnh chi tiết</label>
                        <div class="col-sm-9">
                            <img src="../../uploads/<?php echo $rowanh2['tenanh'];?>" alt="" style="width: 200px;">
                            <input type="file" class="form-control mt-2" name = "anhchitiet" id="image" placeholder = "Chọn file" >
                        </div>
                    </div>
                    <?php
                }
            ?>
           
            <input type="hidden" value="<?php echo $id_baiviet; ?>" name="id_baiviet">
            <div class="mb-3 row ">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <input type="submit" class="form-control btn btn-outline-primary mt-3" value = "Thêm bài viết">
                </div>
            </div>
        </form>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
    </div>

<?php 
    include './partition/footer.php';
?>