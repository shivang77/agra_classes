<?php
if(isset($_POST['recover']))
{
$mobile=$_POST['mobile'];
include_once('db.php');
$q="select * from register where mobile=$mobile";
$res=mysqli_query($con,$q);
if(mysqli_num_rows($res)>0)
{
$row=mysqli_fetch_assoc($res);
$email=$row['email'];
$to=$email;
$subject="Regarding Forgot Password";
$message="This is from Agra Classes. Please beware of hackers. Use this password to Login. Change your password after Login with this password.  <br> <br><br>Hope you are satisfied with our service.";
$retval=mail($to,$subject,$message);
if($retval=="true")
   echo "Message Sent!!!";
else 
  echo "Unable to send message.<br> Check your Internet Connection!!";
}
else
{
echo "wrong mobile no!!!!";
}
}
?>