<?php 

//no display error
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
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
	$db = mysqli_connect('localhost', 'root', '', 'pm12');
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
					  VALUES( '$nama', '$email', '$username', '$telp', '$password', 'user')";
			mysqli_query($db, $query);
			$_SESSION['nama'] = $nama;
			$_SESSION['email'] = $email;
			$_SESSION['username'] = $username;
			$_SESSION['telp'] = $telp;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}
	}

	// REGISTER admin
	if (isset($_POST['reg_admin'])) {
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

	// lapor anonim
	if(isset($_POST['lap_anonim'])){

		// ambil data dari formulir
		$judul = $_POST['judul'];                                       
		$isi = $_POST['isi'];
		$tgl = $_POST['tgl'];
		$lokasi = $_POST['lokasi'];
		$kategori = $_POST['kategori'];
			
	
		// buat query
		$sql = "INSERT INTO anonim (judul, isi, tgl, lokasi, kategori) 
		VALUE ('$judul', '$isi', '$tgl', '$lokasi', '$kategori')";
		$query = mysqli_query($db, $sql);
	
		// apakah query simpan berhasil?
		if( $query ) {
			// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			header('Location: anonim.php?status=sukses');
		} else {
			// kalau gagal alihkan ke halaman indek.php dengan status=gagal
			header('Location: anonim.php?status=gagal');
		}
	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
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
			else if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
			}
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
