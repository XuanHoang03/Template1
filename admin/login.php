<?php
session_start();
include('config/config.php');
if (isset($_POST['dangnhap'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE username = '" . $username . "' AND password = '" . $password . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $username;
        header("Location:index.php");
    } else {
        header("Location:login.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/modules/css/style.css">
    <title>login admin</title>
</head>

<body style="background-color: #fff;">
    <form action="" autocomplete="off" method="POST">
        <div class="all">
            <table class="tb" border="none">
                <tr>
                    <td colspan="2" style="border: none; background: #11A6D7;">
                        <h3 style="text-align: center; color: #ff6600; font-size: 30px;">LOGIN ADMIN</h3>
                    </td>
                </tr>
                <tr>
                    <td style="border: none;">
                        <input class="input-login" type="text" name="username" placeholder="Tài khoản...">
                    </td>
                </tr>
                <tr>
                    <td style="border: none;">
                        <input class="input-login" t type="text" name="password" placeholder="Mật khẩu...">
                    </td>

                </tr>
                <tr>
                    <td colspan="2" style="border: none;"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>