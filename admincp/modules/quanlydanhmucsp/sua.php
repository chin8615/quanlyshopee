<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>

<p>SUA KE TEN DANH MUC</p>
<table>
    <form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?=$_GET['iddanhmuc']?>" method="POST">
        <?php
            while($row = mysqli_fetch_array($query_sua_danhmucsp)) {
        ?>
        <tr>
            <td>Ten danh muc</td>
            <td><input type="text" value="<?=$row['tendanhmuc']?>" name="tendanhmuc"></td>
        </tr>
        <tr>
            <td>Thu tu</td>
            <td><input type="text" value="<?=$row['thutu']?>" name="thutu"></td>
        </tr>
        <tr>
            <td><input type="submit" name="suadanhmuc" value="Sua danh muc san pham"></td>
        </tr>
        <?php
            }
        ?>
    </form>
</table>