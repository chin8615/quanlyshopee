<?php
    include '../../config/config.php';
    if(isset($_GET['code'])) {
        $code = $_GET['code'];
        $sql_update = "UPDATE tbl_cart SET cart_status=0 WHERE ma_cart='.$code.'";
        header("Location:../../index.php?action=donhang&query=lietke");
    }
?>