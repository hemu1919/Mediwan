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
$tabl = $_SESSION['table'];
}
?>
<?php
if(isset($_POST['po']) && isset($_POST['po1']))
{
$cemail = $_POST['po'];
$pass = $_POST['po1'];
$sql = "SELECT count(*) FROM medusers WHERE(
email='".$cemail."' and password='".$pass."')";
# SELECT count(*) FROM users WHERE(
# email='$cemail' and password='$pass');
$qury = mysqli_query($con,$sql);
$result = mysqli_fetch_array($qury);
if($result[0]>0)
{
$dd1 = "select id from medusers where email='$cemail'";
if ($result = mysqli_query($con, $dd1))
$row = mysqli_fetch_array($result);
$dd = $row[0];
$fn1 = "select username from medusers where email='$cemail'";
if ($result = mysqli_query($con, $fn1))
$row = mysqli_fetch_array($result);
$fn = $row[0];
$rep1 = $fn.$dd;
$_SESSION['table'] = $rep1;
$_SESSION['idu'] = $dd;
$_SESSION['userName'] = $fn;
echo 9;
}
else
{
echo "   Please check your email and password";
}
}

?>