<?php
if(isset($_POST['delete']))
{
$mobile=$_POST['mobile'];
$q="delete from institute where mobile=$mobile";
include("db.php");

$res=mysqli_query($con,$q);
               if($res)
              {
              $q1="delete from register where mobile=$mobile";
              
  
              $res1=mysqli_query($con,$q1);
             if($res1>0)
             {
                 
                 header('location:logout.php');
             }
                   else 
                   {
                       echo "soory";
                   }
             }
            else
                {
                    echo "unable to delete Record";
                }
}
?>