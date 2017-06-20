<?php 
/* This is for deleting a house record from the database */

require '../includes/db.connection.php';

$id = $_POST['houseID'];

$sql = "DELETE FROM houses WHERE houseID = {$id}";

mysqli_query($sql);

header("location:../admin.php");

if()