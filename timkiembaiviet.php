<?php require_once 'ketnoi.php' ?>
<?php
    if(isset($_GET['timkiem'])){
    $texttimkiem = $_GET['textsearch'];
    $tim=($conn->query("SELECT * FROM post WHERE noidung LIKE '%$texttimkiem%'"));
    if(mysqli_num_rows($tim) > 0){
       while( $result = mysqli_fetch_assoc($tim)){
        $iduser = $result['id'];
        $getname =($conn->query("SELECT * FROM member WHERE id='$iduser'"))->fetch_assoc();
    echo"
    <div class='card' style='width: 80rem;'>
    <div class='card-body'>
        <h5 class='card-title' style ='font-size:42px'>-".$getname['username']."-</h5>
        <h8 class='card-title'>".$result['date']."</h8>
        <p class='card-text' style ='font-size:22px'>".$result['noidung']."</p>
        </div>
        </div> ";
       }
    }else {
        echo " Không có bài viết nào ";
    }
}
 ?>
