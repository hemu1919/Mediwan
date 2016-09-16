<?php
$con = mysqli_connect("localhost","root","7569110193ram","mediwan");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  session_start();
  if(!isset($_SESSION['table']))
{
}
else
{
$table = $_SESSION['table'];
$name = $_SESSION['userName'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <style>
  .wrapper{
  text-align:center;
  margin-top:5vh;
  margin-bottom:4vh;
  }
body{
}
#fp{
font-family: 'Open Sans', sans-serif;
margin-top:3.5vh;
font-size:24px;
}
.row{
margin-top:2vh;
}
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Mediwan.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" ><span class="glyphicon glyphicon-user"></span><?php echo   $name ?></a></li>
        <li><a href="destroy.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
      </ul>
    </div>
  </div>
  </nav>
  <?php
  
  ?>
</body>