<?php
  require "common.php";
  ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <style>
                            
  footer{
     background-color:#000;   
     color:#fff;
     border-color: #080808;
     min-height: 50px;
     border: 1px solid transparent;
  }
     .style { 
         padding-top:100px;
           }
            
        </style>
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Navbar in Bootstrap</title>
    </head>
    <body>
        <?php
          require "header.php";
          require "check_if.php";
          ?>
        <div class="container">
            <div class="style">
        <div class="jumbotron">
            <h1> Welcome to our Lifestyle Store! </h1>
            <p> We have best cameras,watches and shirts for you.No need to hunt around.We have all in one place.</p>
        </div>
            </div>
        </div>
       <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <img src="images\5.jpg" alt="cameras">
                     <center>
                         <div class="caption">
                         <h3>Canon EOS </h3>
                         <p> Price:Rs.36000.00 </p>
                         </div>
                     </center>
                               <?php 
                               if (!isset($_SESSION['email'])) 
                               { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php                           
                                 } else {
                                         if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             } else {
                                                 ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                    }   
                                    } 
                                    ?>
                         
                        
                          
                     
                </div>
                    
            </div>
                 <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     
                     <img src="images\2.jpg" alt="cameras">
                     <center>
                     <div class="caption">
                     
                         <h3>Sony DSLR </h3>
                         <p> Price:Rs.40000.00 </p>
                         </div>
                     </center>
                     
                   
                     
                         <?php 
                               if (!isset($_SESSION['email'])) 
                               { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php                           
                                 } else {
                                         if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             } else {
                                                 ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                    }   
                                    } 
                                    ?>
                 
                        
                </div>
                    
            </div>
               <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     
                     <img src="images\3.jpg" alt="cameras">
                     <center>
                         <div class="caption">
                         <h3>Sony DSLR </h3>
                         <p> Price:Rs.50000.00 </p>
                         
                         
                         </div>
                         
                     </center>
                    <?php 
                               if (!isset($_SESSION['email'])) 
                               { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php                           
                                 } else {
                                         if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             } else {
                                                 ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                    }   
                                    } 
                                    ?>
                     
                         
                </div>
                    
            </div>
                       <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     
                     <img src="images\4.jpg" alt="cameras">
                     <center>
                         <div class="caption">
                         <h3> Olympus DSLR </h3>
                         <p> Price:Rs.80000.00 </p>
                         </div>
                     </center>
                         <?php 
                               if (!isset($_SESSION['email'])) 
                               { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php                           
                                 } else {
                                         if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             } else {
                                                 ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                    }   
                                    } 
                                    ?>
                      
                     
                         
                </div>
                    
            </div>
                </div>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="images\9.jpg" alt="watches">
                            <center>
                            <div class="caption">
                                <h3> Titan Model#301 </h3>
                                <p> price:Rs.13000.00</p>
                            </div>
                            </center>
                                <?php 
                               if (!isset($_SESSION['email'])) 
                               { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php                           
                                 } else {
                                         if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             } else {
                                                 ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                    }   
                                    } 
                                    ?>
                            
                            
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="images\10.jpg" alt="watches">
                            <center>
                            <div class="caption">
                                <h3> Titan Model#201 </h3>
                                <p> price:Rs.3000.00</p>
                            </div>
                            </center>
                            <?php 
                               if (!isset($_SESSION['email'])) 
                               { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php                           
                                 } else {
                                         if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             } else {
                                                 ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                    }   
                                    } 
                                    ?>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="images\11.jpg" alt="watches">
                            <center>
                            <div class="caption">
                                <h3> HMT Milan </h3>
                                <p> price:Rs.8000.00</p>
                            </div>
                            </center>
                            <?php 
                               if (!isset($_SESSION['email'])) 
                               { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php                           
                                 } else {
                                         if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             } else {
                                                 ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                    }   
                                    } 
                                    ?>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="images\12.jpg" alt="watches">
                            <center>
                            <div class="caption">
                                <h3> Faber Luba#111 </h3>
                                <p> price:Rs.18000.00</p>
                            </div>
                            </center>
                            <?php 
                               if (!isset($_SESSION['email'])) 
                               { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php                           
                                 } else {
                                         if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             } else {
                                                 ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                    }   
                                    } 
                                    ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container">
              <div class="row">
            <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="images\8.jpg" alt="watches" style="height:170px">
                            <center>
                            <div class="caption">
                                <h3> H&w </h3>
                                <p> price:Rs.800.00</p>
                            </div>
                            </center>
                           <?php 
                               if (!isset($_SESSION['email'])) 
                               { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php                           
                                 } else {
                                         if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             } else {
                                                 ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                    }   
                                    } 
                                    ?>
                    </div>
                    </div>
                  <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="images\6.jpg" alt="watches">
                            <center>
                            <div class="caption">
                                <h3> Luis Phil </h3>
                                <p> price:Rs.1000.00</p>
                            </div>
                            </center>
                            <?php 
                               if (!isset($_SESSION['email'])) 
                               { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php                           
                                 } else {
                                         if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             } else {
                                                 ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                    }   
                                    } 
                                    ?>
                    </div>
                    </div>
                  <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="images\13.jpg" alt="watches">
                            <center>
                            <div class="caption">
                                <h3> John 20K </h3>
                                <p> price:Rs.1500.00</p>
                            </div>
                            </center>
                            <?php 
                               if (!isset($_SESSION['email'])) 
                               { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php                           
                                 } else {
                                         if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             } else {
                                                 ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                    }   
                                    } 
                                    ?>
                    </div>
                    </div>
                  <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="images\14.jpg" alt="watches">
                            <center>
                            <div class="caption">
                                <h3> Jhalsani </h3>
                                <p> price:Rs.1300.00</p>
                            </div>
                            </center>
                            <?php 
                               if (!isset($_SESSION['email'])) 
                               { ?>
                                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php                           
                                 } else {
                                         if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             } else {
                                                 ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                    }   
                                    } 
                                    ?>
                    </div>
                    </div>
              </div>
            </div>
            
                
                    
                
       
            
    
           
            
        <footer>    
            
       <div class="container">
         <center>
        <p> Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000. </p> 
         </center>
        </div>
    </footer> 
        
         
   
            
       
      
        
        
    </body>
    
</html>
