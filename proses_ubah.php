<?php
include "connect.php";
$kode = $_GET['kode'];
$barang = $_POST['barang'];
$merk = $_POST['merk'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];
$harga= $_POST['harga'];
if(isset($_POST['ubah_foto'])){ 
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
   $fotobaru = date('dmYHis').$foto;
  
 
  $path = "images/".$fotobaru;

  
  if(move_uploaded_file($tmp, $path)){ 
    $query = "SELECT * FROM produk WHERE kode='".$kode."'";
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($sql); 

  
    if(is_file("images/".$data['foto'])) 
      unlink("images/".$data['foto']); 
    
    
    $query = "UPDATE produk SET kode='".$kode."',  barang='".$barang."', merk='".$merk."', stok='".$stok."', deskripsi='".$deskripsi."',harga='".$harga."', foto='".$fotobaru."' WHERE kode='".$kode."'";
    $sql = mysqli_query($connect, $query);

    if($sql){
      header("location: admin.php");
    }else{
    
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
    }
  }else{
  
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }
}else{ 
  $query = "UPDATE produk SET kode='".$kode."', barang='".$barang."', merk='".$merk."', stok='".$stok."', harga='".$harga."' WHERE kode='".$kode."'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
    header("location: admin.php");
  }else{
   
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }
}
?>