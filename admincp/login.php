<?php
    session_start();
    include 'config/config.php';
    if(isset($_POST['dangnhap'])) {
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username ='".$taikhoan."' AND password ='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0) {
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location:index.php");
        }else {
            echo 'tai khoan hoac mat khau khong dung!';
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
<div class="wrapper">
    <form action="" autocomplete="off" method="POST">
        <table>
            <tr>
                <td>Dang nhap admin</td>
            </tr>
            <tr>
                <td>Tai khoan</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Dang nhap</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="dangnhap" value="dang nhap"></td>
            </tr>
        </table>
    </form>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>