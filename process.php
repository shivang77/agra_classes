<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agra Classes</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
<link rel="stylesheet" href="css/profile.css" type="text/css">
<link rel="stylesheet" href="css/a.css" type="text/css">
  </head>
  <body>
<!-------------------Navbar start --------------------- -->  
<?php

include("db.php");
$mobile=$_POST['mobile'];
$password=$_POST['password'];
    
$q="select * from register where mobile=$mobile and password='$password'";
$res=mysqli_query($con,$q);
if(mysqli_num_rows($res)>0)
{

$q1="select * from institute where mobile=$mobile";
$res1=mysqli_query($con,$q1);
session_start();
$_SESSION['main']=$mobile;
          if(mysqli_num_rows($res1)>0)
            {
             header('location:profile.php');
     
            }
          else
          {
            header('location:choice.php');
          }
}
else
 {
         
          echo "Invalid Username or Password";
        header('location:login.php');
         
 }

?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery-1.12.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="file:///C|/Users/dell 1/Desktop/Bootstarp/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  </body>
</html>