<?php
    include '../../config/config.php';
    $tensp = $_POST['tensp'];
    $masp = $_POST['masp'];
    $giasp = $_POST['giasp'];
    $giadiscount = $_POST['giadiscount'];
    $soluong = $_POST['soluong'];
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    $noidung = $_POST['noidung'];
    $tomtat = $_POST['tomtat'];
    $tinhtrang = $_POST['tinhtrang'];
    $danhmuc = $_POST['danhmuc'];
    if(isset($_POST['themsanpham'])) {
        $sql_them = "INSERT INTO tbl_sanpham(tensanpham,masanpham,giasanpham,gia_discount,soluong,hinhanh,noidung,tomtat,tinhtrang,id_danhmuc) 
        VALUE('".$tensp."', '".$masp."', '".$giasp."', '".$giadiscount."' ,'".$soluong."', '".$hinhanh."', '".$noidung."','".$tomtat."','".$tinhtrang."', '".$danhmuc."')";
        mysqli_query($mysqli, $sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header("Location:../../index.php?action=quanlysanpham&query=them");
    }
    elseif(isset($_POST['suasanpham'])) {
        if($hinhanh != '') {
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
            $query = mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
            $sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensp."', masanpham='".$masp."', giasanpham='".$giasp."',gia_discount='".$giadiscount."', soluong='".$soluong."', hinhanh='".$hinhanh."', noidung='".$noidung."', tomtat='".$tomtat."', tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."'  WHERE id_sanpham='$_GET[idsanpham]'";
        } else {
            $sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensp."', masanpham='".$masp."', giasanpham='".$giasp."',gia_discount='".$giadiscount."', soluong='".$soluong."', noidung='".$noidung."', tomtat='".$tomtat."', tinhtrang='".$tinhtrang."', id_danhmuc='".$danhmuc."'  WHERE id_sanpham='$_GET[idsanpham]'";
        }
        mysqli_query($mysqli, $sql_update);
        header("Location:../../index.php?action=quanlysanpham&query=them");
    }
    else {
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id'";
        $query = mysqli_query($mysqli, $sql);
        while($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
?>