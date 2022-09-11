<!DOCTYPE html>
<html>
<head><meta http-equiv="refresh" content="3"><link rel="stylesheet" type="text/css" href="style.css" media="screen"/><link rel="apple-touch-icon" sizes="180x180" href="img/fav-icons/apple-touch-icon.png"/><link rel="icon" type="image/png" sizes="32x32" href="img/fav-icons/favicon-32x32.png"/><link rel="icon" type="image/png" sizes="16x16" href="img/fav-icons/favicon-16x16.png"/><meta name="theme-color" content="#6e7833"><title> F.E.M.S </title></head>
<body><br><h1><font color="orange">FUEL EFFICIENCY MANAGEMENT SYSTEM</font></h1><h2><font color="purple">Fuel Consumption Data</font></h2>
<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fems_db";
	$con = mysqli_connect($server, $username, $password, $dbname) or die("unable to connect");

	$sql = "SELECT * FROM gasdata";
	$sql1 = "SELECT * FROM fueldata";

	echo '  <table cellspacing = "5" cellpadding="5"><tr><th>ID</th><th>BREATHER LEVEL</th><th>DATE</th><th>TIME</th></tr>';
	$result1=mysqli_query($con, $sql);
	if ($result1->num_rows > 0) {
	    while($row = $result1->fetch_assoc()) { 
	    	$row_id1 = $row["id"];
	      	$row_blevel = $row["blevel"];
	      	$row_date1 = $row["date"];
	      	$row_time1 = $row["time"];
	        echo '	<tr><td>' . $row_id1 . '</td><td>' . $row_blevel . '</td><td>' . $row_date1 . '</td><td>' . $row_time1 . '</td></tr>';
		}
	}

	echo '  <table cellspacing = "5" cellpadding="5"><tr><th>ID</th><th>FUEL TANK LEVEL</th><th>DATE</th><th>TIME</th></tr>';
	$result=mysqli_query($con, $sql1);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) { 
	    	$row_id = $row["id"];
	      	$row_flevel = $row["flevel"];
	      	$row_date = $row["date"];
	      	$row_time = $row["time"];
	        echo '	<tr><td>' . $row_id . '</td><td>' . $row_flevel . '</td><td>' . $row_date . '</td><td>' . $row_time . '</td></tr>';
		}
	}
?>
</table></body></html></body></html>