<?php
    if(isset($_POST['doimatkhau'])) {
        $email = $_POST['email'];
        $matkhau_cu = md5($_POST['password_cu']);
        $matkhau_moi = md5($_POST['password_moi']);
        $sql = "SELECT * FROM tbl_dangky WHERE email = '".$email."' AND matkhau ='".$matkhau_cu."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0) {
            $sql_update = "UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'";
            header("Location:index.php?quanly=giohang");
        }else {
            echo '<p>Mật khẩu cũ hoặc email không đúng!</p>';
        }
    }
?>
<form action="" autocomplete="off" method="POST">
        <table>
            <tr>
                <td>ĐỔI MẬT KHẨU</td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>mat khau cũ</td>
                <td><input type="password" name="password_cu"></td>
            </tr>
            <tr>
                <td>mat khau mới</td>
                <td><input type="password" name="password_moi"></td>
            </tr>
            <tr>
                <td><input type="submit" name="doimatkhau" value="change"></td>
            </tr>
        </table>
</form>
