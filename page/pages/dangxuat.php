<?php
session_start();
if (isset($_SESSION['dangnhap'])) {
    unset($_SESSION['dangnhap']);
}
header("Location:login.php");