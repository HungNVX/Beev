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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ADMIN</title>
</head>
<body>
    <div>
        <h1>QUẢN LÝ TÀI KHOẢN</h1>
    </div>

    <div>
            <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="quanlybaiviet.php">Quản lý bài viết</a>
            <a class="nav-link active" aria-current="page" href="admintao.php">Thêm tài khoản</a>
            <a class="nav-link active" aria-current="page" href="adminxoatk.php">Xóa tài khoản</a>
            <a class="nav-link active" aria-current="page" href="adminsuatk.php">Sửa tài khoản</a>
            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        </ul>
    </div>
    <DIV>
            <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">USERNAME</th>
            <th scope="col">PASSWORD</th>
            <th scope="col">EMAIL</th>
            <th scope="col">BIRTHDAY</th>
            <th scope="col">SEX</th>
            <th scope="col">TRẠNG THÁI</th>
            </tr>
        </thead>
        <?php require_once 'ketnoi.php'?>
                        <?php
                            $sql = "SELECT * FROM member";
                            $result = $conn->query($sql);
                            while($row = $result -> fetch_assoc()){
                                if($row['trangthai']=='1'){
                                    $online = 'ON';
                                }else{
                                    $online = 'OFF';
                                }

                                echo "
                                <tbody>
                                    <tr>
                                    <td scope='row'>".$row['id']."</td>
                                    <td>".$row['username']."</td>
                                    <td>".$row['pass']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['birthday']."</td>
                                    <td>".$row['sex']."</td>
                                    <td>".$online."</td>
                                    </tr>
                                </tbody>
                                ";
                            }
                          ?>  
        
        </table>
    </DIV>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
