<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$sql_infor = "SELECT * FROM phim WHERE idphim = '$_GET[idphim]' LIMIT 1";
$query_infor = mysqli_query($mysqli, $sql_infor);

$sql_lietke_danhgia = "SELECT * FROM danhgia WHERE danhgia.idphim='$_GET[idphim]' ORDER BY iddanhgia DESC LIMIT 5 ";
$query_lietke_danhgia = mysqli_query($mysqli, $sql_lietke_danhgia);
?>
<?php
if (isset($_POST['danhgia'])) {
    //them
    $danhgiaso = $_POST['danhgiaso'];
    $hoten = $_SESSION['ten'];
    $idphim = $_GET['idphim'];
    $sql_them_danhgia = "INSERT INTO danhgia(hoten,idphim,danhgiaso) VALUE ('" . $hoten . "','" . $idphim . "','" . $danhgiaso . "')";
    mysqli_query($mysqli, $sql_them_danhgia);
}
?>
<?php
while ($row = mysqli_fetch_array($query_infor)) {
?>
<div class="bg-image " style="background-image: url('admin/modules/phim/uploads/<?php echo $row['nen'] ?>'); 
            height:634px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: 100%">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); height: 2000px;">
        <div class="infor_phim d-flex">
            <div class="image_phim">
                <img src="admin/modules/phim/uploads/<?php echo $row['hinhanh'] ?>">
            </div>
            <div class="chitiet_phim">
                <div class="w-75">
                    <h1><?php echo $row['tenphim'] ?></h1>
                    <p><?php echo $row['thoiluongphim'] ?></p>
                    <p class="thongtin"><?php echo $row['thongtinphim'] ?></p>
                </div>
            </div>
            <!-- <div class="clear"></div> -->
            <div class="trailer">
                <h3>Trailer</h3>
                <iframe style="margin-top: 20px;" width="300" height="200"
                    src="https://www.youtube.com/embed/TcMBFSGVi1c"
                    title="Marvel Studios' Avengers: Endgame - Official Trailer" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="lietke1">
                <h3>Xếp hạng bộ phim này</h3>
                <table>
                    <?php
                        while ($row = mysqli_fetch_array($query_lietke_danhgia)) {
                        ?>
                    <tr>
                        <td class="pr-5"><?php echo $row['hoten'] ?></td>
                        <td><?php echo $row['danhgiaso'] ?></td>
                    </tr>
                    <?php
                        }
                        ?>
                </table>
                <form method="POST" action="" autocomplete="off">
                    <tr>
                        <td>Đánh giá</td><br>
                        <td><input type="text" name="danhgiaso"></td><br>
                    </tr>
                    <tr>
                        <td><input type="submit" name="danhgia" value="Đánh giá"></td>
                    </tr>
                </form>
            </div>
            <a href="index.php?quanly=xemphim&idphim=<?php echo $_GET['idphim'] ?>">
                <button style=" background-color: red; text-align: center; height: 50px; width: 300px; border-radius: 10px;
                color: aliceblue; font-size: large;" class="nutxemphim">Xem
                    phim</button></a>

        </div>
    </div>
</div>
<?php
}
?>



<script>
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
</script>