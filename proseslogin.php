<?php
	session_start();
	require_once("konek.php");
	$username = $_POST['username'];
	$pass = $_POST['password'];	
	$sql = "SELECT * FROM user WHERE username = '$username'";
	$query = $db->query($sql);	
	$hasil = $query->fetch_assoc();
	if($query->num_rows == 0) {
		echo "<div align='center'><h2>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
	} else {
		if($pass <> $hasil['password']) {
			echo "<div align='center'><h2>Password salah! <a href='login.php'>Back</a></div>";
		} else {
		
		//ini tambahan buat dapetin data level(admin atau user)
		$_SESSION['level'] = $hasil['level'];
		
			$_SESSION['username'] = $hasil['username'];
			
			//nama file yang di tuju setelah login
			header('location:center2.php');
		}
	}
?>