<?php
$con = mysqli_connect("localhost","root","7569110193ram","mediwan");
?>
<?php
session_start(); # starts the session
session_unset(); #removes all the variables in the session
session_destroy();
if(!$_SESSION)
header("location:index.php");
?>