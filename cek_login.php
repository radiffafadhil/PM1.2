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


	// LOGIN USER
	if (isset($_POST['login'])) {
		// $nama = mysqli_real_escape_string($db, $_POST['nama']);
		// $email = mysqli_real_escape_string($db, $_POST['email']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		// $telp = mysqli_real_escape_string($db, $_POST['telp']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// if (empty($nama)) {
		// 	array_push($errors, "Nama is required");
		// }
		// if (empty($email)) {
		// 	array_push($errors, "Email is required");
		// }
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		// if (empty($telp)) {
		// 	array_push($errors, "Telp is required");
		// }
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
			$data = mysqli_fetch_assoc($results);

			if ($data['level']=="admin"){
				$_SESSION['username'] = $username;
				$_SESSION['level'] = "admin";
				header("location:dashboard_admin.php");


			}else if($data['level']=="user"){
				$_SESSION['username'] = $username;
				$_SESSION['level'] = "user";
				header("location:dashboard_user.php");
			}

			else {
				array_push($errors, "Wrong username/password combination");
			}

			// if (mysqli_num_rows($results) == 1) {
			// 	// $_SESSION['nama'] = $nama;
			// 	// $_SESSION['email'] = $email;
			// 	$_SESSION['username'] = $username;
			// 	// $_SESSION['telp'] = $telp;
			// 	$_SESSION['success'] = "You are now logged in";
			// 	//header('location: index.php');
			// }else {
			// 	array_push($errors, "salah kombinasi");
			// }
		}
	}

?>
