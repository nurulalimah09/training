<?php
// Load file koneksi.php
include "connect.php";
// Ambil Data yang Dikirim dari Form
$no = $_POST['no'];
$id= $_POST['id'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$gaji = $_POST['gaji'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];  
// Rename telp fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;
// Proses uploadf
if(move_uploaded_file($tmp, $path)){ 
// Cek apakah gambar berhasil diupload atau tnameak  
// Proses simpan ke Database  
$query = "INSERT INTO sdm VALUES('".$no."','".$id."', '".$nama."', '".$jabatan."' ,'".$gaji."','".$telp."',  '".$email."',  '".$alamat."','".$fotobaru."')"; 
$sql = mysqli_query($connect, $query); 
// Eksekusi/ Jalankan query dari variabel $query  
if($sql){ 
// Cek jika proses simpan ke database sukses atau tnameak  
  // Jika Sukses, Lakukan :    
  header("location: user2.php"); 
  // Redirect ke halaman index.php 
  }else{   
  // Jika Gagal, Lakukan :    
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";   
  echo "<br><a href='tambah1.php'>Kembali Ke Form</a>";  
  }
  }else{ 
  // Jika gambar gagal diupload, Lakukan :  
  echo "Maaf, Gambar gagal untuk diupload.";  
  echo "<br>
  <a href='tambah1.php'>Kembali Ke Form</a>";
  }
  ?>