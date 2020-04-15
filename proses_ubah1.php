<?php
include "connect.php";
$id = $_GET['id'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$gaji = $_POST['gaji'];
$telp = $_POST['telp'];
$email= $_POST['email'];
$alamat= $_POST['alamat'];
if(isset($_POST['ubah_foto'])){ 
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
   $fotobaru = date('dmYHis').$foto;
  
 
  $path = "images/".$fotobaru;

  
  if(move_uploaded_file($tmp, $path)){ 
    $query = "SELECT * FROM sdm WHERE id='".$id."'";
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($sql); 

  
    if(is_file("images/".$data['foto'])) 
      unlink("images/".$data['foto']); 
    
    
    $query = "UPDATE sdm SET id='".$id."',  nama='".$nama."', jabatan='".$jabatan."', gaji='".$gaji."', telp='".$telp."',email='".$email."',alamat='".$alamat."', foto='".$fotobaru."' WHERE id='".$id."'";
    $sql = mysqli_query($connect, $query);

    if($sql){
      header("location: admin1.php");
    }else{
    
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_ubah1.php'>Kembali Ke Form</a>";
    }
  }else{
  
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='form_ubah1.php'>Kembali Ke Form</a>";
  }
}else{ 
  $query = "UPDATE sdm SET id='".$id."', nama='".$nama."', jabatan='".$jabatan."', gaji='".$gaji."', email='".$email."', alamat='".$alamat."'WHERE id='".$id."'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
    header("location: admin1.php");
  }else{
   
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah1.php'>Kembali Ke Form</a>";
  }
}
?>