<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div class ="container">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Đăng Nhập</title>
</head>
<body>
    <?php require_once 'ketnoi.php'?>
    <?php 
        session_start();
        if(isset($_POST['login'])){ 
            $username = $_POST['txtUsername'];
            $pass = $_POST['txtPassword'];
            
            if (!$username || !$pass) {
                echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
        }
        $pass = md5($pass); 

        $query = "SELECT * FROM member WHERE username='$username' AND pass='$pass'"; 

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) >0) {
            $_SESSION["username"]= $username ;
            header('location:index.php');
           // echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href='index.php'>Go !</a>";
            //die();
            $conn->close();
        } else {
        echo "Tên đăng nhập hoặc mật khẩu không đúng!";
        }
    }
    ?>

    <div class ="container">
            <form method="POST" action="" >
                <div class="form-group">
                    <label for="txtUsername">Tên đăng nhập</label>
                    <input name="txtUsername" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtPassword">Mật khẩu</label>
                    <input name="txtPassword" class="form-control" placeholder="">
                </div>

                
            <button type="submit" class="btn btn-primary" name ="login">Đăng Nhập</button>
            </form>
    </div>
</body>
</html>