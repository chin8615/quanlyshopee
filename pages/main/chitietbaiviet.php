<?php
    $sql_chitiet = "SELECT * FROM tbl_danhmucbaiviet,tbl_baiviet 
    WHERE tbl_baiviet.id=tbl_danhmucbaiviet.id_danhmucbaiviet AND tbl_baiviet.id='$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper">
    <!-- <div class="khunghinh">
        <img src="admincp/modules/quanlysanpham/uploads/<?=$row_chitiet['hinhanh']?>" alt="">
    </div> -->
        <div class="khungchitiet">
            <p><?=$row_chitiet['tenbaiviet']?></p>
            <p><?=$row_chitiet['noidung']?></p>
        </div>

</div>
<?php
    }
?>