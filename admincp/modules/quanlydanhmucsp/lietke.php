<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>

<p>LIET KE TEN DANH MUC</p>
<table>
        <tr>
            <th>id</th>
            <th>Ten danh muc</th>
            <th>Quan ly</th>
        </tr>
        <?php
            $i=0;
            while($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
                $i++;
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['tendanhmuc']?></td>
            <td>
                <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?=$row['id_danhmuc']?>">Xóa</a> |  <a 
                href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?=$row['id_danhmuc']?>">sửa</a> 
            </td>
        </tr>
        <?php
            }
        ?>
</table>