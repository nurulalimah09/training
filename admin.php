<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
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
					<li class="active"><a href="admin.php">Beranda</a></li>
						<li><a href="center2.php">Back</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Data Barang</h2>
			<hr />
 <br>



<form action="" metdod="GET">
<input type="text" name="search" />
<button type="submit" value="Reset">Search</button>
<button type="reset" value="Reset"><a href="admin.php"> Reset</a></button>
<br><br>
<div class="table-responsive">
			<table class="table table-striped table-hover">
                    <td>Foto Barang</td>
					<td>Kode Barang</td>
                    <td>Nama Barang</td>
					<td>Merk</td>
                    <td>Stok Barang</td>
					<td>Deskripsi Barang</td>
					<td>Harga Barang</td>
  <center><td>Tools</td></center>
 </tr>
  <?php
  include "kon.php";


  $sqlstr = "SELECT * FROM produk";

  if(isset($_GET["search"]))
  {
      $search = $_GET["search"];
      if($search != "")
      {
        $sqlstr = "Select * from produk where kode like ('%$search%') or barang like ('%$search%')";
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
  <td><?php echo $r['deskripsi'] ?></td>
  <td><?php echo $r['harga'] ?></td>
  <td>
   <a href="form_ubah.php?kode=<?php echo $r['kode'] ?> ">Edit</a> ||
   <a href="proses_hapus.php?kode=<?php echo $r['kode'] ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a>
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