<h3>THÔNG TIN LIÊN HỆ</h3>
<?php
    $sql_lh = "SELECT * FROM tbl_lienhe";
    $query_lh = mysqli_query($mysqli,$sql_lh);
?>
<table>
    <?php
        while ($row = mysqli_fetch_array($query_lh)) {
    ?>
    <form action="modules/thongtinlienhe/xuly.php?id=<?=$row['id_lienhe']?>" method="POST" enctype="multipart/form-data">
        <tr>
            <td>Thông tin</td>
            <td><textarea id="thongtin" name="thongtin"><?=$row['thongtinlienhe']?></textarea></td>
        </tr>
        
        <tr>
            <td><input type="submit" name="submitthongtin" value="Cập nhật"></td>
        </tr>
    <?php
        }
    ?>
    </form>
</table>