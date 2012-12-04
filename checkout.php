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
  <script type="text/javascript">
   function newPage()
   { if(getCheckedValue(document.forms['custom'].elements['rdDesign'])==0)
	 { var pageURL="invoice.html";
	   var left = (screen.width/2)-(400/2);
	   var top = (screen.height/2)-(400/2);
	   var targetWin = window.open (pageURL,'height=770,width=810,toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, top='+top+', left='+left);
	 }
	 else
	 { var pageURL="register.html";
	   var left = (screen.width/2)-(400/2);
	   var top = (screen.height/2)-(400/2);
	   var targetWin = window.open (pageURL,'height=770,width=810,toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, top='+top+', left='+left);
	 }
   }
   
   function getCheckedValue(radioObj) 
   { if(!radioObj)
	  return "";
	 var radioLength = radioObj.length;
	 if(radioLength == undefined)
	  if(radioObj.checked)
	   return radioObj.value;
	  else
	   return "";
	  for(var i = 0; i < radioLength; i++) 
	  { if(radioObj[i].checked) 
	    { return radioObj[i].value; }
	  }
	  return "";
   }
  </script>
 </head>
 <body>
  <form name="custom" method="post" action="<?php $_SELF; ?>">
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
      <div class="jcart">
       Billing/shipping information<br /><hr><br />
       <div align="left"><input type="radio" name="rdDesign" id="return" value="0" />Returning Customer<br />
       <input type="radio" name="rdDesign" id="new" value="1" />New Customer<br /><br /> </div>
       <input type="button" value="Proceed" onclick="newPage()"/>
      </div>
     </div>
     <div class="clear"></div>
     <p><br />
      Copyright &copy; 2012. Bancho Group Sdn.Bhd</p>
   </div>
  </form>
  <script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
  <script type="text/javascript" src="jcart/js/jcart.min.js"></script>
 </body>
</html>