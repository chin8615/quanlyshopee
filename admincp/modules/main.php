<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']) {
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else {
            $tam = '';
            $query = '';
        }
        if($tam == 'quanlydanhmucsanpham' && $query == 'them') 
        {
            include 'modules/quanlydanhmucsp/them.php';
            include 'modules/quanlydanhmucsp/lietke.php';
        }
        elseif($tam == 'quanlydanhmucsanpham' && $query == 'sua') 
        {
            include 'modules/quanlydanhmucsp/sua.php';
        }
        elseif($tam == 'quanlysanpham' && $query == 'them') {
            include 'modules/quanlysanpham/them.php';
            include 'modules/quanlysanpham/lietke.php';
        }
        elseif($tam == 'quanlysanpham' && $query == 'sua') 
        {
            include 'modules/quanlysanpham/sua.php';
        }
        elseif($tam == 'quanlydonhang' && $query == 'lietke') 
        {
            include 'modules/quanlydonhang/lietke.php';
        }
        elseif($tam == 'donhang' && $query == 'xemdonhang') 
        {
            include 'modules/quanlydonhang/xemdonhang.php';
        }
        elseif($tam == 'quanlydanhmucbaiviet' && $query == 'them') {
            include 'modules/quanlydanhmucbaiviet/them.php';
            include 'modules/quanlydanhmucbaiviet/lietke.php';
        }
        elseif($tam == 'quanlydanhmucbaiviet' && $query == 'sua') 
        {
            include 'modules/quanlydanhmucbaiviet/sua.php';
        }
        elseif($tam == 'quanlybaiviet' && $query == 'them') {
            include 'modules/quanlybaiviet/them.php';
            include 'modules/quanlybaiviet/lietke.php';
        }
        elseif($tam == 'quanlysanpham' && $query == 'sua') 
        {
            include 'modules/quanlysanpham/sua.php';
        }
        elseif($tam == 'quanlylienhe' && $query == 'capnhat') 
        {
            include 'modules/thongtinlienhe/quanly.php';
        }
        else 
        {
            include 'modules/dashboard.php';
        }
    ?>
</div>