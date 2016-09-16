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
function signinfs()
{
var hr1 = new XMLHttpRequest();
var url1 = "shoploginback.php";
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
window.open("secondnew.html","_self");
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
  </nav>
  <div class="container">
  <form role="form">
            <div class="form-group">
			<div id="status"></div>
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
			<div class="col-sm-10">
        <button type="button" class="btn btn-default" onclick="signinfs()">Submit</button>
    </div>
			</form>
			</div>
			</body>
			</html>