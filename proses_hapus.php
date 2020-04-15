<?php
// Load file koneksi.php
include "konek.php";

// Ambil data kode yang dikirim oleh index.php melalui URL
$kode = $_GET['kode'];

// Query untuk menampilkan data produk berdasarkan kode yang dikirim
$query = "SELECT * FROM produk WHERE kode='".$kode."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
if(is_file("images/".$data['foto'])) // Jika foto ada
  unlink("images/".$data['foto']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data produk berdasarkan kode yang dikirim
$query2 = "DELETE FROM produk WHERE kode='".$kode."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: admin.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='admin.php'>Kembali</a>";
}
?>