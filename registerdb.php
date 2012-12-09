<?php
 //initiate all variable
 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
 $email = $_POST["emailid"];
 $password = $_POST["password"];
 $address = $_POST["address"];
 $postcode = $_POST["postcode"];
 $phone = $_POST["phone"];
 $office = $_POST["office"];
 
 $con = mysql_connect("localhost","root","gampang");
 if (!$con)
 { die('Could not connect: ' . mysql_error());   }

 $selecteddb = mysql_select_db('dbbancho', $con);
 if (!$selecteddb) 
 { die ('Can\'t use foo : ' . mysql_error()); }
 
 // check whether user click submit or register
 if (isset($_POST['logmein']))
 { // validate user
   $checklogin = mysql_query("select emailid from security where pwd = '$password'");
   $row = mysql_fetch_assoc($checklogin);
   if ($row['emailid'] == $email)
   { echo "Welcome $email \n";
     echo "<br />";
   }
   
   // jump to appropriate page
   mysql_free_result($checklogin);
   header("Location: checkout.php?email=$email");
 }
 else if (isset($_POST['registerme']))
 { // write user to db and jump to page appropriate
   // insert user
   mysql_query("INSERT INTO customers VALUES('$fname', '$lname', '$address', '$phone', '$email', '$phone', '$postcode','','')") or die(mysql_error());
   header("Location: checkout.php?email=$email");
 }
 
?>