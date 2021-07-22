<?php
session_start();
unset($_SESSION['taikhoan']);
unset($_SESSION['id']);
header("location: http://localhost/WebPhaHe/admin/dangnhap.php");
?>