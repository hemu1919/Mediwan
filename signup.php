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
p{
font-family: 'Open Sans', sans-serif;
margin-top:3.5vh;
font-size:24px;
}
.row{
margin-top:2vh;
}
* {
  box-sizing: border-box;
}

.con {
  width: 80%;
  max-width: 1000px;
  height: 80px;
  margin: 40px auto; 
  position: relative;
}

.one > div {
  height: 50px;
}

.ma1 {
  background: #0fadc0; 
  position: relative;
  display: block;
  width: 90%;
  left: 50%;
  top: 0;
  padding: 5px;
  margin-left: -45%;
  z-index: 10;
}

.ma1 > div {
  border: 1px dashed #fff;
  border-color: rgba(255, 255, 255, 0.5);
  height: 40px;
}

.bk {
 background: #1199a9;
 position: absolute;
 width: 8%;
 top: 12px;
}

.bk.l {
 left: 0;
}

.bk.r {
 right: 0;
}

.skew {
  position: absolute;
  background: #0c7582;
  width: 3%;
  top: 6px;
  z-index: 5;
}

.skew.l {
  left: 5%;
  transform: skew(00deg,20deg);
}

.skew.r {
  right: 5%;
  transform: skew(00deg,-20deg);
}

.bk.l > div {
  left: -30px;
}

.bk.r > div {
  right: -30px;
}

.arrow {
  height: 25px !important;
  position: absolute;
  z-index: 2;
	width: 0; 
	height: 0; 
}

.arrow.top {
  top: 0px;
  border-top: 0px solid transparent;
	border-bottom: 25px solid transparent; 	
	border-right: 30px solid #1199a9; 
}

.arrow.bottom {
  top: 25px;
  border-top: 25px solid transparent;
	border-bottom:0px solid transparent; 	
	border-right: 30px solid #1199a9; 
}

.r .bottom {
  border-top: 25px solid transparent;
	border-bottom: 0px solid transparent; 	
	border-left: 30px solid #1199a9; 
  border-right: none;
}

.r .top {
  border-bottom: 25px solid transparent;
	border-top: 0px solid transparent; 	
	border-left: 30px solid #1199a9; 
  border-right: none;
}

@media all and (max-width: 1020px) {
  .skew.l {
    left: 5%;
    transform: skew(00deg,25deg);
  }

  .skew.r {
    right: 5%;
    transform: skew(00deg,-25deg);
  }
}

@media all and (max-width: 680px) {
  .skew.l {
    left: 5%;
    transform: skew(00deg,30deg);
  }

  .skew.r {
    right: 5%;
    transform: skew(00deg,-30deg);
  }
}

@media all and (max-width: 460px) {
  .skew.l {
    left: 5%;
    transform: skew(00deg,40deg);
  }
  .skew.r {
    right: 5%;
    transform: skew(00deg,-40deg);
  }
}

  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
function signupf()
{
var hr1 = new XMLHttpRequest();
var url1 = "signupback.php";
var fn=document.getElementById("usr").value;
var fn1=document.getElementById("email").value;
var fn2=document.getElementById("pwd").value;
var fn3=document.getElementById("pwd1").value;
var fn4=document.getElementById("mob").value;
var fn5=document.getElementById("add").value;
var fn6=document.getElementById("lan").value;
var vars1 = "po="+fn;
vars1 += "&po1=" + fn1  + "&po2=" + fn2 + "&po3=" + fn3 + "&po4=" + fn4 + "&po5=" + fn5 + "&po6=" + fn6;
hr1.open("POST",url1,true);
hr1.setRequestHeader("Content-type","application/x-www-form-urlencoded");
hr1.onreadystatechange = function() {
if(hr1.readyState == 4 && hr1.status == 200) {
var return_data1 = hr1.responseText;
if(return_data1 == 9)
{
document.getElementById("usr").value="";
document.getElementById("email").value="";
document.getElementById("pwd").value="";
document.getElementById("pwd1").value="";
document.getElementById("mob").value="";
document.getElementById("add").value="";
document.getElementById("lan").value="";
document.getElementById("status1").innerHTML="Welcome to Mediwan.com";
}
else
{
document.getElementById("status").innerHTML=return_data1;
document.getElementById("usr").value="";
document.getElementById("email").value="";
document.getElementById("pwd").value="";
document.getElementById("pwd1").value="";
document.getElementById("mob").value="";
document.getElementById("add").value="";
document.getElementById("lan").value="";
}
}
}
hr1.send(vars1);
}
</script>
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
        <li><a href="#" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<!-- RIBBON 1 -->
<div class="con one">

  <div class="bk l">
    <div class="arrow top"></div> 
    <div class="arrow bottom"></div>
  </div>

  <div class="skew l"></div>

  <div class="ma1">
    <div><p style="text-align:center;">SignUp</p></div>   
  </div>

  <div class="skew r"></div>
  
  <div class="bk r">
    <div class="arrow top"></div> 
    <div class="arrow bottom"></div>
  </div>

</div>
  <div id="status" class="container" style="color:red;text-align:center;"></div>
	<div id="status1" class="container" style="color:green;text-align:center;"></div>
  <form class="form-horizontal" role="form">
   <div class="form-group">
      <label class="control-label col-sm-2" for="usr"><span class="glyphicon glyphicon-user"></span>  UserName:</label>
	   <div class="col-sm-10">
      <input type="text" class="form-control" id="usr" name="username" placeholder="Enter you Username" required/>
	  </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" ><span class="glyphicon glyphicon-envelope"></span>  Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required/>
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><span class="glyphicon glyphicon-eye-open"></span>  Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="password1" placeholder="Enter password" required/>
      </div>
    </div>
	   <div class="form-group">
      <label class="control-label col-sm-2" for="pwd1"><span class="glyphicon glyphicon-eye-open"></span>  Re-EnterPassword:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="password2" id="pwd1" placeholder="Re-Enter password" requried/>
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="phone"><span class="glyphicon glyphicon-phone"></span>  Mobile:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  name="mobile" id="mob" placeholder="Enter MobileNumber" required/>
      </div>
    </div>  <div class="form-group">
      <label class="control-label col-sm-2" for="address"><span class="glyphicon glyphicon-send"></span>  Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="address" id="add" placeholder="Enter your address" requried/>
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="landmark"><span class="glyphicon glyphicon-map-marker"></span>  Landmark:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="landmark" id="lan" placeholder="Enter any Landmark">
      </div>
    </div>   
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-default" onclick="signupf()">Submit</button>
    </div>
  </form>
  <div style="margin-top:5vh;"></div>
</div>
</body>
</html>
