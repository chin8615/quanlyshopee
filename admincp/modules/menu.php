<?php
    if(isset($_GET['dangxuat'])== 'dangxuat') {
        unset($_SESSION['dangky']);
        header('Location:login.php');
    }
?>
<ul class="admincp_menulist" style="display:flex;">
    <li><a href="index.php">Thống kê</a></li>
    <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quan Ly Danh Muc San Pham</a></li>
    <li><a href="index.php?action=quanlysanpham&query=them">quan ly san pham</a></li>
    <li><a href="index.php?action=quanlydanhmucbaiviet&query=them">Quan Ly Danh Muc Bai Viet</a></li>
    <li><a href="index.php?action=quanlybaiviet&query=them">Quan Ly Bai Viet</a></li>
    <li><a href="index.php?action=quanlydonhang&query=lietke">Quan Ly Đơn hàng</a></li>
    <li><a href="index.php?action=quanlylienhe&query=capnhat">Quan Ly Thông Tin Liên Hệ</a></li>
    <li><a href="index.php?action=dangxuat">Đăng xuất</a></li>
</ul>