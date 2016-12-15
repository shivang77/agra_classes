<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agra Classes</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">

<link rel="stylesheet" href="css/a.css" type="text/css">
  </head>
  <body>
<!-------------------Navbar start --------------------- --> 
<?php
session_start();
if(isset($_SESSION['main']))
{
?> 
<div class="container-fluid">

<div class="row a">
		<div class="col-lg-4 col-md-4 col-sm-4">
    	</div> <!-- div 1-->
   
    <div class="col-lg-4 col-md-4 col-sm-4">
<div class="thumbnail b"><br>
<a  class="btn btn-danger btn-block btn-lg"  role="button "href="logout.php"> Logout</a><br>   <br>
<a  class="btn btn-info btn-block btn-lg" href="institute.php" role="button"> Virtual Institute</a>  

    <br></div><!-- div 2-->
    </div>
    	<div class="col-lg-4 col-md-4 col-sm-4">
    	</div><!-- div 3-->
        
</div><!-- row-->

</div><!-- container-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery-1.12.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="file:///C|/Users/dell 1/Desktop/Bootstarp/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
}
else
{
header ('location:login.php');
}
