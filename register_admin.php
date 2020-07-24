<?php 

//no display error
//error_reporting(E_ERROR | E_WARNING | E_PARSE);


	session_start();

	include 'config.php';


	// variable declaration
	$nama = "";
	$email    = "";
	$username = "";
	$telp = "";
	$level = "";
	$errors = array(); 
	$_SESSION['success'] = "";


	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$nama = mysqli_real_escape_string($db, $_POST['nama']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$telp = mysqli_real_escape_string($db, $_POST['telp']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($nama)) { array_push($errors, "nama is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($telp)) { array_push($errors, "telp is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO user (nama, email, username, telp, password, level) 
					  VALUES( '$nama', '$email', '$username', '$telp', '$password', 'admin')";
			mysqli_query($db, $query);

			$_SESSION['nama'] = $nama;
			$_SESSION['email'] = $email;
			$_SESSION['username'] = $username;
			$_SESSION['telp'] = $telp;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

?>
