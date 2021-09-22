<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "file";

	$con = mysqli_connect($servername, $username, $password, $database);

	if (!$con) {
		 die("<script>alert('Connection Failed.')</script>");	
	}

	$base_url = "http://localhost/File%20Upload%20&%20Download%20Using%20PHP%20&%20MySQL/source%20file/"; 

 ?>