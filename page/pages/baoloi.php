<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
if (isset($_POST['thongtinloi'])) {
    //them
    $thongtinloi = $_POST['thongtinloi'];
    $tenkhachhang = $_SESSION['ten'];
    $sql_themfeedback = "INSERT INTO baoloi(tenkhachhang, thongtinloi) VALUE ('" . $tenkhachhang . "','" . $thongtinloi . "')";
    mysqli_query($mysqli, $sql_themfeedback);
    echo "<script>alert('Cảm ơn bạn đã feedback');</script>";
}
?>



<div class="baoloi">
    <h1>Feedback</h1>
    <form action="" method="POST">
        <p><textarea rows="3" style="resize: none;" placeholder="Bình luận..." class="form-control" name="thongtinloi"
                maxlength="40"></textarea></p>
        <p><input type="submit" class="btn btn-success" value="Gửi Feedback"></p>
    </form>
</div>