<?php
   require '../includes/db.connection.php';
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      // Check if record exists
      $query = "SELECT id FROM users WHERE username = '$myusername' and upassword = '$mypassword' ";
      $result = mysqli_query($conn,$query);
      
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $active = $row['username'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row	
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: houses.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }