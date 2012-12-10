<!DOCTYPE html>
<html>
 <head>
  <?php
    // If your page calls session_start() be sure to include jcart.php first
    include_once('jcart/jcart.php');
    session_start();
    
    $con = mysql_connect("localhost","root","gampang");
    if (!$con)
    { die('Could not connect: ' . mysql_error());   }

    $selecteddb = mysql_select_db("dbbancho2", $con);
    if (!$selecteddb) 
    { die ('Can\'t use foo : ' . mysql_error()); }
       
  ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Fashion Hut</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
  <script type="text/javascript" src="script/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="jcart/js/jcart.js"></script>
  <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/style.css" />
  <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/jcart.css" />
  <style type="text/css">
   <!--
    body,td,th { color: #000; }
    body 
    { background-color: #CF9;
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
      <li><a href="catalog.php">Corporate shirt</a></li>
      <li><a href="catalog.php">Round Neck shirt</a></li>
      <li><a href="catalog.php">Collar shirt</a></li>
      <li><a href="catalog.php">Long sleeves shirt</a></li>
      <li><a href="catalog.php">V-neck shirt</a></li>
     </ul>
     <?php
       if (isset($_SESSSION['email']))
       { print "<form method='post' action='registerdb.php'>\n";
         print "Welcome $emailid\n";
         echo "<br /><input type='submit' name='logout' value='logout' />\n";
         print "</form>\n";
       }
       else
       { print "<form method='post' action='registerdb.php'>\n";
         print " <br />\n";
         print " <p>\n";
         print "  <h6>Enter your credential</h6>\n";
         print "  <input type='text' name='emailid' placeholder='Type your email address' />\n";
         print "  <input type='password' name='password' placeholder='Type your password'  />\n";
         print "  <input type='submit' value='Sign in' />||\n";
         print "  <a href='register.php'><u>Register</u></a>\n";
         print " </p>\n";
         print "</form>\n";
       }
    ?>
    </div>
    <div id="seasonal">
     <div class="inner">
      <h2>Fashion Seasonal</h2>
      <h3>Welcome to Custom myShirt</h3>
      <p align="left" ><em>We will provide you a very nice shirt according to<strong> what you want</strong>,<strong> what you like,</strong></em><em><strong>what you ask for</strong> and<strong> what you prefer too</strong>. Design yourself and get yours.</em></p>
      <p align="right"><a href="#"><strong>	more</strong></a></p>          
     </div>
    </div>
    <div id="collection">
     <div class="inner">
      <div align = "center" id="minigal">  
       <div><img src="images/10128824-petite-pride-tshirt.jpg" align="center" width="96" height="114" alt="Pic" /></div>
       <div><img src="images/Jersi.jpg" width="96" height="114" alt="Pic" /></div> 
       <div><img src="images/Harley Davidson White Long Sleeve Shirt Corporate Style.jpg" width="96" height="114" alt="Pic" /></div>
       <div></div>
      </div>
      <h2 align="justify">New Collection with great prices and discounts!!</h2>
      <h2 align="justify"><br /><br /></h2>
     </div>
    </div>
    <div class="clear"> </div>
    <div id="seas">
     <div id="seas-one">
      <div id="gallery2">
       <ul>
        <li class="gwomen"><img src="images/Aaron-OCC-T-Shirt-Final.jpg" alt="" width="195" height="146" /></li>
       </ul>
      </div>
     </div>
     <div id="seas-two">
      <ul>
       <li class="gwomen"><img src="images/designbyhumans-men-tee-shirt-apparel-clothing-fashion-women-design-red.png" alt="" width="232" height="147" /></li>
      </ul>
     </div>
     <div id="seas-three">
      <ul>
       <li class="gwomen"><img src="images/MFA-Womens-Lines-T-Shirt.jpg" alt="" width="203" height="148" /></li>
      </ul>
     </div>
     <div class="clear"> </div>
    </div>
   </div>
   <div id="copyright"><p>Copyright &copy; 2012. Bancho Group Sdn.Bhd</p></div>
  </div>
 </body>
</html>