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
 $referer =  $_SERVER['HTTP_REFERER'];
 
 if (!$con)
 { die('Could not connect: ' . mysql_error());   }

 $selecteddb = mysql_select_db('dbbancho2', $con);
 if (!$selecteddb) 
 { die ('Can\'t use foo : ' . mysql_error()); }
 
 // check whether user click submit or register
 if (isset($_POST['logmein']))
 { // validate user
   $checklogin = mysql_query("select emailid from security where pwd = '$password'");
   $row = mysql_fetch_assoc($checklogin);
   if ($row['emailid'] == $email)
   { // write emailid into session
     $_SESSION['email'] = $email;
   }
   
   // jump to appropriate page
   mysql_close($con);
   header("Location: $referer");
 }
 else if (isset($_POST['registerme']))
 { // write user to db and jump to page appropriate
   // insert user
   mysql_query("INSERT INTO customers VALUES('$fname', '$lname', '$address', '$phone', '$email', '$phone', '$postcode','','')") or die(mysql_error());
   mysql_close($con);
   header("Location: $referer");
 }
 else if (isset($_POST['logout']))
 { // delete user session
   unset($_SESSION['email']);
   mysql_close($con);
   header("Location: $referer");
 }
?>