<table>
    <h3>THEM SAN PHAM MOI</h3>
    <form action="modules/quanlysanpham/xuly.php" method="POST" enctype="multipart/form-data">
        <tr>
            <td>Ten san pham</td>
            <td><input type="text" name="tensp"></td>
        </tr>
        <tr>
            <td>Gia san pham</td>
            <td><input type="text" name="giasp"></td>
        </tr>
        <tr>
            <td>Gia giảm</td>
            <td><input type="text" name="giadiscount"></td>
        </tr>
        <tr>
            <td>Ma san pham</td>
            <td><input type="text" name="masp"></td>
        </tr>
        <tr>
            <td>So luong</td>
            <td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <td>Hinh anh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr><tr>
            <td>Noi dung</td>
            <td><textarea id="noidung" name="noidung"></textarea></td>
        </tr>
        </tr><tr>
            <td>Tóm tắt</td>
            <td><textarea id="tomtat" name="tomtat"></textarea></td>
        </tr>
        <tr>
            <td>Danh muc san pham</td>
            <td>
                <select name="danhmuc">
                    <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                        while($row_danhmuc= mysqli_fetch_array($query_danhmuc)) {
                    ?>
                    <option value="<?=$row_danhmuc['id_danhmuc']?>"><?=$row_danhmuc['tendanhmuc']?></option>
                    <?php 
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tinh Trang</td>
            <td>
                <select name="tinhtrang" id="">
                    <option value="1">Kich hoat</option>
                    <option value="0">An</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="themsanpham" value="Them san pham"></td>
        </tr>
    </form>
</table>