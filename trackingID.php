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
  <style type="text/css">
   #table-3 
   { border: 1px solid #DFDFDF;
	 background-color: #F9F9F9;
	 width: 100%;
	 -moz-border-radius: 3px;
	 -webkit-border-radius: 3px;
	 border-radius: 3px;
	 font-family: Arial,"Bitstream Vera Sans",Helvetica,Verdana,sans-serif;
	 color: #333;
   }
   
   #table-3 td, #table-3 th 
   { border-top-color: white;
	 border-bottom: 1px solid #DFDFDF;
	 color: #555;
   }

   #table-3 th 
   { text-shadow: rgba(255, 255, 255, 0.796875) 0px 1px 0px;
	 font-family: Georgia,"Times New Roman","Bitstream Charter",Times,serif;
	 font-weight: normal;
	 padding: 7px 7px 8px;
	 text-align: left;
	 line-height: 1.3em;
	 font-size: 14px;
   }

   #table-3 td 
   { font-size: 12px;
	 padding: 4px 7px 2px;
	 vertical-align: top;
   }
  </style>
 </head>
 <body>
  <div id="wrapper">
   <div id="header">
    <div id="logo"><h1>Custom myShirt</h1></div>
    <div id="cartbar"><div id="jcart"><?php $jcart->display_cart();?></div></div>
   </div>
   <div class="clear"> </div>
   <h1>Payment Status</h1>
    <p>Your transactions is successfully. This is a detail about your purchase.</p>
    <table id ="table-3">
     <thead>
      <tr>
       <th>Tracking No:</th>
        <td>
         <?php 
          //check whether tx from paypal is available
          if(isset($_GET['tx']))
          { // write tx to all that appropriate
            $query = "update image set transactionid='" .$_GET['tx']. "' where transactionid=''";
            mysql_query($query) or die(mysql_error());
            print $_GET['tx']. "\n";
            // Further processing
            // orderid is transacionid
            $query = "update orderdetails set orderid='" .$_GET['tx']. "' where orderid=''";
            mysql_query($query) or die(mysql_error());
           
            // store addon details
            // addonid is transactionid
            $query = "update addon set addonid='" .$_GET['tx']. "' where addonid=''";
            mysql_query($query) or die(mysql_error());
          }        
         ?>
        </td>
      </tr>
      <tr>
       <th>Name:</th>
       <td>
        <?php 
         // get first and last name from db
         $checklogin = mysql_query("select firstname, lastname from customers where `email address` = 'tinbang@gmail.com'");
         $row = mysql_fetch_assoc($checklogin);
         print $row['firstname']. " " .$row['lastname']. "\n";
        ?>
       </td>
      </tr>
      <?php
       // list buyed image item from store
       $query = "select addimageid, image from image where transactionid = '" .$_GET['tx']. "'";
       $buyed = mysql_query ($query) or die (mysql_error());
       while ($row = mysql_fetch_array($buyed))
       { print "<tr><th>" .($row[addimageid] + 1). "</th><td><img width='300' src='$row[image]' /></td>\n";
         // list buyed text item from store
         $query = "select addtext from addon where addonid= '" .$_GET['tx']. "' and addtext != '' and shirtkey = '" .($row[addimageid]). "'";
         $text = mysql_query ($query) or die (mysql_error());
         print "<td><h5><u>Text</u></h5><br />\n";
         while ($row = mysql_fetch_array($text))
         { print "<div align='left'>- $row[addtext]</h6></div>\n"; }
         print "</td>\n";
         print "</tr>";
       }
       //print "<td>RM 2000</td></tr>\n";
      ?>
     </thead>
    </table>
    <br />
    Thank you for Shopping with us
    <br /><br />
        **please use this tracking no for reference.<br />
      <div id="copyright"><p>Copyright &copy; 2012. Bancho Group Sdn.Bhd</p></div>
      </div>
    </div>
  </div>
</body>
</html>
