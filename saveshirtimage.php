<?php
 // this script will save base64 shirt image to database
 // connect to database
 /*$con = mysql_connect("localhost","shikin","abc123");
 if (!$con)
 { die('Could not connect: ' . mysql_error());   }

 $selecteddb = mysql_select_db('dbbancho', $con);
 if (!$db_selected) 
 { die ('Can\'t use foo : ' . mysql_error()); }
 
 //insert user
 INSERT INTO `customers` (`FirstName`, `LastName`, `Address`, `PhoneNo`, `Email Address`, `HomePhone`, `PostCode`) VALUES
 ($fname, $lname, $address, $phone, $email, $phone, $postcode);
 (1, 'nurashikin', 'mohd khair', 'putrajaya', '0134599786', 'shikin@gmail.com', '', 62000, 1, '2012-11-30'),

 mysql_query($insert);*/
 
 //calling shirtdata
 $filename = 'images/drawing/cart/image.txt';
 $shirtdata = $_POST["shirtdata"];

 if (is_writable($filename)) 
 { if (!$handle = fopen($filename, 'w')) 
   { echo "Cannot open file ($filename)";
     exit;
   }

   // Write $somecontent to our opened file.
   if (fwrite($handle, $shirtdata) === FALSE) 
   { echo "Cannot write to file ($filename)";
     exit;
   }

   fclose($handle);
 } 
 else 
 { echo "The file $filename is not writable"; }
?>