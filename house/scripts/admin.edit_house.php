<?php
   require 'includes/db.connection.php';
   $id = $_POST['houseID'];
   $image;
   $description;
   $price;
   $listing_status;

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $query = "SELECT * FROM houses WHERE hid = {$id} "
      
      // best practice to make sure if the data has slashes they are included
      if(! get_magic_quotes_gpc()){
         $image = addslashes($_POST['image']);
         $description = addslashes($_POST['description']);
         $price = addslashes($_POST['price']);
         $rooms = addslashes($_POST['rooms']); 
         $listing_status = addslashes($_POST['listing_status']); 
      }else{
         $image = ($_POST['image']);
         $description = ($_POST['description']);
         $price = ($_POST['price']);
         $rooms = ($_POST['rooms']); 
         $listing_status = ($_POST['listing_status']); 

      }

      $sql = " UPDATE houses SET himage ='$image', hdescription ='$description', hprice ='$price', hrooms ='$rooms', hlsiting_status ='$listing_status' WHERE hid ='$id' ";
      $retval = mysqli_query($db,$sql);
      if(! $retval){
          die('Could not Update data: ' . mysql_error());
      }
      header("location:../admin.php");
   }
?>