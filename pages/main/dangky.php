<?php
    if(isset($_POST['dangky'])) {
        $hovaten = $_POST['hovaten'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $sql = "INSERT INTO tbl_dangky(tenkhachhang,email,matkhau,diachi,dienthoai) 
        VALUE('".$hovaten."','".$email."','".$password."','".$diachi."','".$sdt."')";
        $row_dangky = mysqli_query($mysqli, $sql);
        if($row_dangky) {
            echo 'ban da dang ky thanh cong!';
            $_SESSION['dangky'] = $hovaten;
            $_SESSION['email'] = $email;
            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            header("Location:index.php?quanly=giohang");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>DANG KY THANH VIEN</p>
<form action="" autocomplete="off" method="POST">
        <table>
            <tr>
                <td>Dang ky thanh vien</td>
            </tr>
            <tr>
                <td>ten khach hang</td>
                <td><input type="text" name="hovaten"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>mat khau</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>dia chi</td>
                <td><input type="text" name="diachi"></td>
            </tr>
            <tr>
                <td>so dien thoai</td>
                <td><input type="number" name="sdt"></td>
            </tr>
            <tr>
                <td><input type="submit" name="dangky" value="dang ky"></td>
                <td><a href="index.php?quanly=dangnhap">Dang nhap</a></td>
            </tr>
        </table>
    </form>
</body>
</html>