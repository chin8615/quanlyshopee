<?php
    $sql_lietke_baiviet = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet 
    WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbaiviet.id_danhmucbaiviet ORDER BY id_danhmuc DESC";
    $query_lietke_baiviet = mysqli_query($mysqli,$sql_lietke_baiviet);
?>

<p>LIET KE TEN BÀI VIẾT</p>
<table>
        <tr>
            <th>id</th>
            <th>Ten bài viết</th>
            <th>Hinh anh bài viết</th>
            <th>Noi dung</th>
            <th>Danh muc bài viết</th>
            <th>Tinh trang</th>
            <th>Quản lý</th>
        </tr>
        <?php
            $i=0;
            while($row = mysqli_fetch_array($query_lietke_baiviet)) {
                $i++;
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['tenbaiviet']?></td>
            <td><img src="modules/quanlybaiviet/uploads/<?=$row['hinhanh']?>" alt="" style="width:100px;"></td>
            <td><?=$row['noidung']?></td>
            <td><?=$row['tendanhmuc_baiviet']?></td>
            <td><?php if($row['tinhtrang'] == 1)  echo 'Kich hoat';
            else echo 'An';
            ?></td>
            <td>
                <a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?=$row['id']?>">Xóa</a> |  <a 
                href="?action=quanlybaiviet&query=sua&idbaiviet=<?=$row['id']?>">sửa</a> 
            </td>
        </tr>
        <?php
            }
        ?>
</table>