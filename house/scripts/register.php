<?php
   require '../includes/db.connection.php';
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      $myfirstname = mysqli_real_escape_string($db,$_POST['firstName']);
      $mylastname = mysqli_real_escape_string($db,$_POST['lastName']);
      $mycontactno = mysqli_real_escape_string($db,$_POST['contactNumber']);
      $myemail = mysqli_real_escape_string($db,$_POST['userEmail']);
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and upassword = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
        // User already exists
         $error = "User Already Exists";
         header("location: ../index.php#sign-up")
      }else {
         $sql = " INSERT INTO houses VALUES( null,'$myusername','$myfirstname','$mylastname','$mycontactno','$mypassword','$myemail' ";
         $retval = mysqli_query($conn,$sql);
        if(! $retval){
            die('Could not enter data: ' . mysql_error());
        }else{
            session_register("myusername");
            $_SESSION['login_user'] = $myusername;
            header("location: ../houses.php");
        }
      }

   }8i76
