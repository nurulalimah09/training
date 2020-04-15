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
					<li><a href="index.html">Back</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Data Barang</h2>
			<hr />
 <br>



<form action="" method="GET">
<input type="text" name="search" />
<button type="submit" value="Reset">Search</button>
<button type="reset" value="Reset"><a href="pembelian.php"> Reset</a></button>
<br><br>
<div class="table-responsive">
			<table class="table table-striped table-hover">
                    <th>Foto Barang</th>
					<th>Kode Barang</th>
                    <th>Nama Barang</th>
					<th>Merk</th>
                    <th>Stok Barang</th>
					<th>Deskripsi Barang</th>
					<th>Harga Barang</th>
					<th>Tools</th>
                 

 </tr>
  <?php
  include "kon.php";


  $sqlstr = "SELECT * FROM produk";

  if(isset($_GET["search"]))
  {
      $search = $_GET["search"];
      if($search != "")
      {
        $sqlstr = "Select * from produk where barang like ('%$search%') or merk like ('%$search%')";
      }
  }

  $query = mysqli_query($koneksi, $sqlstr) or die (mysqli_error());
       if(mysqli_num_rows($query) != 0){
      while($r = mysqli_fetch_array($query)):     ?>
   
 <tr >
  <td><img src="images/<?php echo $r['foto'] ?>" width="120" height="120"></td>
  <td><?php echo $r['kode'] ?></td>
  <td><?php echo $r['barang'] ?></td>
  <td><?php echo $r['merk'] ?></td>
  <td><?php echo $r['stok'] ?></td>
  <td><?php echo $r['harga'] ?></td>
  <td><?php echo $r['deskripsi'] ?></td>
  <td><a href='data.php'class='btn btn-danger' >BELI</a></td> 

	
  </td>
 </tr>
 <?php
  endwhile;
  }
 ?>
</table>
<?php 
    if(mysqli_num_rows($query) == 0){
    echo "<b>Tidak ada data yang tersedia</b>";
    }
?>
</form>
</body>
</html>