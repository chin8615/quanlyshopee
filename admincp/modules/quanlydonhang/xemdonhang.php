<?php
    $code = $_GET['code'];
    $sql_lietke_dh = "SELECT * FROM tbl_dangky,tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham 
    AND tbl_cart_details.ma_cart='".$code."' ORDER BY tbl_cart_details.id_cart_detail DESC";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>

<p>DON HÀNG CHI TIẾT</p>
<table>
        <tr>
            <th>id</th>
            <th>mã đơn hàng</th>
            <th>tên khách hàng</th>
            <th>số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        <?php
            $i=0;
            $tongtien = 0;
            while($row = mysqli_fetch_array($query_lietke_dh)) {
                $i++;
                $thanhtien =$row['soluongmua']*$row['giasanpham'];
                $tongtien += $thanhtien;
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['ma_cart']?></td>
            <td><?=$row['tenkhachhang']?></td>
            <td><?=$row['soluongmua']?></td>
            <td><?=number_format((float)$row['giasanpham'],0,',','.').'vnd'?></td>
            <td><?=number_format((float)$thanhtien,0,',','.').'vnd'?></td>
        </tr>
        <?php
            }
        ?>
        <td>
            <p>Tổng tiền:<?=number_format((float)$tongtien,0,',','.').'vnd'?></p>
        </td>
</table>