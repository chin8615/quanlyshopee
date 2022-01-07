<?php
    $sql_lietke_dmbaiviet = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
    $query_lietke_dmbaiviet = mysqli_query($mysqli,$sql_lietke_dmbaiviet);
?>

<p>LIET KE DANH MUC BÀI VIẾT</p>
<table>
        <tr>
            <th>id</th>
            <th>Tên bài viết</th>
            <th>Quan ly</th>
        </tr>
        <?php
            $i=0;
            while($row = mysqli_fetch_array($query_lietke_dmbaiviet)) {
                $i++;
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['tendanhmuc_baiviet']?></td>
            <td>
                <a href="modules/quanlydanhmucbaiviet/xuly.php?iddanhmucbaiviet=<?=$row['id_danhmucbaiviet']?>">Xóa</a> |  <a 
                href="?action=quanlydanhmucbaiviet&query=sua&iddanhmucbaiviet=<?=$row['id_danhmucbaiviet']?>">sửa</a> 
            </td>
        </tr>
        <?php
            }
        ?>
</table>