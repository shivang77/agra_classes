<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="60" >
        <title>Agra Classes || Register Here</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
<link rel="stylesheet" href="css/register.css" type="text/css">
<link rel="stylesheet" href="css/a.css" type="text/css">
<style>

a{
	color:#060;
	font-weight:bold;
}

</style>

  </head>
  <body>
<!-------------------Navbar start --------------------- -->  
<div class="container-fluid">

<div class="row a">
		<div class="col-lg-4 col-md-4 col-sm-4">
    	</div> <!-- div 1-->
    
    <div class="col-lg-4 col-md-4 col-sm-4"><br><br>
    <div class="thumbnail b">
     <center><h2 class="media-heading" style="color:cadetblue;">Register Here</h2></center> <hr>
		<form action="register.php" method="post">
        <input class="form-control" type="text" placeholder="Name" name="name"><br>
    		<input class="form-control" type="text" placeholder="Mobile No." name="mobile"><br>
            <input class="form-control" type="text" placeholder="email" name="email"><br>
        	<input class="form-control" placeholder="Password" type="password" name="password"><br>
            
            <input type="submit" value="Submit" name="submit" class="btn btn-danger btn-block"/>    
    	</form><br>
    </div><!-- thumbnail-->
    </div><!-- div 2-->
    
    	<div class="col-lg-4 col-md-4 col-sm-4">
    	</div><!-- div 3-->
        
</div><!-- row-->

</div><!-- container-->

<!-- php   code   start -->
<?php 
if(isset($_POST['submit']))
{
include_once('db.php');
session_start();

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$_SESSION['main']=$mobile;
$email=$_POST['email'];
$password=$_POST['password'];
$q="insert into register values('$name','$mobile','$email','$password')";
$res=mysqli_query($con,$q);
if($res)
{	
header('location:choice.php');
}
else
{
echo "<center><h4>mobile number already registered!!!!<h4><center><br>";
}
}


?>


<!-- php   code   end>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery-1.12.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="file:///C|/Users/dell 1/Desktop/Bootstarp/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  </body>
</html>