<?php
error_reporting(0);
//edit this array
$contacts = array(
      array(
     "name"=>"Yash Agarwal",
     "email"=> "yashag2605@gmail.com",
     "contact" => "9027173689"
  ),

   array(
     "name" => "Nivi",
     "email" => "nivi@gmail.com",
        "Contact"=> "9000123451"
    ),

    array(
     "name"=> "Shriya", 
     "email"=> "shriya12@gmail.com",
      "Contact"=> "9876543289"
   ),

    array(
    "name" => "Meghna",
    "email" => "meghna21@gmail.com",
     "Contact"=> "9897898767"
  ) 
    );

echo "<ul>\n";
print_r($contacts);
 

?>
