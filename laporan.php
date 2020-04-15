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
						<li><a href="center2.php">Back</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="content">
		    <h1>Laporan Rugi Laba</h1>
			<h2>Data Pendapatan Elek Shop</h2>
			<hr />
	<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr><th>Tanggal Transaksi</th>
					<th>Kode Barang</th>
                    <th>Nama Barang</th>
					<th>Merk</th>
                    <th>Stok Barang</th>
					<th>Deskripsi Barang</th>
					<th>Total Harga</th>
					
					
					
                 
	</tr> 
	
	<?php 
	// Load file koneksi.php 
	include "connect.php";   
	$query = "SELECT tanggal, kode, barang, merk, stok, deskripsi, total FROM pendapatan"; 
	$query2 = "SELECT SUM(total) FROM pendapatan"; 
	$sql = mysqli_query($connect, $query); 
	$sql2 = mysqli_query($connect, $query2); 
	// Eksekusi/Jalankan query dari variabel $query  
	while($data = mysqli_fetch_array($sql)){ 
	
	// Ambil semua data dari hasil eksekusi $sql   
	echo "<tr>";  
	echo "<td>".$data['tanggal']."</td>";     
	echo "<td>".$data['kode']."</td>";   
	echo "<td>".$data['barang']."</td>";   
	echo "<td>".$data['merk']."</td>";   
	echo "<td>".$data['stok']."</td>";  
	echo "<td>".$data['deskripsi']."</td>"; 
	echo "<td>".number_format($data['total'],2,',','.')."</td>";  
	echo "</tr>"; 
	
	} 
		$sum1 =0;
		while($data1 = mysqli_fetch_array($sql2)){
		echo "<tr>";  	
		echo "<td></td>";     
		echo "<td></td>";   
		echo "<td></td>";   
		echo "<td></td>";  
		echo "<td></td>";  		
		echo "<td><b>Total</b></td>"; 
		$sum1 = $data1['SUM(total)'];
		echo "<td><b>".number_format($data1['SUM(total)'],2,',','.')."</b></td>"; 
		echo "</tr>"; 
		}
	?>  
	
	</table>
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
	$query = "SELECT tanggal, jenis, deskripsi, total FROM pengeluaran"; 
	$query2 = "SELECT SUM(total) FROM pengeluaran"; 
	$sql = mysqli_query($connect, $query); 
	$sql2 = mysqli_query($connect, $query2); 
	// Eksekusi/Jalankan query dari variabel $query  
	while($data = mysqli_fetch_array($sql)){ 
	echo "<tr>";  
	echo "<td>".$data['tanggal']."</td>";     
echo "<td>".$data['jenis']."</td>";   
echo "<td>".$data['deskripsi']."</td>";   
echo "<td>".number_format($data['total'],2,',','.')."</td>";   
 
	echo "</tr>"; 
	} 
	$sum2 = 0;
	while($data2 = mysqli_fetch_array($sql2)){
		echo "<tr>";  	
		echo "<td></td>";     
		echo "<td></td>";      		
		echo "<td><b>Total</b></td>"; 
		$sum2 = $data2['SUM(total)'];
		echo "<td><b>".number_format($data2['SUM(total)'],2,',','.')."</b></td>"; 
		echo "</tr>"; 
		   
		}
	    
		$jumlah = $sum1 - $sum2;
		
		echo"<td><b>Laba yang didapatkan = " ;
		echo (number_format($jumlah,2,',','.'));
		echo "</b></td>" ;

	
	?> 
	
	

	
	</table>
	<button style="margin-left:5%" onClick="print_d()">Print Document</button>
    <script>
		function print_d(){
			window.open("print.php","_blank");
		}
	</script>
	</body>
	
</html>