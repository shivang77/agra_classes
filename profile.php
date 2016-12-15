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
  </head>
  <body>
<!-------------------Navbar start --------------------- -->  
<div class="container">
<?php
session_start();
if(isset($_SESSION['main']))
{
$mobile=$_SESSION['main'];
$q="select * from institute where mobile='$mobile'";
include('db.php');
$res=mysqli_query($con,$q);
if(mysqli_num_rows($res)>0)
{
	$row=mysqli_fetch_assoc($res);
	$institute_name=$row['institute_name'];
	$category1=$row['category1'];
	$category2=$row['category2'];
	$city=$row['city'];
	$location=$row['location'];
    $contact1=$row['contact1'];
	$contact2=$row['contact2'];
    $year=$row['year'];
    $description=$row['description'];
    $image=$row['imgurl'];
	
    
}

?>

<!-----Display code ---->

<div class="container">
    <div class="row">
        <div class="page-header"> 
   <center><h1><?php echo "$institute_name"; ?>
       </h1> </center>
</div> 
    </div>
	<div class="row">
    	<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3">
        <div class="thumbnail">
        	<div>
                <div class="thumbnail">
                	<img src=<?php echo "$image"; ?> </img>
                </div><hr>
            </div><br>
        <h2> <?php echo "$category1"; ?></h2>
        <h2> <?php echo "$category2"; ?></h2>
        <h3> <?php echo "$city"; ?></h3>
        <h3> <?php echo "$location"; ?></h3><br>
        <h4> <?php echo "$contact1"; ?></h4>
        <h4> <?php echo "$contact2"; ?></h4>
        <h4> <?php echo "$year"; ?></h4> 
        
        </div>
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-6 col-xm-6">
            <div class="thumbnail">
                
                 <div class="media-body"> <br>
            <center><h2 class="media-heading">Description</h2></center> <hr>
           <h4> <?php echo "$description"; ?></h4>
         </div> 
            
            </div>
        </div>
         
        <div class="col-lg-3 col-md-3 col-sm-3 col-xm-3">
            <div class="thumbnail"><br>
            	<a  class="btn btn-info btn-block btn-lg"  role="button" href="edit.php"> Edit</a><br>
                <a  class="btn btn-success btn-block btn-lg"  role="button" href="changepassword.php"> Change Password</a><br>
                <a  class="btn btn-danger btn-block btn-lg"  role="button" href="del.php"> Delete</a><br>
                <a  class="btn btn-warning btn-block btn-lg"  role="button" href="logout.php"> Logout</a><br>
            </div>
        </div>
    
    </div>
</div>


<!---- Display code end ------->

<?php
}
else
{
header('location:login.php');
}
 
?>
</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery-1.12.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="file:///C|/Users/dell 1/Desktop/Bootstarp/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  </body>
</html>