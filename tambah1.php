
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
					<li><a href="tambah.php"><font size="6">Tambah Data</font></a></li>
			
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">

<meta charset="utf-8">
<title>Data Pegawai</title>
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
<h2><font color="black">Data Pegawai</h2>
</hgroup>
<form class="form-horizontal" action="simpan1.php" enctype="multipart/form-data" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">ID.Pegawai</label>
					<div class="col-sm-4">
						<input type="text" name="id" class="form-control" placeholder="ID.Pegawai" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama Pegawai</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" placeholder="Nama Pegawai" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Jabatan </label>
					<div class="col-sm-4">
						<input type="text" name="jabatan" class="form-control" placeholder="Jabatan Pegawai" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Gaji </label>
					<div class="col-sm-4">
						<input type="text" name="gaji" class="form-control" placeholder="Gaji Pegawai" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">No.Telepon</label>
					<div class="col-sm-4">
						<input type="text" name="telp" class="form-control" placeholder="No.Telepon" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-4">
						<input type="text" name="email" class="form-control" placeholder="Email Pegawai" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Alamat </label>
					<div class="col-sm-4">
						<textarea name="alamat" class="form-control" placeholder="Alamat Pegawai" required></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Foto</label>
					<div class="col-sm-4">
						<input type="file" name="foto" class="form-control" placeholder="Foto" required>
					</div>
				</div>
 
 </table>  
 <hr> 
 <input type="submit" class="btn btn-warning" value="Simpan">  
 <a href="user2.php"><input type="button" class="btn btn-danger" value="Batal"></a> 

 </form>
 
<br>
</section>
<article>
<footer>

</footer>
</div>
</body>
</html>










