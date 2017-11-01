<?php 
session_unset();
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login</title>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  .navbar-default .navbar-nav>li>a {
	  font-size: 20px;
    color: blue;
    text-decoration: underline;
}
.navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
	  color: blue;
    text-decoration: underline;
}
.divider {
    position: absolute;
    right: -1px;
    top: 10px;
    font-size: 25px;
}
  </style>
</head>
<body>
<header>
<nav class="navbar navbar-default" style="width:95%;">
  <div class="container-fluid">
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Doctors & office</a><span class="divider">|</span</li>		
        <li><a href="#">Hospitals</a><span class="divider">|</span</li>
		<li><a href="#">Service</a><span class="divider">|</span</li>
		<li><a href="#">Events and classes</a><span class="divider">|</span</li>
		<li><a href="#">Carrers</a><span class="divider">|</span</li>
		<li><a href="#">Carrer Education</a><span class="divider">|</span</li>
		<li><a href="#">Patients</a><span class="divider">|</span</li>
		<li><a href="#">Why Us?</a></li>
		
		</ul>
		</div>
		</div>
		</nav>
</header>
<div class "row" style ="padding:20px">
<div class="panel panel-default" style="height:80%; width:95%; padding:20px">
<div class="row" style ="padding:20px">
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
<div class="panel panel-default">
<div class="panel-body">
<h4 style="padding-top:10px;font-weight:bold;text-decoration:underline">Why Choose Us For Your Medical Needs?</h4>

					<p style="text-align:justify;">Our training programs are carefully and scientifically designed to bring out the innovation and creativity through out-of-the-box approach while giving the child an opportunity to explore Science and Technology. These programs help students to understand science and mathematics concepts in a fun learning manner. Once the student understand the applications of the academic concepts, learning interest increases which further results in higher marks or grades in school academics.</p> <br>
</div>
</div>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<div class="panel panel-default">
<div class="panel-heading">Login</div>
<div class="panel-body">
<form role="form" style="vertical-align: middle;" action="LandingPage.php" method="post">
  <div class="form-group">
    <label for="email">Midas-id:</label>
    <input type="text" class="form-control" id="midasid" name="midasid">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox">Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  <a href="#" class="btn btn-info" role="button">Register</a>
</form>
</div>
</div>
</div>
</div>
<div class = "row" style="padding:10px">
<div class="panel panel-default">
table contents here
</div>
</div>
</div>
</div>
</body>
</html>