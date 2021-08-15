<?php
include("config.php");
error_reporting(0);

$id=$_GET['rn'];
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$email=$_GET['em'];
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="admin/assets/images/logo1.png" rel="icon">
  <link href="admin/assets/images/logo1.png" rel="apple-touch-icon">
    <title>Update Data</title>
    <style>
    table{

        color:while;
        border-radius:20px;

    }
    #button{
        background-color:green;
        color:white;
        height:32px;
        width:125px;
        border-radius:25px;
        font-size:16px;    }

        body{



            background:linear-gradient(red,blue);
        }
    
    </style>
</head>
<body>
    <br> <br> <br> <br >
    <form action="" method="POST">
    <table border="0" bgcolor="lightblue" align="center" cellspacing="20">
    <tr>
    <td>Id</td>
    <td><input type="text" value="<?php echo "$id";?>" name="id" required></td>
    </tr>
    <tr>
    <td>First name</td>
    <td><input type="text" value="<?php echo "$fn";?>" name="fname" required></td>
    </tr>
    <tr>
    <td>Last name</td>
    <td><input type="text" value="<?php echo "$ln";?>" name="lname" required></td>
    </tr>
    <tr>
    <td>Email</td>
    <td><input type="text" value="<?php echo "$email";?>" name="email" required></td>
    </tr>
    <tr>

    <td><input type="submit" value="update Details" name="submit"  id="button"></td>
    </tr>
    </table>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){

   
    
    $query="UPDATE users1 SET fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]' WHERE id='$_POST[id]'";
    $data=mysqli_query($con,$query);
    if($data){
    
        echo "<center><font color='black'>update  record from database</center>";
    }
    else{
        echo "<center><font color='red'>Failed to update record from database</center>";
    
    }
    }

?>