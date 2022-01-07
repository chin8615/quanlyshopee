<?php
    $sql_sua_baiviet = "SELECT * FROM tbl_baiviet WHERE id = '$_GET[idbaiviet]' LIMIT 1";
    $query_sua_baiviet = mysqli_query($mysqli,$sql_sua_baiviet);
?>

<p>SUA KE TEN DANH MUC</p>
<table>
    <form action="modules/quanlybaiviet/xuly.php?idbaiviet=<?=$_GET['idbaiviet']?>" method="POST" enctype="multipart/form-data">
        <?php
            while($row = mysqli_fetch_array($query_sua_baiviet)) {
        ?>
        <tr>
            <td>Ten bài viết</td>
            <td><input type="text" value="<?=$row['tenbaiviet']?>" name="tenbaiviet"></td>
        </tr>
        <tr>
            <td>Hinh anh bài viết</td>
            <td>
                <input type="file" name="hinhanh">
                <img src="modules/quanlybaiviet/uploads/<?=$row['hinhanh']?>" alt="" style="width:100px;">
            </td>
        </tr>
        <tr>
            <td>Noi dung</td>
            <td><input type="text" value="<?=$row['noidung']?>" name="noidung"></td>
        </tr>
        <tr>
            <td>Tom tat</td>
            <td><input type="text" value="<?=$row['tomtat']?>" name="tomtat"></td>
        </tr>
        <tr>
            <td>Danh muc san pham</td>
            <td>
                <select name="danhmuc">
                    <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_danhmucbaiviet DESC";
                        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                        while($row_danhmuc= mysqli_fetch_array($query_danhmuc)) {
                            if($row_danhmuc['id_danhmucbaiviet'] == $row['id_danhmucbaiviet']) {
                    ?>
                    <option selected value="<?=$row_danhmuc['id_danhmucbaiviet']?>"><?=$row_danhmuc['tendanhmucbaiviet']?></option>
                    <?php
                            }else {
                    ?>
                    <option value="<?=$row_danhmuc['id_danhmucbaiviet']?>"><?=$row_danhmuc['tendanhmucbaiviet']?></option>
                    <?php 
                        }
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tinh trang bài viết</td>
            <td>
                <select name="tinhtrang">
                    <?php
                        if($row['tinhtrang']==1){
                    ?>
                    <option value="1" selected>Kich hoat</option>
                    <option value="0">An</option>
                    <?php
                        }else{
                    ?>
                    <option value="1">Kich hoat</option>
                    <option value="0" selected>An</option>
                    <?php 
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="suabaiviet" value="Sua bài viết"></td>
        </tr>
        <?php
            }
        ?>
    </form>
</table>