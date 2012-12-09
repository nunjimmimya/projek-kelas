<?php
 // jCart v1.3
 // http://conceptlogic.com/jcart/
 // This file demonstrates a basic checkout page
 // If your page calls session_start() be sure to include jcart.php first
 include_once('jcart/jcart.php');

 session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Custom myShirt</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/style.css" />
  <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/jcart.css" />
  <style type="text/css">
   <!--
   body,td,th {
	color: #000;
   }
   body {
	background-color: #CF9;
	background-image: url(images/backg.jpg);
	background-repeat: no-repeat;
   }
   -->
  </style>
 </head>
 <body>
  <div id="wrapper">
   <div id="header">
    <div id="logo"><h1>Custom myShirt</h1></div><br />
    <div id="cartbar">
     <?php
       // if user already login
       $emailid = $_GET["email"];
       if(isset($emailid))
        print "<h5>Welcome $emailid</h5>\n";
       else
       { // ask user to register
         print "<h6><u>Please login to finish your order</u></h6><br />\n";
         print "<form method='post' action='registerdb.php'>\n";
         print " <p>\n";
         print " <h6>Enter your credential</h6>\n";
         print " <input type='text' name='emailid' placeholder='Type your email address' /><br />\n";
         print " <input type='password' name='password' placeholder='Type your password'  /><br />\n";
         print " <input type='submit' name='logmein' value='Sign in' />||\n";
         print " <a href='register.php'><u>Register</u></a>\n";
         print " </p>\n";
         print "</form>\n";
      }
     ?>
    </div>
   </div>
   <div id="content"><br />
    <div align="center"><h2><u>Custom myShirt Checkout Cart</u></h2></div>
    <div id="jcart"><?php $jcart->display_cart(); ?></div>
    <div align="center"><input type="button" value="&larr; Continue shopping" onclick="location.href='catalog.php'" /></div>
    <?php
     //echo '<pre>';
     //var_dump($_SESSION['jcart']);
     //echo '</pre>';
     
    ?>
    <div class="clear"></div>
    <div id="copyright"><p>Copyright &copy; 2012. Bancho Group Sdn.Bhd</p></div>
   </div>
  </div>
  <script type="text/javascript" src="script/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="jcart/js/jcart.min.js"></script>
 </body>
</html>