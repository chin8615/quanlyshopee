<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>

<p>LIET KE TEN SAN PHAM</p>
<table>
        <tr>
            <th>id</th>
            <th>Ten san pham</th>
            <th>Ma san pham</th>
            <th>Gia san pham</th>
            <th>Gia giảm</th>
            <th>So luong san pham</th>
            <th>Danh muc san pham</th>
            <th>Hinh anh san pham</th>
            <th>Noi dung</th>
            <th>Tóm tắt</th>
            <th>Tinh trang</th>
        </tr>
        <?php
            $i=0;
            while($row = mysqli_fetch_array($query_lietke_sp)) {
                $i++;
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['tensanpham']?></td>
            <td><?=$row['masanpham']?></td>
            <td><?=number_format((float)$row['giasanpham'],0,',','.').'vnd'?></td>
            <td><?=number_format((float)$row['gia_discount'],0,',','.').'vnd'?></td>
            <td><?=$row['soluong']?></td>
            <td><?=$row['tendanhmuc']?></td>
            <td><img src="modules/quanlysanpham/uploads/<?=$row['hinhanh']?>" alt="" style="width:100px;"></td>
            <td><?=$row['noidung']?></td>
            <td><?=$row['tomtat']?></td>
            <td><?php if($row['tinhtrang'] == 1)  echo 'Kich hoat';
            else echo 'An';
            ?></td>
            <td>
                <a href="modules/quanlysanpham/xuly.php?idsanpham=<?=$row['id_sanpham']?>">Xóa</a> |  <a 
                href="?action=quanlysanpham&query=sua&idsanpham=<?=$row['id_sanpham']?>">sửa</a> 
            </td>
        </tr>
        <?php
            }
        ?>
</table>