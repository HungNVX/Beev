<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>đăng ký</title>
</head>
<body>
    <?php require_once 'ketnoi.php'?> 
    <?php
        if(isset($_POST['add'])){
            $username = $_POST['txtUsername'];
            $pass = $_POST['txtPassword'];
            $email = $_POST['txtEmail'];
            $birthday = $_POST['txtBirthday'];
            $sex = $_POST['txtSex'];
            
            if(!$username || !$pass || !$email || !$birthday || !$sex){
                echo "<script>alert('Bạn chưa nhập đầy đủ thông tin !');</script> <a href = 'dangky.php'>Trở lại đăng ký</a>";
                exit;
            }else{

            
            $pass = md5($pass);
           if($conn -> query("INSERT INTO member(username,pass,email,birthday,sex) 
                               VALUES(N'$username',N'$pass',N'$email',N'$birthday',N'$sex')")){
                echo "<script>alert('Dang ky thanh cong');</script> <a href ='dangnhap.php'>Đăng nhập</a>";
                
            }else{
                echo "<script>alert('Dang ky that bai');</script>";
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
            </div>
            <div class="form-group">
                <label for="txtPassword" type="password">Mật khẩu</label>
                <input name="txtPassword" class="form-control" placeholder="" type="password">
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input name="txtEmail" class="form-control" placeholder="abc@gmail.com">
            </div>
            <div class="form-group">
                <label for="txtBirthday">Ngày Sinh</label>
                <input name="txtBirthday" class="form-control" placeholder="dd/mm/yyyy">
            </div>
            <div class="form-group">
                <label for="txtSex">Giới Tính</label>
                <select name="txtSex">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
            </div>
            
        <button type="submit" class="btn btn-primary" name ="add">Đăng Ký</button>
        </form>
    </div>


</body>
</html>
