<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        font-family: "Times New Roman", Times, serif;
      padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
        h1 {
  color: maroon;
  margin-left: 40px;
} 
body {
    background: linear-gradient(to bottom, #33ccff 50%, #ff99cc 140%);
      background-repeat: repeat;
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
* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
}
</style>
</head>

<body>
  
 <form method="post" action="search.php" class="example">
    <input type="text" name="search"  placeholder="Search..">
    <button type="submit"><i class="fa fa-search"></i></button>
    </form>


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

   $search1 = $_POST['search'];

  $query="SELECT * FROM users1 where fname='$search1'or lname='$search1'";
 

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