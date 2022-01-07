<?php
    $sql_sua_sanpham = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
    $query_sua_sanpham = mysqli_query($mysqli,$sql_sua_sanpham);
?>

<p>SUA KE TEN DANH MUC</p>
<table>
    <form action="modules/quanlysanpham/xuly.php?idsanpham=<?=$_GET['idsanpham']?>" method="POST" enctype="multipart/form-data">
        <?php
            while($row = mysqli_fetch_array($query_sua_sanpham)) {
        ?>
        <tr>
            <td>Ten san pham</td>
            <td><input type="text" value="<?=$row['tensanpham']?>" name="tensp"></td>
        </tr>
        <tr>
            <td>Ma san pham</td>
            <td><input type="text" value="<?=$row['masanpham']?>" name="masp"></td>
        </tr>
        <tr>
            <td>Gia san pham</td>
            <td><input type="text" value="<?=$row['giasanpham']?>" name="giasp"></td>
        </tr>
        <tr>
            <td>Gia giảm</td>
            <td><input type="text" value="<?=$row['gia_discount']?>" name="giadiscount"></td>
        </tr>
        <tr>
            <td>So luong san pham</td>
            <td><input type="text" value="<?=$row['soluong']?>" name="soluong"></td>
        </tr>
        <tr>
            <td>Hinh anh san pham</td>
            <td>
                <input type="file" name="hinhanh">
                <img src="modules/quanlysanpham/uploads/<?=$row['hinhanh']?>" alt="" style="width:100px;">
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
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                        while($row_danhmuc= mysqli_fetch_array($query_danhmuc)) {
                            if($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']) {
                    ?>
                    <option selected value="<?=$row_danhmuc['id_danhmuc']?>"><?=$row_danhmuc['tendanhmuc']?></option>
                    <?php
                            }else {
                    ?>
                    <option value="<?=$row_danhmuc['id_danhmuc']?>"><?=$row_danhmuc['tendanhmuc']?></option>
                    <?php 
                        }
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tinh trang san pham</td>
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
            <td><input type="submit" name="suasanpham" value="Sua san pham"></td>
        </tr>
        <?php
            }
        ?>
    </form>
</table>