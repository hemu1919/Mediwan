
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
  <script>
function signinf()
{
var hr1 = new XMLHttpRequest();
var url1 = "signin.php";
var fn=document.getElementById("usrname").value;
var fn1=document.getElementById("psw").value;
var vars1 = "po="+fn;
vars1 += "&po1=" + fn1;
hr1.open("POST",url1,true);
hr1.setRequestHeader("Content-type","application/x-www-form-urlencoded");
hr1.onreadystatechange = function() {
if(hr1.readyState == 4 && hr1.status == 200) {
var return_data1 = hr1.responseText;
if(return_data1 == 9)
{
window.open("dashboard.php","_self");
}
else
{
document.getElementById("status").innerHTML=return_data1;
document.getElementById("usrname").value="";
document.getElementById("psw").value="";
}
}
}
hr1.send(vars1);
}
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<script>
$(document).ready( function(){
$('#but').load('next.php');
});
</script>
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
        <li><a href="signup.html" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:15px 20px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:10px 20px;">
          <form role="form">
		  <div id="status"></div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
              <button type="button" onclick="signinf();" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</nav>
  
<div class="container">
  <h3><span><img src="icons/logo.png"/>At Mediwan.com,</span></h3>
    <div class="row">
    <div class="col-sm-4"><img src="icons/prescription.png" class="img-responsive" alt="shopicon" style="float:right;"/>
	</div>
    <div class="col-sm-8">
	<p style="margin-top:2.8vh;" id="fp">Upload picture of Prescription to order medicines.</p>
	</div>
  </div>
   <div class="row">
    <div class="col-sm-4"><img src="icons/discount.png" class="img-responsive" alt="shopicon" style="float:right;"/>
	</div>
    <div class="col-sm-8">
	<p style="margin-top:2.8vh;" id="fp">Avail 10-15% Discount on every order.</p>
	</div>
  </div>
   <div class="row">
    <div class="col-sm-4"><img src="icons/home.png" class="img-responsive" alt="shopicon" style="float:right;"/>
	</div>
    <div class="col-sm-8">
	<p style="margin-top:2.8vh;" id="fp">Free Home Delivery within 12 working hours.</p>
	</div>
  </div>
   <div class="row">
    <div class="col-sm-4"><img src="icons/shop3.png" class="img-responsive" alt="shopicon" style="float:right;"/>
	</div>
    <div class="col-sm-8">
	<p style="margin-top:2.8vh;" id="fp">Get Medicines from your near by Stores.</p>
	</div>
  </div>
  </div>
  <div class="wrapper" id="but">

</div>

</body>
</html>
