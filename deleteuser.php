<?php
session_start();
?><html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="admin/assets/images/logo1.png" rel="icon">
  <link href="admin/assets/images/logo1.png" rel="apple-touch-icon">
    <title>Delete User</title>
<style>
.button {
  background-color:#FF0000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
table{
border-style:solid;

border-width:3px;

border-color:pink;}
td,tr{
            border:1px solid black;
            font-size: 25px;
    font-family: "Times New Roman", Times, serif;
      padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}  
    th {
  font-family: Arial, Helvetica, cursive;
}
        h1 {
  color: maroon;
  margin-left: 40px;
} 
body {
    background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}

</style>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
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

<body >
<div>
<center>
<h1>Details Table</h1>
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

 

  $query="SELECT * FROM users1";
 

$result = mysqli_query($con,$query);

 if($_SESSION['uname'] == "admin"){

echo "<table border='1' id='customers'>

<tr>

<th>Id</th>

<th>Firstname</th>

<th>Lastname</th>

<th>Email</th>
<th>Operation</th>
</tr>";

 

while($row = mysqli_fetch_assoc($result))

  {

  echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['fname'] . "</td>";

  echo "<td>" . $row['lname'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";
 echo "<td>"."<a href='profile.php?rn=$row[id]' class='button'>Delete"." "."<a href='delete1.php?rn=$row[id]&fn=$row[fname]&ln=$row[lname]&em=$row[email]' class='button'>Update"."</td>";
  echo "</tr>";

  }

echo "</table>";

 }

mysqli_close($con);

?>
</center>
</div>
</body>

</html>