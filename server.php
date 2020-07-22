<?php 
	session_start();

	// variable declaration
	$nama = "";
	$email    = "";
	$username = "";
	$telp = "";
	$level = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', 'kmzwa88saa', 'pm12');

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
			$query = "INSERT INTO user (nama, email, username, telp, password) 
					  VALUES( '$nama', '$email', '$username', '$telp', '$password')";
			mysqli_query($db, $query);

			$_SESSION['nama'] = $nama;
			$_SESSION['email'] = $email;
			$_SESSION['username'] = $username;
			$_SESSION['telp'] = $telp;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

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
				header("location:index_admin.php");
			}else{
				header("location:index_user.php");
			}

			// if (mysqli_num_rows($results) == 1) {
			// 	// $_SESSION['nama'] = $nama;
			// 	// $_SESSION['email'] = $email;
			// 	$_SESSION['username'] = $username;
			// 	// $_SESSION['telp'] = $telp;
			// 	$_SESSION['success'] = "You are now logged in";
			// 	header('location: index.php');
			// }else {
			// 	array_push($errors, "salah kombinasi");
			// }
		}
	}

?>