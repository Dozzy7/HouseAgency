<?php
   require '../includes/db.connection.php';

   $image;
   $description;
   $price;
   $rooms;
   $listing;
   $street;
   $city;

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $query = "SELECT * FROM houses WHERE hid = ";
      
      // best practice to make sure if the data has slashes they are included
      if(! get_magic_quotes_gpc()){
         $image = addslashes($_POST['image']);
         $description = addslashes($_POST['description']);
         $price = addslashes($_POST['price']);
         $rooms = addslashes($_POST['rooms']); 
         $street = addslashes($_POST['street']);
         $city = addslashes($_POST['city']); 
         $listing = addslashes($_POST['listing']);  
      }else{
         $image = ($_POST['image']);
         $description = ($_POST['description']);
         $price = ($_POST['price']);
         $rooms = ($_POST['rooms']); 
         $listing = ($_POST['listing']); 
      }

      $sql = "INSERT INTO houses VALUES(null,'$image','$description','$price','$rooms','$listing','$street','$city' ,NOW())";
      $retval = mysqli_query($conn,$sql);
      if(! $retval){
          die('Could not enter data: ' . mysql_error());
      }else{
       header("location:../admin_view_houses.php");
      }
     
   }
?>
