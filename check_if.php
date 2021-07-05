<?php
function check_if_added_to_cart($item_id)
{

  $con=mysqli_connect("localhost","root","","ecommerce");
  include "common.php";
  $select_query="SELECT * FROM users_stores WHERE id='$user_id' AND stores_id ='$item_id' and status='Added to cart'";
  $select_registration=mysqli_query($con,$select_query);
  $rows=mysqli_num_rows($select_registration);
  if($rows>=1)
  {
      return 1;
  }
  else{
      return 0;
  }
}
?>