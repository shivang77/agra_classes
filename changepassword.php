<html>
<head>
<title>
edit
</title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agra Classes || Institute Page</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
<link rel="stylesheet" href="css/register.css" type="text/css">
<link rel="stylesheet" href="css/a.css" type="text/css">
</head>
<body>
<div class="container-fluid">

<div class="row a" style="height:350px;">
		<div class="col-lg-4 col-md-4 col-sm-4">
    	</div> <!-- div 1-->
    
    <div class="col-lg-4 col-md-4 col-sm-4"><br> <br><br><br>
    <div class="thumbnail b">
<?php
session_start();
$mobile=$_SESSION['main'];
        

?>
       
		<form action="changepassword.php" method="post"><br>
            <input class="form-control" type="password" placeholder="old password" name="password"><br>
            <input class="form-control" type="password" placeholder="new password" name="newpassword"><br>
           <input type="submit" value="Change" name="change" class="btn btn-danger btn-block"/>    
    	</form><br>
    </div><!-- thumbnail-->
    </div><!-- div 2-->
    
    	<div class="col-lg-4 col-md-4 col-sm-4">
    	</div><!-- div 3-->
        
</div><!-- row-->
</div><!-- container-->
</body>
</html>
<?php
if(isset($_POST['change']))
{
$password=$_POST['password'];
$newpassword=$_POST['newpassword'];
$q="select * from register where mobile='$mobile' and password='$password'";
include('db.php');
$res=mysqli_query($con,$q);
if(mysqli_num_rows($res)>0)
{
$q1="update register set password='$newpassword' where mobile='$mobile' ";
$res1=mysqli_query($con,$q1);
               if($res1>0)
                     {
                          header('location:logout.php');
                     }
             
}
else
{
echo "Invalid Password!!!!!!";
}

}
?>