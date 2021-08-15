<?php
session_start();
$host = "localhost"; /* Host name */
$user = "id15468226_root"; /* User */
$password = "Ashen@123456"; /* Password */
$dbname = "id15468226_pos"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


?>