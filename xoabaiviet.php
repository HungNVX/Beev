<?php require_once 'ketnoi.php' ?>
<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: dangnhap.php');
}else {
    $trangthai = $_SESSION['username'];
    $trangthaii = $conn->query("UPDATE member set trangthai='1' WHERE username ='$trangthai'");
}
?>
<?php require_once 'ketnoi.php' ?>
<?php
    $idpost = $_GET['idpost'];
    if (!empty($_GET['idpost'])){
        if( $cmt = mysqli_query($conn, "DELETE FROM comment WHERE idpost = '$idpost'")){
            if($post = mysqli_query($conn, "DELETE FROM post WHERE idpost = '$idpost'")){
                echo "<script>alert('Xóa bài viết thành công !');</script><a href='thongtin.php'>Trở lại</a>" ;
            }
        }
    }

       
 ?>