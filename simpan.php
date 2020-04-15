<?php
// Load file koneksi.php
include "connect.php";
// Ambil Data yang Dikirim dari Form
$no = $_POST['no'];
$kode = $_POST['kode'];
$barang = $_POST['barang'];
$merk = $_POST['merk'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];  
// Rename deskripsi fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;
// Proses uploadf
if(move_uploaded_file($tmp, $path)){ 
// Cek apakah gambar berhasil diupload atau tnameak  
// Proses simpan ke Database  
$query = "INSERT INTO produk VALUES('".$no."','".$kode."', '".$barang."', '".$merk."' ,'".$stok."','".$deskripsi."',  '".$harga."',  '".$fotobaru."')"; 
$sql = mysqli_query($connect, $query); 
// Eksekusi/ Jalankan query dari variabel $query  
if($sql){ 
// Cek jika proses simpan ke database sukses atau tnameak  
  // Jika Sukses, Lakukan :    
  header("location: user.php"); 
  // Redirect ke halaman index.php 
  }else{   
  // Jika Gagal, Lakukan :    
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";   
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";  
  }
  }else{ 
  // Jika gambar gagal diupload, Lakukan :  
  echo "Maaf, Gambar gagal untuk diupload.";  
  echo "<br>
  <a href='form_simpan.php'>Kembali Ke Form</a>";
  }
  ?>