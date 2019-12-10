<?php
	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$server = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"], 1);
	//Connect to mysql server
	$con = mysqli_connect($server, $username, $password,$db);
	if(!$con) {
		die('Failed to connect to server: ' . mysqli_connect_error());
	}
    date_default_timezone_set("Asia/Kolkata");
    mysqli_query($con,"SET NAMES utf8");
?>
