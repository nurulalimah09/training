<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elek Shop</title>

	
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
					<li><a href="tambah3.php">Tambah Data</a></li>
						<li><a href="center.php">Back</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Data Pengualaran Elek Shop</h2>
			<hr />
	<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr><th>Tanggal Pengeluaran</th>
                    <th>Jenis Pengeluaran</th>
					<th>Deskripsi </th>
					<th>Total Pengeluaran</th>
					
					
					
                 
	</tr> 
	
	<?php 
	// Load file koneksi.php 
	include "connect.php";   
	$query = "SELECT * FROM pengeluaran"; 
	$sql = mysqli_query($connect, $query); 
	// Eksekusi/Jalankan query dari variabel $query  
	while($data = mysqli_fetch_array($sql)){ 
	// Ambil semua data dari hasil eksekusi $sql   
	echo "<tr>";  
	echo "<td>".$data['tanggal']."</td>";     
echo "<td>".$data['jenis']."</td>";   
echo "<td>".$data['deskripsi']."</td>";   
echo "<td>".$data['total']."</td>";   
 
	echo "</tr>"; 
	} 
	?>  
	</table>
	</body>
</html>