<?php
    include '../../config/config.php';
    $tenbaiviet = $_POST['tenbaiviet'];
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    $noidung = $_POST['noidung'];
    $tinhtrang = $_POST['tinhtrang'];
    $danhmuc = $_POST['danhmuc'];
    if(isset($_POST['thembaiviet'])) {
        $sql_them = "INSERT INTO tbl_baiviet(tenbaiviet,id_danhmuc,noidung,tinhtrang,hinhanh) 
        VALUE('".$tenbaiviet."','".$danhmuc."', '".$noidung."','".$tinhtrang."', '".$hinhanh."')";
        mysqli_query($mysqli, $sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header("Location:../../index.php?action=quanlybaiviet&query=them");
    }
    elseif(isset($_POST['suabaiviet'])) {
        if($hinhanh != '') {
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql = "SELECT * FROM tbl_baiviet WHERE id = '$_GET[idbaiviet]' LIMIT 1";
            $query = mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
            $sql_update = "UPDATE tbl_baiviet SET tenbaiviet='".$tenbaiviet.",id_danhmuc='".$danhmuc."', noidung='".$noidung."', tinhtrang='".$tinhtrang."', hinhanh='".$hinhanh."'  WHERE id='$_GET[idbaiviet]'";
        } else {
            $sql_update = "UPDATE tbl_baiviet SET tenbaiviet='".$tenbaiviet."', id_danhmuc='".$danhmuc."', noidung='".$noidung."', tinhtrang='".$tinhtrang."'  WHERE id='$_GET[idbaiviet]'";
        }
        mysqli_query($mysqli, $sql_update);
        header("Location:../../index.php?action=quanlybaiviet&query=them");
    }
    else {
        $id = $_GET['idbaiviet'];
        $sql = "SELECT * FROM tbl_baiviet WHERE id='$id'";
        $query = mysqli_query($mysqli, $sql);
        while($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_baiviet WHERE id = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlybaiviet&query=them');
    }
?>