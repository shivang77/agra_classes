<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agra Classes || Institute Page</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
<link rel="stylesheet" href="css/register.css" type="text/css">
<link rel="stylesheet" href="css/a.css" type="text/css">
<style>

	input
	{
		margin-top:12px;
	}

	textarea
	{
		margin-top:12px;
	}
	
</style>

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
    
    <div class="col-lg-4 col-md-4 col-sm-4"><br>
    <div class="thumbnail b">
     <center><h2 class="media-heading" style="color:cadetblue;">Institute Details</h2></center> <hr>
		<form action="institute.php" method="post" enctype="multipart/form-data">
        <input class="form-control" type="text" placeholder="Institute Name" name="institute_name">
    		<input class="form-control" type="text" placeholder="Category1." name="category1">
            <input class="form-control" type="text" placeholder="Category2" name="category2">
            <input class="form-control" type="text" placeholder="City" name="city">
            <input class="form-control" type="text" placeholder="Location" name="location">
            <input class="form-control" type="text" placeholder="Contact no. 1" name="contact1">
            <input class="form-control" type="text" placeholder="Contact no. 2(optional)" name="contact2">
            <input class="form-control" type="text" placeholder="year of Establishment" name="year">
            <textarea rows="4" cols="47" name="description" placeholder="Give a Description Here" class="form-control"></textarea>
<input class="form-control" type="file"  placeholder="image" name="img"/>
            
            <input type="submit" value="Submit" name="submit" class="btn btn-danger btn-block"/>    
    	</form><br>
    </div><!-- thumbnail-->
    </div><!-- div 2-->
    
    	<div class="col-lg-4 col-md-4 col-sm-4">
    	</div><!-- div 3-->
        
</div><!-- row-->
</div><!-- container-->
<?php
}
else
{
echo "Login First!!!!";
include('login.php');
}
?>
<!-- php   code   start -->
<?php 
if(isset($_POST['submit']))
{
include_once('db.php');
$mobile=$_SESSION['main'];
$institute_name=$_POST['institute_name'];
$category1=$_POST['category1'];
$category2=$_POST['category2'];
$city=$_POST['city'];
$location=$_POST['location'];
$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];
$year=$_POST['year'];
$description=$_POST['description'];

$n=$_FILES['img']['name'];
$t=$_FILES['img']['type'];
$s=$_FILES['img']['size'];
$tn=$_FILES['img']['tmp_name'];
mkdir("details/".$institute_name);
	$strarr=explode(".",$n);
	$ext=$strarr[1];
$imgurl="details/$institute_name/pic$institute_name.$ext";

	move_uploaded_file($tn,$imgurl);
	

$q="insert into institute values('$institute_name','$category1','$category2','$city','$location','$contact1','$contact2','$year','$description','$imgurl','$mobile')";
$res=mysqli_query($con,$q);
if($res)
{	
header('location:profile.php');
}
else
{
echo "unsuccessful!!!!!!";

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