<?php
$con = mysqli_connect("localhost","root","7569110193ram","mediwan");
?>
<?php
$un = "";
$em = "";
$pa = "";
$pa2 = "";
$u_check = "";
$un = preg_replace('#[^A-Za-z0-9]#i','',$_POST['po']);
$em = strip_tags(@$_POST['po1']);
$pa = strip_tags(@$_POST['po2']);
$pa2 = strip_tags(@$_POST['po3']);
$mo = strip_tags(@$_POST['po4']);
$ad = strip_tags(@$_POST['po5']);
$la = strip_tags(@$_POST['po6']);
if($mo != "" && $em != "" && $pa != "" && $pa2 != ""&& $ad != ""  && $un != "" )
{
$sql = "SELECT email FROM medusers WHERE email='$em'";
if ($result=mysqli_query($con,$sql))
$check = mysqli_num_rows($result);
if($check == 0)
{
if ($pa==$pa2) 
{
if (strlen($un)>30||strlen($pa)>30)
{
echo "The maximum limit for username/firstname/lastname is 30 characters";
}
else if (strlen($pa)>30||strlen($pa)<5)
{
echo "Your password must be between 5 and 30 characters long!";
}
else
{
$sql = mysqli_query($con,"INSERT into medusers (username,email,password,mobile,landmark,address) values('$un','$em','$pa',$mo,'$la','$ad')");
$sql = "select id from medusers where email='$em'";
if ($result = mysqli_query($con, $sql))
$row = mysqli_fetch_array($result);
$dd1 = $row[0];
$rep1=$un.$dd1;
$sql = "CREATE TABLE $rep1 (
            id int(10) not null AUTO_INCREMENT,
         prescription text,
		 dtcr timestamp,
		 totalcost float,
		 paidcost float,
		 deliveredby varchar(500),
		 orderid varchar(10),
		 count int(10),
		 PRIMARY KEY (id)
		 );";
		  if (mysqli_query($con,$sql))
		  {
		 echo 9;
          }
         else
  		 {
          echo "Errorcode: " . mysqli_error($con);
         }
}
}
else
{
echo "your passwords didnot match";
}
}
else
{
echo "Email already Taken";
}
}
else
{
echo "Please fill all the fields";
}

?>