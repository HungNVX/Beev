<?php
function sql_escape($value)
  {     
      if(function_exists("mysql_real_escape_string"))
       {
           $value=mysql_real_escape_string($value);   
       }else{
              $value=addslashes($value);
            }
     return $value;    
  }
  ?>