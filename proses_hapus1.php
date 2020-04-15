<?php
// Load file koneksi.php
include "connect.php";

// Ambil data jenis yang dikirim oleh index.php melalui URL
$id = $_GET['id'];

// Query untuk menampilkan data bunga berdasarkan jenis yang dikirim
$query = "SELECT * FROM sdm WHERE id='".$id."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
if(is_file("images/".$data['foto'])) // Jika foto ada
  unlink("images/".$data['foto']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data bunga berdasarkan jenis yang dikirim
$query2 = "DELETE FROM sdm WHERE id='".$id."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: admin1.php"); 
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='admin1.php'>Kembali</a>";
}
?>