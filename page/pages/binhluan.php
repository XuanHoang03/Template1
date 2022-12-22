<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
    header("Location:page/pages/login.php");
}
?>


<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');

$sql_lietkebinhluan = "SELECT * FROM binhluan WHERE binhluan.idphim = '$_GET[idphim])' ORDER BY idbinhluan DESC LIMIT 5 ";
$query_lietkebinhluan = mysqli_query($mysqli, $sql_lietkebinhluan);
?>


<?php
if (isset($_POST['binhluan'])) {
    //them
    $binhluan = $_POST['binhluan'];
    $idphim = $_GET['idphim'];
    $sql_thembinhluan = "INSERT INTO binhluan(idphim, binhluan) VALUE ('" . $idphim . "','" . $binhluan . "')";
    mysqli_query($mysqli, $sql_thembinhluan);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/style_index1.css">
    <title>Binhluan</title>
</head>

<body>
    <div class="lietkebinhluan">
        <table>
            <?php
            while ($row = mysqli_fetch_array($query_lietkebinhluan)) {
            ?>
            <div class="card p-3">

                <div class="d-flex justify-content-between align-items-center">

                    <div class="user d-flex flex-row align-items-center">

                        <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2">
                        <span><small class="font-weight-bold text-primary">james_olesenn</small> <small
                                class="font-weight-bold" style="color: black;">Hmm, This poster looks
                                cool</small></span>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </table>

    </div>
    <div class="nhapbinhluan">

        <form action="" method="POST">
            <p><textarea rows="3" style="resize: none;" placeholder="Bình luận..." class="form-control"
                    name="binhluan"></textarea></p>
            <p><input type="submit" class="btn btn-success" value="Gửi bình luận"></p>
        </form>
    </div>
</body>

</html>