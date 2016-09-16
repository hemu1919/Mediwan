<?php
$con = mysqli_connect("localhost","root","7569110193ram","mediwan");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  session_start();
  if(!isset($_SESSION['shopid']))
{
}
else
{
$shopsid = $_SESSION['shopid'];
}
?>
<?php
if(isset($_POST['po']) && isset($_POST['po1']))
{
$cemail = $_POST['po'];
$pass = $_POST['po1'];
$sql = "SELECT count(*) FROM medsuppliers WHERE(
susername='".$cemail."' and spassword='".$pass."')";
# SELECT count(*) FROM users WHERE(
# email='$cemail' and password='$pass');
$qury = mysqli_query($con,$sql);
$result = mysqli_fetch_array($qury);
if($result[0]>0)
{
$dd1 = "select shopid from medsuppliers where susername='$cemail'";
if ($result = mysqli_query($con, $dd1))
$row = mysqli_fetch_array($result);
$dd = $row[0];
$_SESSION['shopid'] = $dd;
echo 9;
}
else
{
echo "   Please check your email and password";
}
}

?>