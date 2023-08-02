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
<html>
<head>
	<title>Trang chủ BEEV</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
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
                        font-size: 50pt; 
                        float: left;
                    }
                    h1 { 
                        float: left; 
                        margin: 15px 0 0 25px;
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
                        max-width: 500px; /* reduce image size while maintaining aspect ratio */
                    }
                    .no-margin-top { 
                        margin-top: 0; /* remove margin on things like headers */
                    }
                    #quote-area { 
                        background: #363636; 
                        color: #FFFFFF; 
                        text-align: center; 
                        padding: 15px 0;
                    }
                    h3 { 
                        font-weight: normal; 
                        font-size: 20pt; 
                        margin-top: 0px;
                    }
                    h4 { 
                        font-weight: normal; 
                        font-size: 16pt; 
                        margin-bottom: 0;
                    }
                    .icon-outer { 
                        box-sizing: border-box; /* ensure padding and borders do not increase the size */ 
                        float: left; 
                        width: 33.33%; 
                        padding: 25px; 
                        margin: 0; 
                        text-align: center;
                    }
                    .icon-circle { 
                        background: #EEEEEE; 
                        color: #B4B4B4; 
                        width: 150px; 
                        height: 150px; 
                        border-radius: 150px; /* make rounded corners */ 
                        margin: 0 auto; 
                        border: 2px solid #D6D6D6; 
                        box-sizing: border-box; /* ensure padding and borders do not increase the size */ 
                        font-size: 75pt; 
                        padding: 25px; 
                        cursor: pointer;
                    }
                    .icon-circle:hover { 
                        /* change color on hover (mouseover) */ 
                        color: #FFFFFF; 
                        background: #EB6361;
                        
                    }
                    h5 { 
                        margin: 15px 0 10px 0;
                        
                        font-size: 20pt;
                    }
                    #footer { 
                        width: 100%; 
                        background: #F1F1F1; /* light gray */ 
                        border-top: 1px solid #D4D4D4; /* 
                        dark gray "topline" */ 
                        height: 150px;
                    }
@import url('https://fonts.googleapis.com/css?family=PT+Sans');
@import url('https://fonts.googleapis.com/css?family=PT+Serif');

h1, h2, h4, h5, h6 { 
    font-family: 'PT Sans', 'Helvetica', 'Arial';
}
              </style> 
</head>
<body>
<div id="top-bar"></div>
            <div class="normal-wrapper">
              <div id="logo-container"> 
                <i class="fa fa-camera logo-icon"></i> <h1>BEEV</h1>
                <ul id="navbar"> 
                  <li><a href="index.php">Trang chủ</a></li> 
                  <li><a href="dangxuat.php">Đăng Xuất</a></li> 
                  <li><a href="admin.php">Quản Lý</a></li> 
                  
              </ul>
              
           </div>
            </div>
            <div id="top-color-splash"></div>
            <div class="normal-wrapper"> 
            <?php //hiện bài viết
                $id = $_GET['id'];
                $sql = ($conn-> query("SELECT * FROM post WHERE id ='$id'"));
                while($post=mysqli_fetch_assoc($sql)){
                    $idpost =$post['idpost'];
                ?>
                            <div class="card" style="width: 80rem;">
                                <div class="card-body">
                                    <a href='./suabaiviet.php?idpost=<?= $idpost ?>'>[Sửa bài viết]</a>
                                    <a href="./xoabaiviet.php?idpost=<?= $idpost ?>">[Xóa bài viết]</a>
                                    <h5 class="card-title" style ="font-size:42px">-<?= $_SESSION['username'] ?>-</h5>
                                    <h8 class="card-title"><?= $post['date']?></h8>
                                    <p class="card-text" style ="font-size:22px"><?= $post['noidung'] ?></p> 
                                    <?php 
                                        $getcmt = $conn -> query("SELECT * FROM comment WHERE idpost = '$idpost'");
                                        while($row = mysqli_fetch_assoc($getcmt)){
                                            $getid = $row['id'];
                                            $getuser = ($conn-> query("SELECT * FROM member WHERE id='$getid'"))->fetch_assoc();
                                    ?>
                                    <p style ="font-size:12px">-<?=$getuser['username']?>- : <?=$row['text'] ?></p>
                                    <?php } ?>
                                    <div class="container-fluid">
                                        <form class="d-flex" method="get" action="">
                                        <input class="form-control me-2" name ="textcmt">
                                        <button class="btn btn-outline"name="cmt" value ="<?php echo $idpost;?>" >SEND</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                <?php } ?>
                            <?php  // bình luận 
                                            $tennguoibinhluan = $_SESSION['username'];
                                            $layidnguoicmt = ($conn -> query("SELECT id FROM member WHERE username = '$tennguoibinhluan'")) -> fetch_assoc();
                                            $idnguoicmt= $layidnguoicmt['id'];
                                            if(isset($_GET['cmt'])){
                                            $idbaiviet = $_GET['cmt'];
                                               $noidungcmt = $_GET['textcmt'];
                                               $date = (new DateTime()) -> format('Y-m-d H:i:s');
                                               if(($conn -> query("INSERT INTO comment(idpost,id,text,date) VALUES ('$idbaiviet','$idnguoicmt',N'$noidungcmt','$date')"))){
                                                   echo "<script>alert('Bình luận thành công !');</script><a href='thongtin.php'>Trở lại</a>";
                                               }
                                            }
                                        ?> 
          </div>
          
          <div id="quote-area"> 
            <div class="normal-wrapper"> 
                <h3>"CONNECT TOGETHER" </h3> 
                <h4>Let's join ! </h4> 
            </div>
        </div>
        <div class="normal-wrapper"> 
          <div class="icon-outer"> 
              <div class="icon-circle"> 
                <i class="fa fa-facebook" aria-hidden="true"></i> 
              </div> 
              <h5>Facebook</h5> 
              <p></p> 
          </div>
          <div class="icon-outer"> 
              <div class="icon-circle"> 
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </div> 
              <h5>Instagram</h5> 
              <p></p> 
          </div>
          <div class="icon-outer"> 
              <div class="icon-circle"> 
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </div> 
              <h5>YouTube</h5> 
              <p></p>  
           </div>
      </div>
      <div id="footer"></div>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script> 
              <script type="text/javascript"> 
                   /* JavaScript goes here, at the bottom of the page */ 
              </script> 

	

</body>
</html>     