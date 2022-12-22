<?php
session_start();
$mysqli = mysqli_connect("localhost", "root", "", "webphim");
if (isset($_POST['dangnhap'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM khachhang WHERE username = '" . $username . "' AND password = '" . $password . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $username;
        $_SESSION['ten'] = $username;
        header("Location:../../index.php?ten=$username");
    } else {
        header("Location:login.php");
    }
}
?>



<div class="container">
    <div class="box">
        <p class="text-center" style="font-size:50px; color: aliceblue;">ĐĂNG NHẬP</p>
        <form action="dangnhap.php" method="post" class="text-center">
            <div class="field">
                <div class="control">
                    <input type="text" class="input fix" placeholder="Tài khoản..." name="username"
                        style="font-family: ink Free;">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <input type="password" class="input fix" placeholder="Mật khẩu..." name="password"
                        style="font-family: ink Free;">
                </div>
            </div>

            <button class="fix button" style="text-decoration: none; background-color:#3E8ED0;color:#FFFAFA;"
                name="dangnhap" type="submit">Đăng
                nhập</button>
            <div class="or">HOẶC</div>
            <div class="button fix" style="background-color: #FD0808;">
                <a href="login.php?quanly=dangky" class="" style="text-decoration: none; color:#FFFAFA;">Đăng ký</a>
            </div>
        </form>

    </div>
</div>