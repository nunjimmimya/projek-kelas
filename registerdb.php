<?php
 //initiate all variable
 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
 $email = $_POST["email"];
 $password = $_POST["password"];
 $address = $_POST["address"];
 $postcode = $_POST["postcode"];
 $phone = $_POST["phone"];
 $office = $_POST["office"];
 
 $con = mysql_connect("localhost","root","gampang");
 if (!$con)
 { die('Could not connect: ' . mysql_error());   }

 $selecteddb = mysql_select_db('dbbancho', $con);
 if (!$db_selected) 
 { die ('Can\'t use foo : ' . mysql_error()); }
 
 //insert user
 $insert = "INSERT INTO `customers` (`FirstName`, `LastName`, `Address`, `PhoneNo`, `Email Address`, `HomePhone`, `PostCode`) VALUES
 ('$fname', '$lname', '$address', '$phone', '$email', '$phone', '$postcode')";

 mysql_query($insert);
 header("Location: checkout.php?userid=$email");
?>