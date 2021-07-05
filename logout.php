<?php  
  
  
session_start();
 
session_start();
  if (!isset($_SESSION["email"]))
{
      header("location:http://localhost/new/index.php");
}
else{
 session_destroy();  
 header("http://localhost/new/index.php");
}
?> 