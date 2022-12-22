<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_xemphim = "SELECT * FROM phim WHERE idphim = '$_GET[idphim]' LIMIT 1";
$query_xemphim = mysqli_query($mysqli, $sql_xemphim);

$sql_lietkebinhluan = "SELECT * FROM binhluan WHERE binhluan.idphim = '$_GET[idphim])' ORDER BY idbinhluan DESC LIMIT 5 ";
$query_lietkebinhluan = mysqli_query($mysqli, $sql_lietkebinhluan);
?>


<?php
while ($row = mysqli_fetch_array($query_xemphim)) {
?>

<video width="65%" height="700" style="margin: 33px" controls>

    <source src="admin/modules/phim/video/<?php echo $row['video'] ?>" type="video/mp4">

</video>
<?php
}
?>
<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');

$sql_lietkebinhluan = "SELECT * FROM binhluan WHERE binhluan.idphim = '$_GET[idphim])' ORDER BY idbinhluan DESC LIMIT 4 ";
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

<div class="binhluan">
    <table>
        <div class="lietkebinhluan">

            <?php
            while ($row = mysqli_fetch_array($query_lietkebinhluan)) {
            ?>
            <div class="card p-3 mb-4" style="background-color: antiquewhite;">

                <div class="titlebinhluan">
                    <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="rounded-circle mr-2">
                    <div class="tenbinhluan">
                        <?php echo $_SESSION['ten'] ?>
                    </div>
                </div>
                <p class="contentbinhluan" style="color: black"> <?php echo $row['binhluan'] ?>
                </p>

            </div>
            <?php
            }
            ?>

            <div class="nhapbinhluan">

                <form action="" method="POST">
                    <p><textarea rows="3" style="resize: none;" placeholder="Bình luận..." class="form-control"
                            name="binhluan" maxlength="40"></textarea></p>
                    <p><input type="submit" class="btn btn-success" value="Gửi bình luận"></p>
                </form>
            </div>
        </div>
    </table>
</div>