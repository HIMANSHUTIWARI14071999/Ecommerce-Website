<?php
 include "common.php";
 session_start();
$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
if(!isset($_SESSION['email'])){
   header("Location:Login.php");
}
$userid=$_SESSION["id"];
$select_query="select * from users_stores up inner join stores u on u.id=up.$userid";
$result= mysqli_query($con, $select_query);
$rows=mysqli_num_rows($result);
if($result==0)
{
    
    echo "add item to cart first";
    
}
else{
    $price=$_post('price');
    while($sum!=0)
    {
        $sum=$sum+$price;
    }
}
    



 ?>
