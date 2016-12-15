<?php
if(isset($_POST['find']))
{

	if(empty($_POST['location']))
	 {
	$course=$_POST['course'];
    $q="select * from institute where category2='$course' or category1='$course'";
	 }

	else if(empty($_POST['course']))
	 {
	$location=$_POST['location'];
     $q="select * from institute where location='$location'";  
	 }
	 

	else
	 {
        $location=$_POST['location'];
	$course=$_POST['course'];
         $q="select * from institute where location='$location' and category1='$course' or category2='$course'";
    }


    ?>
<html>
<head>
<meta name="viewport" content=" width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<link href="css/bootstrap.css" rel="stylesheet"> 
<link href="css/bootstrap.theme.min.css" rel="stylesheet"> 
<link href="css/bootstrap.theme.css" rel="stylesheet"> 

<style>
body
{
background-color:orange;
}
thead
{
border-top: 0;
    background-color: dimgrey;
    color: seashell;
}
tbody{

}
table
{
border:solid slaty 2px;
}
</style>
</head>
<body>
<div class="container">
<div class="row">

<div class="col-md-12 col-lg-12 col-sm-12">
<div class="table-responsive">
<table class="table table-hover">
<caption><center><h2>List of Institutes</h2></center></caption><br>
<thead>
<br>
<tr>
<th>Institute</th>
<th>Category1</th>
<th>Category2</th>
<th> Location</th>
<th>Contact1</th>
<th>Contact2</th>
<th>Founded</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<?php
    include("db.php");
   
$res=mysqli_query($con,$q);
  
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{
$institute_name=$row['institute_name'];
$category1=$row['category1'];
$category2=$row['category2'];
$location=$row['location'];
$contact1=$row['contact1'];
$contact2=$row['contact2'];
$year=$row['year'];
$description=$row['description'];
echo "<tr>";
echo "<td>".$institute_name."</td>";
echo "<td>".$category1."</td>";
echo "<td>".$category2."</td>";
echo "<td>".$location."</td>";
echo "<td>".$contact1."</td>";
echo "<td>".$contact2."</td>";
echo "<td>".$year."</td>";
echo "<td>".$description."</td>";
echo "</tr>";

}
}
?>    
 </tbody>   
    </table>
</div>
</div>

</div>
</div>
</body>
</html>

<?php

}



?>