<?php
    $sql_baiviet = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' ORDER BY id DESC";
    $query_baiviet = mysqli_query($mysqli, $sql_baiviet);
    $sql_danhmucbaiviet = "SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_danhmucbaiviet='$_GET[id]' LIMIT 1";
    $query_danhmucbaiviet = mysqli_query($mysqli, $sql_danhmucbaiviet);
    $row_title = mysqli_fetch_array($query_danhmucbaiviet);
?>
<h3>DANH MUC BÀI VIẾT:<?=$row_title['tendanhmuc_baiviet']?></h3>
    <ul class="baiviet_list">
        <?php
            while($row_baiviet = mysqli_fetch_array($query_baiviet)){
        ?>
        <li>
            <a href="index.php?quanly=baiviet&id=<?=$row_baiviet['id']?>">
                <img src="admincp/modules/quanlybaiviet/uploads/<?=$row_baiviet['hinhanh']?>" alt="">
                <p><?=$row_baiviet['tenbaiviet']?></p>
            </a>
        </li>
        <?php
            }
        ?>
    </ul>
    