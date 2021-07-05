<?php
  require  'common.php';
  $con=mysqli_connect("localhost","root","","ecommerce");
  $email=$_POST['email'];
  $password=$_POST['password'];
  $remail= mysqli_real_escape_string($con,$email);
  $rpassword= mysqli_real_escape_string($con,$password);
  
  md5($rpassword);
  $select_query="SELECT id,email from users where password='$rpassword' and email='$remail'" or die($select_query);
  $login_users=mysqli_query($con,$select_query);
  
  $norow=mysqli_num_rows($login_users);
  
  if($norow==0)
  {   
      echo("inavalid id");
      header("location:http://localhost/new/login.php");
  }
 else {
     $founded=mysqli_fetch_array($login_users);
     session_start();
     $_SESSION['$email']=$EMAIL;
     $_SESSION['$password']=$PASSWORD;
     header("location:http://localhost/new/content.php");
     
     
}
?>
      
