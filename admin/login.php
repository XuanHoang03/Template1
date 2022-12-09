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
    <title>login admin</title>
</head>

<body>
    <form action="" autocomplete="off" method="POST">
        <div class="all">
            <table border="1">
                <tr>
                    <td colspan="2">
                        <h3>login admin</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        username
                    </td>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                    </td>
                    <td>
                        <input type="text" name="password">
                    </td>

                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="dangnhap" value="login"></td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>