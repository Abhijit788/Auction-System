<?php 
session_start(); 

if(isset($_SESSION['userid'])){
    header('Location: index.php');
}   

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        BID-MATE
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

    <?php include 'header.php';?>


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Register / Terms & Condition</li>
                    </ul>

                </div>

               
                    <div class="box">
                        <h1>Terms & Condition</h1>
                            
<h5>
<ul style="list-style-type: square;">
  <li>Registration: Users must register to use the online auction system. By registering, users agree to the terms and conditions of the website.</li>
  <br>
  <li>Bidding: Users may place bids on items up for auction. The highest bid at the close of the auction will win the item. Bids may not be retracted once placed.</li>
  <br>
  <li>Payment: The winning bidder must pay for the item within a specified time frame. Failure to pay may result in suspension or termination of the user's account.</li>
  <br>
  <li>Item description: The auction site provides a description of each item up for auction. However, the auction site is not responsible for inaccuracies or errors in the description</li>
  <br>
  <li>Seller responsibility: Sellers are responsible for accurately describing the item they are selling. They are also responsible for shipping the item to the winning bidder within a specified time frame.</li>
  <br>
  <li>Disputes: The auction site is not responsible for disputes between buyers and sellers. However, the site may provide a platform for dispute resolution.</li>
  <br>
  <li>Termination: The auction site may terminate a user's account at any time for violating the terms and conditions.</li>
  <br>
  <li>Liability: The auction site is not liable for any damages or losses incurred as a result of using the website.</li>
  <br>
  <li>Privacy: The auction site will collect and store user information in accordance with its privacy policy.</li>
  <br>
  <li>Modifications: The auction site may modify the terms and conditions at any time. Users will be notified of any changes and must agree to the new terms to continue using the site.</li>
  <br>
  <li> Governing law: The terms and conditions are governed by the laws of the jurisdiction in which the auction site is located.</li>
  <br>
  <li>Entire agreement: The terms and conditions constitute the entire agreement between the user and the auction site.</li>
  
</ul>
</h5>     
<div style="text-align: center;">
<a href="register.php"><input type="button" value="Accept"/></a>

</div>       </div>
            

            </div>
           
            <!-- /.container -->
        </div>
        <!-- /#content -->


        
    <?php include 'footer.php';?>

    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>



</body>

</html>
