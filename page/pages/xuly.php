<?php
$mysqli = mysqli_connect("localhost", "root", "", "webphim");
if (isset($_POST['dangky'])) {
    $hoten = $_POST['name'];
    $ngaysinh = $_POST['date'];
    $sdt = $_POST['number-phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO khachhang(hoten,ngaysinh,sdt,email,username,password) VALUE('" . $hoten . "','" . $ngaysinh . "','" . $sdt . "','" . $email . "','" . $username . "','" . $password . "')");

    if ($sql_dangky) {
        echo '<p  style="color:green">Bạn đã đang ký thành công</p>';
        header("Location:login.php");
    }
}