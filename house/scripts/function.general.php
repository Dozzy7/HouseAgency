<?php
function sanitize($data,$data2){
	return mysqli_escape_string($data,$data2);
}
?>