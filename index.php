<?php
 require "common.php";
      
if (isset($_SESSION['email'])) 
{   
    header('location:http://localhost/new/content.php'); 
    
}
  ?>
<html>
    <head>
     
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Navbar in Bootstrap</title>
        <link rel="stylesheet" href="newcss.css">
             <style>
                 .content{
    min-height:600px;
}

.banner-image{
    padding-bottom: 60px;
    margin-bottom: 20px;
    text-align: center;
    color: #f8f8f8;
       
    background-size: cover; 
}
.inner-banner-image{
    padding-top: 12%;
    width:80%;
    margin:auto;
    padding-bottom:12px;
}
.banner-content{
    position: relative;
    padding-top: 6%;
    padding-bottom: 6%;
    overflow:hidden;
    margin-bottom: 12%;
    background-color: rgba(0, 0, 0, 0.7);     
    max-width: 660px;
    
}
.button{
    color: #fff;
    background-color: #c9302c; 
    border-color: #ac2925;
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
    padding: 10px 16px; 
    font-size: 18px;     
    border-radius: 6px; 
}

        
                           
  footer{
     background-color:#000;   
     color:#fff;
     border-color: #080808;
     min-height: 50px;
     border: 1px solid transparent;
     width:100%;
  }
        </style>
    </head>
    <body background="images\intro-bg_1.jpg">    
       <?php
        include "header.php"
       ?>
   


        <div class="content">
        <div class="banner-image">
            
            
            <div class="inner-banner-image">
             
               <center>
          
                <div class="banner-content">
                  <h1> We Sell Lifestyle </h1>
                  <p> flat 40% off on premium brands </p>
                  <a href="contentpage.html">
                    <div class="btn btn-primary btn-block">
                      Shop Now 
                    </div>
                   </a>
                        
                </div>
              </center>
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
