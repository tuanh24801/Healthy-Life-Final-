<?php 
    include './partition/header.php';
?>
    <div class="container p-2">
        <h4 class="mt-3 text-center">Thêm bài viết mới</h4>
        <p class="mt-3 text-center">
            <?php 
                if(isset($_GET['inf'])){
                    echo $_GET['inf'];
                }
            ?>
        </p>
        <form action="../../Process/Admin/thembaiviet.php" class="mt-5" method = "post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Tiêu đề</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name = "tieude">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Nguyên liệu</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "nguyenlieu"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Cách làm</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "cachlam"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Mô tả bài viết</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "mota"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Ảnh mô tả</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name = "anhmota" id="image" placeholder = "Chọn file" required>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Ảnh chi tiết</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name = "anhchitiet" id="image" placeholder = "Chọn file" required>
                </div>
            </div>
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