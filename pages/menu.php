<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
?>
<?php
    if(isset($_GET['dangxuat'])&& $_GET['dangxuat']==1) {
        unset($_SESSION['dangky']);
    }
?>
<div class="menu">
            <ul class="list_menu">
                <li><a href="index.php">Trang chu</a></li>
                <?php
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                ?>
                <li><a href="index.php?quanly=danhmucsanpham&id=<?=$row_danhmuc['id_danhmuc']?>"><?=$row_danhmuc['tendanhmuc']?></a></li>
                <?php
                    }
                ?>
                <li><a href="index.php?quanly=giohang">Gio hang</a></li>
                <?php
                    if(isset($_SESSION['dangky'])) {
                ?>
                <li><a href="index.php?dangxuat=1">Dang xuat</a></li>
                <li><a href="index.php?quanly=thaydoimatkhau">Đổi</a></li>
                <?php
                    }else{
                ?>
                <li><a href="index.php?quanly=dangky">Dang ky</a></li>
                <?php   
                    }
                ?>
                <li><a href="index.php?quanly=tintuc">Tin tuc</a></li>
                <li><a href="index.php?quanly=lienhe">Lien he</a></li>
            </ul>
            <p>
                <form action="index.php?quanly=timkiem" method="POST">
                    <input style="width:50px;" type="text" name="tukhoa">
                    <input  type="submit" name="timkiem" value="Tim kiem">
                </form>
            </p>
        </div>