<?php
function sql_blacklist($qr)
{
    // Chuyển câu truy vấn thành chữ hoa
    $strToUpper = strtoupper($qr);
    $blackList=array(
                     "UNION","INFORMATION","SCHEMA",
                     "DELETE","INSERT","DROP","--"
                    );
    for($i=0;$i<count($blackList);$i++)
     {
          $blackKey=$blackList[$i];
          // Nếu có từ khóa được phát hiện thì trả về vị trí của nó
          $pos=strpos($strToUpper,$blackKey);
          if( $pos > 0)
           {
              return true;
           }
     }
     
     return false;
}
?>