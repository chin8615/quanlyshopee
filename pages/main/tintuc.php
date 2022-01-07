<?php
    $sql_baiviet = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id DESC";
    $query_baiviet = mysqli_query($mysqli, $sql_baiviet);
?>
<h3>BÀI VIẾT MỚI NHẤT</h3>
    <ul class="baiviet_list">
        <?php
            while($row_baiviet = mysqli_fetch_array($query_baiviet)){
        ?>
        <li>
            <a href="index.php?quanly=baiviet&id=<?=$row_baiviet['id']?>">
                <img src="admincp/modules/quanlybaiviet/uploads/<?=$row_baiviet['hinhanh']?>" alt="" style="width:100px;">
                <p><?=$row_baiviet['tenbaiviet']?></p>
            </a>
        </li>
        <?php
            }
        ?>
    </ul>
    