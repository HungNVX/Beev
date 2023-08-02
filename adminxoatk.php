<?php require_once 'ketnoi.php' ?>
<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
$admin = $_SESSION['username'];
if ($admin !='admin') {
    echo "Chức năng này chỉ dành cho ADMIN! <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
	//header('Location: dangnhap.php');
}else{
    $trangthai = $_SESSION['username'];
    $trangthaii = $conn->query("UPDATE member set trangthai='1' WHERE username ='$trangthai'");
}
?>
<?php require_once 'ketnoi.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Xóa tài khoản</title>
</head>
<body>
<?php
        if(isset($_POST['delete'])){
            $username = $_POST['txtUsername'];

                   //kiem tra ton tai user
                   $sql="SELECT * FROM member WHERE username = '$username'";
                   $result = $conn -> query($sql);
                   $row=$result -> fetch_assoc();
                   if($row == 0){
                       echo" <script>alert('KHÔNG TỒN TẠI USER NÀY !');</script>
                       <a href='admin.php'>Trở lại</a>";
         }else{     
            if($username != 'admin'){  
            $result=$conn -> query("DELETE FROM member WHERE username ='$username';");
                echo "<script>alert('Xóa tài khoản thành công');</script><a href='admin.php'>Trở lại</a>";
                 
            }else{
                echo "<script>alert('Không thể xóa ADMIN');</script><a href='admin.php'>Trở lại</a>";
                }
            }  
        }     
            $conn->close();
     ?> 
<div class ="container">
        <form method="POST" action="" >  
            <div class="form-group">
                <label for="txtUsername">Tên đăng nhập cần XÓA</label>
                <input name="txtUsername" class="form-control"  placeholder="">
            </div>
            
        <button type="submit" class="btn btn-warning" name ="delete">Xóa tài khoản</button>
        </form>
    </div>
</body>
</html>