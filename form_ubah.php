<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elek Shop</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	

		
		<style type="text/css">
.content {
			margin-top: 80px;
		}
.wrapper{
width: 940px;
margin: 20px auto 20px auto;
border: 2px solid green;
background-color: #ffffff;
}
header{
height: 200px;
background-image: url(images/header.jpg);
background-position: center;
}
h1{
text-indent: -9999px;
width: 940px;
height: 120px;
margin: 0px;
}
footer{
background-color: #53bd84;
height: 30px;
}
article{
overflow: auto;
width: 100%;
}
hgroup{
margin-top: 20px;
}
figure{
float: left;
width: 290px;
height: 220px;
padding: 5px;
margin: 10px;
border: 1px solid #eeeeee;
}
figcaption{
font-size: 90%;
text-align: left;
}
h1,h2,h3{
font-weight: normal;
}
h2{
margin: 10px 0px 5px 0px;
padding: 0px;
}
h3{
margin: 0px 0px 10px 0px;
color: #006699;
}
footer{
font-size: 80%;
padding: 7px 0px 0px 20px;
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
					<li><a href=""><font size="6">Edit Data</font></a></li>
			
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css" media="all"/>
</head>
<body>
<div class="wrapper">
<header>
</header>
<section class="courses">
<article>
<hgroup>
</hgroup>
<h2><font color="black">Data Barang</h2>
</hgroup>
<?php  
 // Load file koneksi.php  
 include "connect.php";   
 // Ambil data kode yang dikirim oleh index.php melalui URL  
 $kode = $_GET['kode'];   
 // Query untuk menampilkan data siswa berdasarkan kode yang dikirim  
 $query = "SELECT * FROM produk WHERE kode='".$kode."'"; 
 $sql = mysqli_query($connect, $query);  
 // Eksekusi/Jalankan query dari variabel $query 
 $data = mysqli_fetch_array($sql); 
 // Ambil data dari hasil eksekusi $sql
 ?>      

 <form method="post" class="form-horizontal" action="proses_ubah.php?kode=<?php echo $kode; ?>" enctype="multipart/form-data">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama Barang</label>
					<div class="col-sm-4">
						<input type="text" name="barang" class="form-control"  value="<?php echo $data['barang']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Merk</label>
					<div class="col-sm-4">
						<input type="text" name="merk" class="form-control" value="<?php echo $data['merk']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Stok Barang</label>
					<div class="col-sm-4">
						<input type="text" name="stok" class="form-control"  value="<?php echo $data['stok']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Deskripsi Barang</label>
					<div class="col-sm-4">
						<textarea name="deskripsi"  class="form-control" required><?php echo $data['deskripsi']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Harga Barang</label>
					<div class="col-sm-4">
						<input type="text" name="harga"  class="form-control" value="<?php echo $data['harga']; ?>"  required>
					</div>
				</div>
 <div class="form-group">
					<label class="col-sm-3 control-label">Foto</label>
					<div class="col-sm-4">
					<input type="checkbox" name="ubah_foto" value="true"> Ceklis Jika Ingin Mengubah Foto<br>  
						<input type="file" name="foto" class="form-control" placeholder="Foto" >
					</div>
				</div>
 </table>   
 <hr>  
 <input type="submit" class="btn btn-warning" value="Edit">  
 <a href="admin.php"><input type="button" class="btn btn-danger" value="Batal"></a> 
 
 </form>
<br>
</section>
<article>
<footer>

</footer>
</div>
</body>
</html>













