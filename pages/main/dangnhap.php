<?php
    if(isset($_POST['dangnhap'])) {
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_dangky WHERE email ='".$email."' AND matkhau ='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0) {
            
            
            $_SESSION['dangky'] = $row_dangnhap['tenkhachhang'];
            $_SESSION['email'] = $row_dangnhap['email'];
            $_SESSION['id_khachhang'] = $row_dangnhap['id_dangky'];
            
            header('Location:index.php?quanly=giohang');
        }else {
            echo '<p>tai khoan hoac mat khau khong dung!</p>';
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
<form action="" autocomplete="off" method="POST">
        <table>
            <tr>
                <td>DANG NHAP THANH VIEN</td>
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
                <td><input type="submit" name="dangnhap" value="Dang nhap"></td>
            </tr>
        </table>
    </form>
</body>
</html>