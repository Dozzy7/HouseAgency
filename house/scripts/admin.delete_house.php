<?php 
require '../includes/db.connection.php';

$sql = 'SELECT * FROM houses';
   mysqli_db_query($conn,'houses');
   $retval = mysqli_query($sql,$conn);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysqli_fetch_assoc($retval)) {
      echo "EMP ID :{$row['hid']}  <br> ".
         "EMP NAME : {$row['hdescription']} <br> ";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
