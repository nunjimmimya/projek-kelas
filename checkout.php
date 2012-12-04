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
  <h2>Custom myShirt Checkout Cart</h2>
  <div id="sidebar"></div>
   <div id="content">
    <div id="jcart"><?php $jcart->display_cart();?></div>
    <input type="button" value="&larr; Continue shopping" onclick="location.href='catalog.html'" />
    <?php
     //echo '<pre>';
     //var_dump($_SESSION['jcart']);
     //echo '</pre>';
    ?>
   </div>
   <div class="clear"></div>
  </div>
  <script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
  <script type="text/javascript" src="jcart/js/jcart.min.js"></script>
 </body>
</html>