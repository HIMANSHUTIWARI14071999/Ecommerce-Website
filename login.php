<?php
  require "common.php";
  
  ?>
<html>
    <head>
        <style>
        .header{
     background-color:#000;   
     color:#fff;
     border-color: #080808;
     min-height: 50px;
     border: 1px solid transparent;
  }
  .row_styling{
     margin-top:200px;
     
     
      
      
      padding-bottom:165px;
     
      
      
  }
  </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
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
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav> 
        
        <div class="container">
            <div class="row row_styling">
                <div class="col-xs-4 col-sm-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4> LOGIN </h4>
                         </div>
                        <div class="panel-body">
                            <div class="text-warning">
                                <p> Login to make a purchase<br></p>
                                <form  method="post" action="login_submit.php">
                                <input type="text" class="form-control" placeholder="E-mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                                <input type="password" class="form-control" placeholder="Password" name="password" ><br>
                                <button class="btn btn-primary"> Login </button>
                                </form>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <p> Don't have an account? <a> Register </a> </p>
                        
                        
                            
                    </div>
                </div>
                
            </div>
                
        </div>
        </div>
        
            
        <footer>
           
            
       <div class="header">
         <center>
        <p> Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000. </p> 
         </center>
        </div>
         
         </footer>
            
       
        
        
    </body>
</html>