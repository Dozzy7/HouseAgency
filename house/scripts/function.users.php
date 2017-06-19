<?php
//require "../database/connect.php";
function user_exists($username,$password){
	$username = sanitize($username,$password);
	return (mysqli_result(mysqli_query("SELECT count{'user_ID'} FROM 'users' WHERE 'username' = '$username'"), 0) == 1) ? true : false;
}
?>