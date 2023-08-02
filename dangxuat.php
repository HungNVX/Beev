<?php require_once 'ketnoi.php' ?>
<?php
session_start();
$trangthai = $_SESSION['username'];
$trangthaii = $conn->query("UPDATE member set trangthai='0' WHERE username ='$trangthai'");
unset($_SESSION['username']);
header('location:trangchu.php');
 ?>