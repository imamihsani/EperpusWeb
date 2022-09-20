<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'db_perpusabrar';
	$conn = mysqli_connect($host, $user, $pass, $db);
	if($conn){
		//echo"Koneksi Bisa";
	}

	mysqli_select_db($conn, $db);
?>