<?php
    $sql_sua_dbbaiviet = "SELECT * FROM tbl_danhmucbaiviet WHERE id_danhmucbaiviet = '$_GET[iddanhmucbaiviet]' LIMIT 1";
    $query_sua_dbbaiviet = mysqli_query($mysqli,$sql_sua_dbbaiviet);
?>

<p>SUA KE TEN DANH MUC</p>
<table>
    <form action="modules/quanlydanhmucbaiviet/xuly.php?iddanhmucbaiviet=<?=$_GET['iddanhmucbaiviet']?>" method="POST">
        <?php
            while($row = mysqli_fetch_array($query_sua_dbbaiviet)) {
        ?>
        <tr>
            <td>Ten danh muc</td>
            <td><input type="text" value="<?=$row['tendanhmuc_baiviet']?>" name="tendanhmucbaiviet"></td>
        </tr>
        <tr>
            <td>Thu tu</td>
            <td><input type="text" value="<?=$row['thutu']?>" name="thutu"></td>
        </tr>
        <tr>
            <td><input type="submit" name="suadanhmucbaivet" value="Sua danh muc bài viết"></td>
        </tr>
        <?php
            }
        ?>
    </form>
</table>