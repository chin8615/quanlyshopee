<?php
    session_start();
    include '../../admincp/config/config.php';
    require('../../mail/sendmail.php');
    require('../../carbondate/autoload.php');
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    $now = Carbon::now('Asia/Ho_Chi_Minh');
    $id_khachang = $_SESSION['id_khachhang'];
    $ma_order = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang,ma_cart,cart_status,cart_date)
    VALUE('".$id_khachang."','".$ma_order."',1,'".$now."')";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($cart_query) {
        //them gio hang chi tiet
        foreach($_SESSION['cart'] as $key => $value) {
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_cart_details = "INSERT INTO tbl_cart_details(id_sanpham,ma_cart,soluongmua) 
            VALUE ('".$id_sanpham."','".$ma_order."', '".$soluong."')";
            mysqli_query($mysqli, $insert_cart_details);
        }
        $tieudemail = 'Đặt hàng thành công qua mail!';
        $noidungmail = 'cảm ơn quý khách đã đặt hàng:mã đơn hàng '.$ma_cart.'';
        $noidungmail.= 'Đơn đặt hàng gồm:';
        foreach($_SESSION['cart'] as $key => $val) {
            $noidungmail.="<ul>
                <li>".$val['tensanpham']."</li>
                <li>".$val['masanpham']."</li>
                <li>".number_format((float)$val['giasanpham'],0,',','.')."</li>
                <li>".number_format((float)$val['gia_discount'],0,',','.')."</li>
                <li>".$val['soluong']."</li>
            </ul>";
        }
        $maildathang = $_SESSION['email'];
        $mailPHP = new Mailer();
        $mailPHP->dathangMailer($tieudemail,$noidungmail,$maildathang);
    }
    unset($_SESSION['cart']);
    header("Location:../../index.php?quanly=camon");

?>