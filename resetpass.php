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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Sửa tài khoản</title>
</head>
<body>
    <?php require_once 'ketnoi.php'?> 
    <?php
        if(isset($_POST['sua'])){

            $username = $_POST['txtUsername'];
            $usernamess = $_SESSION['username'];
            $passnew = '123456';
            $passnew = md5($passnew);
       //kiem tra  user 
            if($username != $usernamess ){
                echo "<script>alert('SAI TÊN ĐĂNG NHẬP !');</script>";
            }else{
                if($conn->query("UPDATE member set pass='$passnew' WHERE username='$username'")){
                    echo "<script>alert('RESET MẬT KHẨU THÀNH CÔNG!');</script> <a href='thongtin.php'>Trở lại</a>";
                }
            }
                    
            }
            $conn->close();
     ?> 

     <div class ="container">
        <form method="POST" action="" >  
            <div class="form-group">
                <label for="txtUsername">Tên đăng nhập</label>
                <input name="txtUsername" class="form-control"  placeholder="">
                <p>MẬT KHẨU MẶC ĐỊNH : 123456</p>
            </div>

            
        <button type="submit" class="btn btn-primary" name ="sua">Thay đổi</button>
        </form>
    </div>


</body>
</html>