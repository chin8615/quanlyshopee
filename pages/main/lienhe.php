<h3>THÔNG TIN LIÊN HỆ</h3>
<?php
    $sql_lh = "SELECT * FROM tbl_lienhe";
    $query_lh = mysqli_query($mysqli,$sql_lh);
?>
    <?php
        while ($row = mysqli_fetch_array($query_lh)) {
    ?>
        <p><?=$row['thongtinlienhe']?></p>
    <?php
        }
    ?>