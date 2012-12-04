<?php
 //upload an image file
 if ($_FILES["file"]["error"] > 0)
 { echo "Error: " . $_FILES["file"]["error"] . "<br>"; }
 else
 { echo "Upload: " . $_FILES["file"]["name"] . "<br>";
   echo "Type: " . $_FILES["file"]["type"] . "<br>";
   echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
   echo "Stored in: " . $_FILES["file"]["tmp_name"];
 }

 //must only jpg, jpeg, gif or png to upload image
 $allowedExts = array("jpg", "jpeg", "gif", "png");
 $extension = end(explode(".", $_FILES["file"]["name"]));
 if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || 
      ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/pjpeg")) 
      && in_array($extension, $allowedExts))
 { if ($_FILES["file"]["error"] > 0)
   { echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
     echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
   }
   else
   { echo "Upload: " . $_FILES["file"]["name"] . "<br>";
     echo "Type: " . $_FILES["file"]["type"] . "<br>";
     echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
     echo "Stored in: " . $_FILES["file"]["tmp_name"];
     
     //storing image to images/drawing/cart
     if (file_exists("upload/" . $_FILES["file"]["name"]))
     { echo $_FILES["file"]["name"] . " already exists. "; }
     else
     { move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
       echo "Stored in: " . "images/drawing/cart/" . $_FILES["file"]["name"];
     }
   }
 }
 else
 { echo "Invalid file"; }
?> 