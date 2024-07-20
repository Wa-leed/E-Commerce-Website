<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "store";
// Create connection function
$conn = mysqli_connect($server, $user, $pass, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo "Connected with DB successfully.";
}
//mysqli_close($conn);
?>