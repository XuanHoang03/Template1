<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$tenphim = $_POST['tenphim'];

$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

$nen = $_FILES['nen']['name'];
$nen_tmp = $_FILES['nen']['tmp_name'];

$thongtinphim = $_POST['thongtinphim'];
$thoiluongphim = $_POST['thoiluongphim'];

$ngaydang = $_POST['ngaydang'];
$tinhtrang = $_POST['tinhtrang'];
$idtheloai = $_POST['idtheloai'];


if (isset($_POST['themphim'])) {
    //them
    $sql_them = "INSERT INTO phim(tenphim,hinhanh,nen,thongtinphim,thoiluongphim,ngaydang,tinhtrang,idtheloai) VALUE ('" . $tenphim . "','" . $hinhanh . "','" . $nen . "','" . $thongtinphim . "','" . $thoiluongphim . "','" . $ngaydang . "','" . $tinhtrang . "','" . $idtheloai . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    move_uploaded_file($nen_tmp, 'uploads/' . $nen);
    header('Location:../../index.php?action=quanlyphim&query=them');
} elseif (isset($_POST['suaphim'])) {
    //sua
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    move_uploaded_file($nen_tmp, 'uploads/' . $nen);
    $id = $_GET['idphim'];
    if ($_POST['hinhanh'] || $_POST['nen']) {
        $sql_update = "UPDATE phim SET tenphim = '" . $tenphim . "', hinhanh= '" . $hinhanh . "', nen= '" . $nen . "', thongtinphim= '" . $thongtinphim . "', thoiluongphim= '" . $thoiluongphim . "', ngaydang= '" . $ngaydang . "', tinhtrang= '" . $tinhtrang . "',idtheloai = '" . $idtheloai . "' WHERE idphim = '$id'";

        $sql = "SELECT * FROM phim WHERE idphim = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['hinhanh']);
            unlink('uploads/' . $row['nen']);
        }
    } else {
        $sql_update = "UPDATE phim SET tenphim = '" . $tenphim . "', thongtinphim= '" . $thongtinphim . "', thoiluongphim= '" . $thoiluongphim . "', ngaydang= '" . $ngaydang . "', tinhtrang= '" . $tinhtrang . "',idtheloai = '" . $idtheloai . "' WHERE idphim = '$id'";
    }

    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlyphim&query=them');
} else {
    //xoa
    $id = $_GET['idphim'];
    $sql = "SELECT * FROM phim WHERE idphim = '$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM phim WHERE idphim='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlyphim&query=them');
}