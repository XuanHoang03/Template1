<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'webphim');

//xoa
$id = $_GET['idkh'];
$sql_xoa = "DELETE FROM khachhang WHERE idkh='" . $id . "'";
mysqli_query($mysqli, $sql_xoa);
header('Location:../../index.php?action=quanlykhachhang&query=lietke');