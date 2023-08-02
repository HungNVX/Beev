<?php
require_once 'ketnoi.php'
?>
<?php
    if(isset($_POST['cmt'])){
        $text = $_POST['textcmt'];
        $date = (new DateTime()) -> format('Y-m-d H:i:s');
        $name = $_SESSION['username'];
        $row = ($conn -> query("SELECT id FROM member WHERE username = '$name'")) -> fetch_assoc();
        $id = $row['id'];
        

   }
?>
