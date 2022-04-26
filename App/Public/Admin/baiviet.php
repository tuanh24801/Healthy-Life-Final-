<?php 
    include './partition/header.php';
    if(isset($_POST['textsearch'])){
        $_SESSION['textsearch'] = $_POST['textsearch'];
    }
?>
    <div class="container p-2">
        <!-- <h4>Đây là trang quản lí bài viết</h4> -->
        <div class="row mt-3">
            <div class="col-2"></div>
            <div class="col-8">
                <form class="d-flex" action = "" method = "post">
                    <input class="form-control me-2" type="search" placeholder="Bạn muốn tìm kiếm ..." aria-label="Search" name = "textsearch"
                        value = "<?php 
                            if(isset($_SESSION['textsearch'])){
                                echo $_SESSION['textsearch'];
                            }
                        ?>"
                    >
                    <button class="btn btn-outline-success " type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-1"><a href="../../Process/Admin/showAllbaiviet.php" class = "btn btn-outline-success">Tất cả</a>  </div>
            <?php 
                if(isset($_GET['orderby'])){
                    if(($_GET['orderby']) == "ASC"){
                        ?>
                            <div class="col-2"><a href="?orderby=DESC" class = "btn btn-outline-danger">Sắp xếp v/^</a>  </div>
                        <?php
                    }else{
                        ?>
                            <div class="col-2"><a href="?orderby=ASC" class = "btn btn-outline-primary">Sắp xếp v/^</a>  </div>
                        <?php
                    }
                }else{
                    ?>
                        <div class="col-2"><a href="?orderby=DESC" class = "btn btn-outline-danger">Sắp xếp v/^</a>  </div>
                    <?php
                }
            ?>
            
        </div>
        
        <table class="table table-striped mt-2">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Nguyên Liệu</th>
            <th scope="col">Cách làm</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_SESSION['textsearch'])){
                    $post = $_SESSION['textsearch'];
                    $where = "WHERE tieude LIKE '%$post%'";
                    // echo $where;
                }else{
                    $where = " ";
                }
                $order = "ASC";
                if(isset($_GET['orderby'])){
                    $order = $_GET['orderby'];
                }
                $All = "SELECT * FROM baiviet ${where} ORDER BY id_baiviet ${order}";
                $query = mysqli_query($conn,$All);
                while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['id_baiviet']?></th>
                        <td><?php echo $row['tieude']?></td>
                        <td><?php echo $row['nguyenlieu']?></td>
                        <td><?php echo $row['cachlam']?></td>
                        <td><?php echo $row['mota']?></td>
                        <td><a href="suabaiviet.php?id=<?php echo $row['id_baiviet']?>"><i class="fal fa-user-edit btn btn-outline-primary"></i></a></td>
                        <input type="hidden" value="<?php echo $row['id_baiviet'] ?>" id="idbv">
                        <td><a href="#" class="btnxoabaiviet"><i class="fal fa-trash-alt btn btn-outline-danger"></a></td>
                    </tr>
                    <?php
                }
            ?>
           
        </tbody>
        </table>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
    </div>

<?php 
    include './partition/footer.php';
?>