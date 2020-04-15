<?php
// Load file koneksi.php
include "connect.php";
// Ambil Data yang Dikirim dari Form
$tanggal = $_POST['tanggal'];
$kode = $_POST['kode'];
$barang = $_POST['barang'];
$merk = $_POST['merk'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];
$total = $_POST['total'];



$query = "INSERT INTO pendapatan VALUES('".$tanggal."','".$kode."', '".$barang."', '".$merk."' ,'".$stok."','".$deskripsi."',  '".$total."')"; 
$sql = mysqli_query($connect, $query); 
// Eksekusi/ Jalankan query dari variabel $query  
if($sql){ 
// Cek jika proses simpan ke database sukses atau tnameak  
  // Jika Sukses, Lakukan :    
  header("location: user3.php"); 
  // Redirect ke halaman index.php 
  }else{   
  // Jika Gagal, Lakukan :    
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";   
  echo "<br><a href='tambah2.php'>Kembali Ke Form</a>";  
  }
  
  ?>