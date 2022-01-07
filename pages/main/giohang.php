<p>gio hang:
<?php
    if(isset($_SESSION['dangky'])) {
        echo $_SESSION['dangky'];
    }
?>
</p>
<?php
    // if(isset($_SESSION['cart'])) {
        
    // }
?>
<table>
    <tr>
        <th>Id</th>
        <th>Ma san pham</th>
        <th>Ten san pham</th>
        <th>Hinh anh</th>
        <th>So luong</th>
        <th>Đơn giá</th>
        <th>Thanh tien</th>
        <th>Quan Ly</th>
    </tr>
    <?php
        if(isset($_SESSION['cart'])) {
            $i=0;
            $tongtien=0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien = $cart_item['soluong']*$cart_item['gia_discount'];
                $tongtien += $thanhtien;
                $i++;
    ?>
    <tr>
        <td><?=$i?></td>
        <td><?=$cart_item['masanpham']?></td>
        <td><?=$cart_item['tensanpham']?></td>
        <td><img style="width:100px;" src="admincp/modules/quanlysanpham/uploads/<?=$cart_item['hinhanh']?>" alt=""></td>
        <td>
            <a href="pages/main/themgiohang.php?cong=<?=$cart_item['id']?>">Cộng</a>
            <?=$cart_item['soluong']?>
            <a href="pages/main/themgiohang.php?tru=<?=$cart_item['id']?>">Trừ</a>
        </td>
        <td><?=$cart_item['gia_discount']?></td>
        <td><?=$thanhtien?></td>
        <td><a href="pages/main/themgiohang.php?xoa=<?=$cart_item['id']?>">Xoa</a></td>
    </tr>
    <?php
            }
    ?>
    <tr>
        <td>Tong tien:<?=$tongtien?></td>
        <td><a href="pages/main/themgiohang.php?xoatatca=1">Xoa tat ca</a></td>
        <?php
            if(isset($_SESSION['dangky']) ) {
        ?>
        <p><a href="pages/main/thanhtoan.php">dat hang</a></p>
        <?php
            }else{
        ?>
        <p><a href="index.php?quanly=dangky">dang ky dat hang</a></p>
        <?php
            }
        ?>
    </tr>
    <?php
        }else{
    ?>
    <tr>
        <td>Hien tai gio hang trong</td>
    </tr>
    <?php
        }
    ?>
</table>