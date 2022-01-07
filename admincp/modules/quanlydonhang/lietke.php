<?php
    $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky 
    ORDER BY tbl_cart.id_cart DESC";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>

<p>LIET KE DON HÀNG</p>
<table>
        <tr>
            <th>id</th>
            <th>mã đơn hàng</th>
            <th>tên khách hàng</th>
            <th>địa chỉ</th>
            <th>email</th>
            <th>số điện thoại</th>
            <th>Tình trạng</th>
            <th>Ngày đặt</th>
            <th>Quan ly</th>
        </tr>
        <?php
            $i=0;
            while($row = mysqli_fetch_array($query_lietke_dh)) {
                $i++;
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['ma_cart']?></td>
            <td><?=$row['tenkhachhang']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['diachi']?></td>
            <td><?=$row['dienthoai']?></td>
            <td><?php
                    if($row['cart_status']==1){
                        echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['ma_cart'].'">Dơn hàng mới</a>';
                    }else{
                        echo 'Đã xem';
                    }
                ?>
            </td>
            <td><?=$row['cart_date']?></td>
            <td>
                <a href="index.php?action=donhang&query=xemdonhang&code=<?=$row['ma_cart']?>">Xem giỏ hàng</a>
            </td>
        </tr>
        <?php
            }
        ?>
</table>