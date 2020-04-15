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
					<li class="active"><a href="admin1.php">Beranda</a></li>
						<li><a href="center2.php">Back</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Data Pegawai</h2>
			<hr />
 <br>



<form action="" metdod="GET">
<input type="text" name="search" />
<button type="submit" value="Reset">Search</button>
<button type="reset" value="Reset"><a href="admin1.php"> Reset</a></button>
<br><br>
<div class="table-responsive">
			<table class="table table-striped table-hover">
					<td>Foto </td>
					<td>ID. Pegawai</td>
					<td>Nama Pegawai</td>
                    <td>Jabatan</td>
					<td>Gaji</td>
					<td>No.Telepon</td>
					<td>Email</td>
					<td>Alamat</td>
  <center><td>Tools</td></center>
 </tr>
  <?php
  include "kon.php";


  $sqlstr = "SELECT * FROM sdm";

  if(isset($_GET["search"]))
  {
      $search = $_GET["search"];
      if($search != "")
      {
        $sqlstr = "Select * from sdm where id like ('%$search%') or nama like ('%$search%')";
      }
  }

  $query = mysqli_query($koneksi, $sqlstr) or die (mysqli_error());
       if(mysqli_num_rows($query) != 0){
      while($r = mysqli_fetch_array($query)):     ?>
   
 <tr >
  <td><img src="images/<?php echo $r['foto'] ?>" widtd="120" height="120"></td>
  <td><?php echo $r['id'] ?></td>
  <td><?php echo $r['nama'] ?></td>
  <td><?php echo $r['jabatan'] ?></td>
  <td><?php echo $r['gaji'] ?></td>
  <td><?php echo $r['telp'] ?></td> 
  <td><?php echo $r['email'] ?></td>
  <td><?php echo $r['alamat'] ?></td>
  <td>
   <a href="form_ubah1.php?id=<?php echo $r['id'] ?>">Edit</a> ||
   <a href="proses_hapus1.php?id=<?php echo $r['id'] ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a>
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