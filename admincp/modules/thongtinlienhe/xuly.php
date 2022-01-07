<?php
    include '../../config/config.php';
    $thongtin_lh = $_POST['thongtin'];
    if(isset($_POST['submitthongtin'])) {
        $sql_update = "UPDATE tbl_lienhe SET thongtinlienhe='".$thongtin_lh."' WHERE id_lienhe='$_GET[id]'";
        mysqli_query($mysqli, $sql_update);
        header("Location:../../index.php?action=quanlylienhe&query=capnhat");
    }
?>
