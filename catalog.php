<!DOCTYPE html>
<html>
 <head>
  <?php
   // If your page calls session_start() be sure to include jcart.php first
   include_once('jcart/jcart.php');
    
    // if user already login
    if(isset($_SESSION['name']))
     $name = $_SESSION['name'];
    else
     $name = "Guest of Honor";
     
  ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Custom myShirt</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/jcart.css" />
  <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/style.css" />
  <script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
  <script type="text/javascript" src="jcart/js/jcart.min.js"></script>
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
    <div id="logo"><h1>Custom myShirt</h1></div>
    <div id="cartbar"><div id="jcart"><?php $jcart->display_cart();?></div></div>
   </div>
   <div id="body">
    <div id="categories">
     <h2>Catalog</h2>
     <ul>
      <li><a href="#">Corporate shirt</a></li>
      <li><a href="#">Round Neck shirt</a></li>
      <li><a href="#">Collar shirt</a></li>
      <li><a href="#">Long sleeves shirt</a></li>
      <li><a href="#">V-neck shirt</a></li>
     </ul>
     <?php
       /*$passid = $_POST["password"];
       if ((!is_null($passid)) || ($passid == ''))
       { $checklogin = mysql_query("select emailid from masterlist where passid = '$passid'");
         while($row = mysql_fetch_array($checklogin))
         { print_r($row);
           if ($row['emailid'] == $_POST["emailid"])
           { echo "Welcome $emailid\n";
             echo "<br />";
           }
           else
           {*/ print "<form method='post' action=''>\n";
             print " <br />\n";
             print " <p>\n";
             print "  <h6>Enter your credential</h6>\n";
             print "  <input type='text' name='emailid' placeholder='Type your email address' />\n";
             print "  <input type='password' name='password' placeholder='Type your password'  />\n";
             print "  <input type='submit' value='Sign in' />||\n";
             print "  <a href='register.php'><u>Register</u></a>\n";
             print " </p>\n";
             print "</form>\n";
           /*}
         }
       }*/
    ?>     
    </div>
    <div id="seasonal">
     <div class="inner"><h2>Click image in our collection</h2></div>
    </div>
     <form method="post" action="colorme.php">
     <div id="catalog">
      <ul><li>Ready Made: Corporate Shirt</li></ul>
      <ul id="contentholder">
       <li>
        <div><input type="image" src="images/corporate_tshirt1.png" name="shirt_type1" value="corporate_shirt1" width="200" alt="Corporate Shirt Type 1" /></div>
        <div id="harga">Corporate Shirt Type 1<br />RM80</div>
        <input type="hidden" name="shirt_type" value="" />
       </li>
       <li>
        <div><input type="image" src="images/corporate_tshirt3.png" name="shirt_type2" value="corporate_shirt2" width="200" alt="Corporate Shirt Type 2" /></div>
        <div id="harga">Corporate Shirt Type 2<br />RM80</div>
       </li>
      </ul>
      <div class="clear"></div>
      <hr />
      <ul><li>Customizable: Shirt</li></ul>
      <ul id="contentholder">
       <li>
        <div><input type="image" src="images/roundneck_long.png" name="shirt_type3"  width="200" /></div>
        <div id="harga">Round Neck Long Sleeve<br />RM20</div>
       </li>
       <li>
        <div><input type="image" src="images/roundneck_short.png" name="shirt_type4"  width="200" height="112" /></div>
        <div id="harga">Round Neck Short Sleeve<br />RM18</div>
       </li>
      <!-- <li>
        <div><input type="image" src="images/colarneck_long.png" name="shirt_type5"  width="200" height="112" /></div>
        <div id="harga">Round Neck Short Sleeve<br />RM22</div>
       </li> -->
      </ul>
     </div>
     </form>
     <div id="seas">
      <div class="clear"><div id="gallery2"></div></div>
     </div>
   </div>
  <div id="copyright"><p>Copyright &copy; 2012. Bancho Group Sdn.Bhd</p></div>
  <script type="text/javascript" src="script/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
   $(document).ready(function() 
   { $('input[name=shirt_type1]').click(function() 
     { $('input[name=shirt_type]').val(1); });
     
     $('input[name=shirt_type2]').click(function() 
     { $('input[name=shirt_type]').val(2); });

     $('input[name=shirt_type3]').click(function() 
     { $('input[name=shirt_type]').val(3); });

     $('input[name=shirt_type4]').click(function() 
     { $('input[name=shirt_type]').val(4); });

     //$('input[name=shirt_type5]').click(function() 
     //{ $('input[name=shirt_type]').val(5); });
   });
  </script>
 </body>
</html>