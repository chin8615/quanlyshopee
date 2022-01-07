<table>
    <h3>THEM BÀI VIẾT MOI</h3>
    <form action="modules/quanlybaiviet/xuly.php" method="POST" enctype="multipart/form-data">
        <tr>
            <td>Ten bài viết</td>
            <td><input type="text" name="tenbaiviet"></td>
        </tr>
        <tr>
            <td>Hinh anh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr><tr>
            <td>Noi dung</td>
            <td><textarea id="noidung" name="noidung"></textarea></td>
        </tr>
        <tr>
            <td>Danh muc bài viết</td>
            <td>
                <select name="danhmuc">
                    <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_danhmucbaiviet DESC";
                        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                        while($row_danhmuc= mysqli_fetch_array($query_danhmuc)) {
                    ?>
                    <option value="<?=$row_danhmuc['id_danhmucbaiviet']?>"><?=$row_danhmuc['tendanhmuc_baiviet']?></option>
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
            <td><input type="submit" name="thembaiviet" value="Them bài viết"></td>
        </tr>
    </form>
</table>