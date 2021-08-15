<?php
  session_start();
  
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="admin/assets/images/logo1.png" rel="icon">
  <link href="admin/assets/images/logo1.png" rel="apple-touch-icon">
<style>

table{
border-style:solid;

border-width:3px;

border-color:pink;}
td,tr{
            border:1px solid black;
            font-size: 30px;}  
    
        h1 {
  color: maroon;
  margin-left: 40px;
} 
div {
  background-image: url('pro.jpg');
    background-repeat: no-repeat;

}
</style>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>

<body>

<center>
<h1>Profile Details</h1>
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

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }




  $query="SELECT * FROM users1 where fname='".$_SESSION['uname']."' limit 1";
 

$result = mysqli_query($con,$query);

 

echo "<table border='2' id='customers'>

<tr>

<th>Id</th>

<th>Firstname</th>

<th>Lastname</th>

<th>Email</th>

</tr>";

 

while($row = mysqli_fetch_assoc($result))

  {

  echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['fname'] . "</td>";

  echo "<td>" . $row['lname'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($con);

?>
</center>

</body>

</html>