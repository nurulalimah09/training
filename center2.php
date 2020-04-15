<?php
include('konek.php');
?>
<?php
// memulai session
session_start();
error_reporting(0);
if (isset($_SESSION['level']))
{
    // jika level admin
    if ($_SESSION['level'] == "admin")
   {   
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "user")
   {
       header('location:center.php');
   }
}
if (!isset($_SESSION['level']))
{
    header('location:../center2.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ElekShop</title>

	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="">Beranda</a></li>
					    <li><a href="laporan.php">Laporan</a></li>
						<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>ADMIN</h2>
			<hr />
		<br><br>		
	<center>	
<a href="admin.php"><img src="images/krdus.png" alt="" width="250" height="200"><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="admin1.php"><img src="images/foto2.png" alt="" width="250" height="200"><a><br><br><br>

<br><br><br>
<p><i>Pilih Salah satu dari keempat gambar ini, jika anda(admin) ingin melihat dan menambahkan data logistik atau SDM, pilih lah gambar yang menyimbolkan bahwa itu data mereka</i></p>

</body>
</html>