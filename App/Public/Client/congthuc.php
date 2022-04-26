<?php 
    include './partition/header.php';
   
?>
    <div class="container mt-5 mb-5">
        <div class="row">
            <?php 
                $allbv = "SELECT * FROM baiviet ${where}";
                $queryallbv = mysqli_query($conn,$allbv);
                if(mysqli_num_rows($queryallbv) > 0){                
                    while($row = mysqli_fetch_assoc($queryallbv)){
                        $idbv = $row['id_baiviet'];
                        $img = "SELECT tenanh FROM anh WHERE id_baiviet = '$idbv' AND trangthai = '0'";
                        $queryimg = mysqli_query($conn,$img);
                        $rowimg = mysqli_fetch_assoc($queryimg);
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                                <div class="card h-100">
                                    <img src="../../uploads/<?php echo $rowimg['tenanh'];?>" class="card-img-top" alt="..." style="height: 500px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="chitietcongthuc.php?id=<?php echo $row['id_baiviet']; ?>"><?php echo $row['tieude'];?></a></h5>
                                        <p class="card-text"><?php echo $row['mota'];?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                }else{
                    ?>
                        <h3 class = "text-center">Chưa có bài viết nào vui lòng quay lại sau</h3>
                    <?php
                }
            ?>
           
        </div>
    </div>
<?php 
    include './partition/footer.php';
?>