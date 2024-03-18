<?php
$sname = "localhost";
$Uname= 'J';
$password ="123";
$db_name ="guestlogin";

$conn = mysqli_connect($sname, $Uname, $password, $db_name);
if (!$conn) {
  echo "Connection failed!";
}
?>