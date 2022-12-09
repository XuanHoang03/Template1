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
        header("Location:login.php");
    }
}
?>







<div class="container">
    <div class="box">
        <p class="text-center" style="font-size:50px; color: aliceblue;">ĐĂNG KÝ</p>
        <form action="dangky.php" method="post" class="text-center">
            <div class="field">
                <div class="control">
                    <input type="text" class="input fix" name="name" placeholder="Họ và tên" value="" required="">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <input type="text" class="input fix" name="date" placeholder="Ngày/tháng/năm sinh" value=""
                        required="">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <input type="text" class="input fix" name="number-phone" placeholder="Sđt" value="" required="">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <input type="email" class="input fix" name="email" placeholder="Gmail" value="" required="">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <input type="text" class="input fix" name="username" placeholder="Tên đăng nhập" value=""
                        required="">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <input type="text" class="input fix" name="password" placeholder="Mật khẩu" value="" required="">
                </div>
            </div>

            <button class="fix button" style="text-decoration: none; background-color:#3E8ED0;color:#FFFAFA;"
                name="dangky" type="submit">Đăng
                ký</button>
            <div class="or">HOẶC</div>
            <div class="button fix" style="background-color: #FD0808;">
                <a href="login.php" class="" style="text-decoration: none; color:#FFFAFA;">Đăng Nhập</a>
            </div>
        </form>

    </div>
</div>