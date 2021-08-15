
<?php
$host = "localhost"; /* Host name */
$user = "id15468226_root"; /* User */
$password = "Ashen@123456"; /* Password */
$dbname = "id15468226_pos"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$sqll="SELECT id,fname,lname,email from user1";
$result=$con->query($sqll);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 
while($row=$result->fetch_assoc()){

    echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td></tr>";
}

echo "</table>";


    
    ?>
</body>
</html>