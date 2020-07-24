<?php 

//no display error
//error_reporting(E_ERROR | E_WARNING | E_PARSE);


	session_start();
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'pm12');
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
