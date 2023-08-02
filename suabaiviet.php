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
    $date = (new DateTime()) -> format('Y-m-d H:i:s');
    $get =($conn-> query("SELECT * FROM post WHERE idpost= '$idpost'"))->fetch_assoc();
    $noidungcu = $get['noidung'];

    if(isset($_POST['sua'])){
        $thaythe = $_POST['txtsua'];
        if($conn->query("UPDATE post set noidung ='$thaythe', date = '$date' WHERE idpost ='$idpost'")){
            echo "<script>alert('Chỉnh sửa thành công !');</script> <a href='thongtin.php'>Trở lại</a>";
        }else{
           echo "<script>alert('Chỉnh sửa thất bại !');</script> <a href='searchpost.php'>Trở lại</a>";
           }
    }
?>
<!DOCTYPE html>
<html> 
        <head> 
              <meta charset="UTF-8"> 
              <title>Post</title> 
              <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
              <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
             
             <style> 
                 html, body { 
                    margin: 0; 
                    padding: 0; 
                    font-family: 'Helvetica', 'Arial'; /* initial fonts */
                }
                #top-bar { 
                    width: 100%; 
                    background: #F1F1F1; /* light gray */ 
                    border-bottom: 1px solid #D4D4D4; /* dark gray "underline" */ 
                    height: 25px;
                }
                .normal-wrapper { 
                    width: 900px; 
                    margin: 0 auto; 
                    padding: 15px 40px; 
                    overflow: auto;
                }
                .logo-icon { 
                    color: #000000; 
                    font-size: 60pt; 
                    float: left;
                }
                h1 { 
                    float: left; 
                    margin: 21px 0 0 25px;
                }
                #navbar { 
                    list-style-type: none; /* remove bullet points */ 
                    margin: 29px 0 0 0; 
                    padding: 0; float: right; 
                    font-size: 16pt;
                }
                #navbar li { 
                    display: inline; /* make items horizontal */
                }
                #navbar li a:link, #navbar li a:visited, #navbar li a:active { 
                    text-decoration: none; /* remove underline */ 
                    color: #000000; 
                    padding: 0 16px 0 10px; /* space links apart */ 
                    margin: 0; 
                    border-right: 2px solid #B4B4B4; /* divider */
                }
                #navbar li a:link.last-link { 
                    /* remove divider */ 
                    border-right: 0px;
                }
                #navbar li a:hover { 
                    /* change color on hover (mouseover) */ 
                    color: #EB6361;
                }
                #top-color-splash { 
                    width: 100%; 
                    height: 4px; 
                    background: #EB6361;
                }
                .one-third { 
                    width: 40%; 
                    float: left; 
                    box-sizing: border-box; /* ensure padding and borders do not increase the size */ 
                    margin-top: 20px;
                }
                .two-third { 
                    width: 60%; 
                    float: left; 
                    box-sizing: border-box; /* ensure padding and borders do not increase the size */ 
                    padding-left: 40px; 
                    text-align: right; 
                    margin-top: 20px;
                }
                .featured-image { 
                    max-width: 300px; /* reduce image size while maintaining aspect ratio */
                }
                .no-margin-top { 
                    margin-top: 0; /* remove margin on things like headers */
                }
                #footer { 
                    width: 100%; 
                    background: #F1F1F1; /* light gray */ 
                    border-top: 1px solid #D4D4D4; /* 
                    dark gray "topline" */ 
                    height: 150px;
                }
              </style> 
        </head> 
        <body>
            <div id="top-bar"></div>
            <div class="normal-wrapper">
                <div id="logo-container"> 
                    <i class="fa fa-camera logo-icon"></i> <h1>BEEV</h1>
                </div>
                <ul id="navbar"> 
                  <li><a href="index.php">Trang Chủ</a></li>
                </ul>
            </div>
            <div id="top-color-splash"></div>
            <div class="normal-wrapper"> 
                <div class="one-third"> 
                    <h2>Chỉnh sửa bài viết</h2>
                    <h2 class="no-margin-top" style ="font-size:40px">-<?php echo $_SESSION['username']?>-</h2> 
                    <h6><?php echo $get['date']?></h6>
                    <p style ="font-size:25px"><?php echo $noidungcu ;?></p> 
                     <div class="container-fluid">
                        <form class="d-flex" method="POST" action="">
                        <input class="form-control me-2" name ="txtsua" placeholder="Nhập nội dung thay thế">
                        <button class="btn btn-outline" name="sua">Thay đổi</button>
                        </form>
                    </div>
                </div> 
                <div class="two-third"> 
                    <img class="featured-image" src="https://images.prismic.io/wdr-test-icti/3f9387b0e53fb535624c3a559964e5f3871345ac_connect-logo3x.png?auto=compress,format" /> 
                </div>
            </div>
            <div id="footer"></div>
            
        






              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script> 
              <script type="text/javascript"> 
                   /* JavaScript goes here, at the bottom of the page */ 
              </script> 
        </body>
</html>