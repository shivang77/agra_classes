<?php
if(isset($_POST['search']))
{
    
$mobile=$_POST['mobile'];
$q="select * from institute where mobile='$mobile'";
include("db.php");

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
                                                        $imgurl=$row['imgurl'];
                                                        ?>
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

                            <div class="row a">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    </div> <!-- div 1-->

                                <div class="col-lg-4 col-md-4 col-sm-4"><br>
                                <div class="thumbnail b"><br>
                                <center><h2 class="media-heading" style="color:cadetblue;">Update</h2></center> <hr>
                                    <form action="search.php" method="post">
                                        <input class="form-control" type="text" placeholder="institute name" value="<?php echo $institute_name; ?>" name="institute_name"><br>
                                        <input class="form-control" type="text" placeholder="category1" value="<?php echo $category1; ?>" name="category1"><br>
                                        <input class="form-control" type="text" placeholder="category2"  value="<?php echo $category2; ?>"  name="category2"><br>
                                        <input class="form-control" type="text" placeholder="city"  value="<?php echo $city; ?>" name="city"><br>
                                        <input class="form-control" type="text"  placeholder="location"  value="<?php echo $location; ?>" name="location"><br>
                                        <input class="form-control" type="text"  placeholder="contact1"  value="<?php echo $contact1; ?>" name="contact1"><br>
                                        <input class="form-control" type="text"  placeholder="contact2"  value="<?php echo $contact2; ?>" name="contact2"><br>
                                        <input class="form-control" type="text"  placeholder="year"  value="<?php echo $year; ?>" name="year"><br>
                                        <input class="form-control" type="text" value="<?php echo $mobile; ?>" name="mobile" readonly><br>
                                        <input class="form-control" type="text" value="<?php echo $description; ?>" name="description"><br>
                                       <input type="submit" value="Update" name="update" class="btn btn-danger btn-block"/>    
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

                            }

                            else
                            {
                            echo "<h3><a href='login.php'>Home Page</a></h3>";
                            }
}



if(isset($_POST['update']))
{
                        $mobile=$_POST['mobile'];
                    include("db.php");
$institute_name=$_POST['institute_name'];
$category1=$_POST['category1'];
$category2=$_POST['category2'];
$city=$_POST['city'];
$location=$_POST['location'];
$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];
$year=$_POST['year'];
$description=$_POST['description'];
$q="update institute set institute_name='$institute_name',category1='$category1',category2='$category2',city='$city',location='$location',contact1=$contact1,contact2=$contact2,year=$year,description='$description' where mobile=$mobile";
$res1=mysqli_query($con,$q);
    
                            if($res1)
                            {	
                            header('location:logout.php');
                            }
                            else
                            {
                            echo 'unsuccessful!!!!';	
                            }
}


?>