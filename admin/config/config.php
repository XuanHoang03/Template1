<?php
$mysqli = mysqli_connect("localhost", "root", "", "webphim");

// Check connection
if ($mysqli->connect_errno) {
    echo "Lỗi kết nối msqli" . $mysqli->connect_error;
    exit();
}