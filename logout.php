<?php
session_start();
session_unset();
session_destroy();
?>


<br>

<?php
header('location:index.php');
?>