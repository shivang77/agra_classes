<html>
<head>
<title>
delete
</title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agra Classes</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
<link rel="stylesheet" href="css/a.css" type="text/css">
</head>
<body>
    <?php
    session_start();
    $mobile=$_SESSION['main'];
    ?>



<div class="container-fluid">

<div class="row a">
		<div class="col-lg-4 col-md-4 col-sm-4">
    	</div> <!-- div 1-->
    
    <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="thumbnail b"><br>
		<form action="delprocess.php" method="post">
    		<input class="form-control" type="text"  value="<?php echo $mobile; ?>" name="mobile" readonly><br>
        	<br>
            <input type="submit" value="Delete" name="delete" class="btn btn-danger btn-block"/>    
    	</form>
    </div><!-- thumbnail-->
    </div><!-- div 2-->
    
    	<div class="col-lg-4 col-md-4 col-sm-4">
    	</div><!-- div 3-->
        
</div><!-- row-->

</div><!-- container-->




</body>
</html>

