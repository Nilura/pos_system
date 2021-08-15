<?php
include("config.php");
error_reporting(0);
$id=$_GET['rn'];
$query="DELETE FROM users1 WHERE id='$id'";
$data=mysqli_query($con,$query);
if($data){

    echo "<font color='green'>Delete  record from database";
}
else{
    echo "<font color='red'>Failed record record from database";

}


?>