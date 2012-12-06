<?php
 // jCart v1.3
 // http://conceptlogic.com/jcart/
 // This file demonstrates a basic checkout page
 // If your page calls session_start() be sure to include jcart.php first
 include_once('jcart/jcart.php');

 session_start();

 // if user already login
 if(isset($_SESSION['name']))
  $name = $_SESSION['name'];
 else
  $name = "Guest of Honor";
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
  <div id="wrapper">
   <div id="header">
    <div id="logo"><h1>Custom myShirt</h1></div>
   </div>
   <div id="content"><br />
    <div align="center"><h2><u>Custom myShirt Checkout Cart</u></h2></div>
    <div id="jcart"><?php $jcart->display_cart(); ?></div>
    <div align="center"><input type="button" value="&larr; Continue shopping" onclick="location.href='catalog.html'" /></div>
    <?php
     //echo '<pre>';
     //var_dump($_SESSION['jcart']);
     //echo '</pre>';
    ?>
    <div id="billing" class="jcart">
     <form name="custom" method="post" action="">
      Billing/shipping information<br /><hr><br />
      <div align="left"><input type="radio" name="rdDesign" id="return" value="0" />Returning Customer<br />
      <input type="radio" name="rdDesign" id="new" value="1" />New Customer<br /><br /> </div>
      <input type="button" value="Proceed" onclick="newPage()"/>
     </div>
    </form> 
   </div>
   <div class="clear"></div>
   <div id="copyright"><p>Copyright &copy; 2012. Bancho Group Sdn.Bhd</p></div>
  </div>
  <script type="text/javascript" src="script/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="jcart/js/jcart.min.js"></script>
  <script type="text/javascript" src="script/querystring-0.9.0-min.js".</script>
  <script type="text/javascript">
   //$(document).ready(function()
   //{// var message = $.QueryString("userid"),
	//	 message = ( !message )? "null":message;
		 
	 //hide button paypal if no user are registered
//	 if (message == '')
//	  $('#jcart-paypal-checkout').hide();
  // });
  </script>
 </body>
</html>