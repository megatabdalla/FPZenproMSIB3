<?php 
	session_start();
	include("config.php");

	$username = $_POST['uname'];
	$password = $_POST['psw'];

	$sql = "SELECT username FROM admin
			WHERE username = '$username'
			AND password = '$password'";

	$hasil = mysqli_query($config, $sql) or exit("Error query : <b>".$sql."</b>");

		if (mysqli_num_rows($hasil)>0) {
			$data = mysqli_fetch_array($hasil);
			$_SESSION['username'] = $data['username'];
			$message = "<b>Welcome!</b>";
			echo "<script type='text/javascript'>alert('$message');
					window.location.href='login.php'</script>";
			header("Location: index.php");
			exit();
		}
		else{
			$message = "Maaf, username atau password salah!";
			echo "<script type='text/javascript'>alert('$message');
					window.location.href='login.php'</script>";
		}
?>