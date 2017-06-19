 <?php
 $connect = mysqli_connect("localhost", "root", "1234", "house") or die("Error"); 

if(isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];

 $query = mysqli_query($connect, "SELECT * FROM users");

 if($username == $row['u_username'] && $password == $row['upassword'])
 {
  // User exists
  $numrows = mysqli_num_rows($connect, $query);


  if($numrows!=0)
  {


  }
  else 
  die("That user doesn't exist!");

  }
  else
  die("ERROR");

  } else {
    $username = "";
    $password = "";
  }


  ?>