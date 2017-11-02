<?php 
session_unset();
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="default.css">
</head>
<body>

<header>
<?php
include('Header.html');
?>
</header>

<div class "row" style ="padding:20px">
<div class="panel panel-default" style="height:80%; width:95%; padding:20px">
<div class="row" style ="padding:20px">
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
<div class="panel panel-default">
<div class="panel-body">
<?php
include('AboutUsBody.html');
?>
</div>
</div>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<div class="panel panel-default">
<div class="panel-heading">Login</div>
<div class="panel-body">
<?php
include('Login.php');
?>
</div>
</div>
</div>
</div>
<div class = "row" style="padding:10px">
<div class="panel panel-default">
<?php
    require_once('SQL.php');
    $sql = new SQL;
    $sql->Execute("DoctorRanking",array());
    $sql->GetTable();
    $sql->CloseConnection();
?>
</div>
</div>
</div>
</div>
</body>
</html>