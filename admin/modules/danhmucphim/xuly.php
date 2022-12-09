<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');
$tentheloai = $_POST['tentheloai'];
$thutu = $_POST['thutu'];
if (isset($_POST['themtheloai'])) {
    //them
    $sql_them = "INSERT INTO theloai(tentheloai,thutu) VALUE ('" . $tentheloai . "','" . $thutu . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlydanhmucphim&query=them');
} elseif (isset($_POST['suatheloai'])) {
    //sua
    $id = $_GET['idtheloai'];
    $sql_update = "UPDATE theloai SET tentheloai = '" . $tentheloai . "', thutu= '" . $thutu . "' WHERE idtheloai = '$id'";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlydanhmucphim&query=them');
} else {
    //xoa
    $id = $_GET['idtheloai'];
    $sql_xoa = "DELETE FROM theloai WHERE idtheloai='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlydanhmucphim&query=them');
}
?>