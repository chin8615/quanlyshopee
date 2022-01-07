<nav class="category">
        <h3 class="category__heading">
            <i class="category__heading-icon fas fa-list"></i> Danh mục sản phẩm
        </h3>
        <ul class="category-list">
            <?php
                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                while($row = mysqli_fetch_array($query_danhmuc)){
            ?>
            <li class="category-item category-item--active">
                <a href="index.php?quanly=danhmucsanpham&id=<?=$row['id_danhmuc']?>" class="category-item__link"><?=$row['tendanhmuc']?></a>
            </li>
            <?php
                }
            ?>
        </ul>
        <h3 class="category__heading">
            <i class="category__heading-icon fas fa-list"></i> Danh mục bài viết
        </h3>
        <ul class="category-list">
            <?php
                $sql_danhmucbaiviet = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_danhmucbaiviet DESC";
                $query_danhmuc = mysqli_query($mysqli, $sql_danhmucbaiviet);
                while($row = mysqli_fetch_array($query_danhmuc)){
            ?>
            <li class="category-item category-item--active"><a href="index.php?quanly=danhmucbaiviet&id=<?=$row['id_danhmucbaiviet']?>" class="category-item__link"><?=$row['tendanhmuc_baiviet']?></a></li>
            <?php
                }
            ?>
        </ul>
</nav>