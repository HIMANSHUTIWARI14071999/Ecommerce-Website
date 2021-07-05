<?php
 include "common.php";
 ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <style>
                            
  .header{
     background-color:#000;   
     color:#fff;
     border-color: #080808;
     min-height: 50px;
     border: 1px solid transparent;
     
  }
     .style { 
         padding-top:100px;
           }
           .footer{
               padding-top:550px;
           } 
            
        </style>
     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Navbar in Bootstrap</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.html">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Setting</a></li>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            
        <div class="conatiner style">
            <center>
            <table class="tabel tabel-responsive">
                <tbody>
                    <tr>
                        <th>ItemNumber </th><th>ItemName </th><th>Price </th><th> </th>
                    </tr> 
                    <tr>
                        <th> </th>
                        <th> </th>
                        <th> </th>
                        <th> </th>
                    </tr>
                    <tr>
                       
                        <th>   </th>
                        <th>total </th>
                        <th>Rs.0 </th>
                        <th><a href="sucess.php"><button class="btn btn-primary btn-block">ConfirmOrder</button></a></th>
                    </tr>
                    
                </tbody>
            </table>
            </center>
        </div>
                
                 
                
       
   <div class="footer">      
       
           
     
       <div class="header">
         <center>
        <p> Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000. </p> 
         </center>
        </div>
             
         
        
            </div>
       
      
        
        
    </body>
    
</html>
