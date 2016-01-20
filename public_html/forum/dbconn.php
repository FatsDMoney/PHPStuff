<?php
	$host = 'localhost';
	$username = 'tyler';
	$password = 'password';
	$dbname = 'tyler';
	$sabre = '~KanyeWest';
	$con = mysqli_connect($host, $username, $password);

	if($con){

	if (mysqli_select_db($con,$dbname)) {
		}
		else {
			echo "Error could not connect to DB";
		}
	} else {
		echo "Failure to conect";
	}
?>