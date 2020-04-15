<Center>
<html>
<head>

<h1><font face="Courier New" size="5">ElekShop</font></h1>

<body>
<font face="Courier New"/>


<?php
$id=$_POST["id"];
$nama=$_POST["nama"];
$telp=$_POST["telp"];
$email=$_POST["email"];
$alamat=$_POST["alamat"];
$kasir=$_POST["kasir"];
$barang=$_POST["barang"];
$beli=$_POST["beli"];
?>

<table>

<td colspan="4">------------------------------------------------------</td>

<tr>
<td>ID Costumer</td><td>:</td>
<td> <?php echo $id;?></td>
</tr>

<tr>
<td>Nama Costumer</td><td>:</td>
<td> <?php echo $nama;?></td>
</tr>

<tr>
<td>No.Telepon</td><td>:</td>
<td> <?php echo $telp;?></td>
</tr>

<tr>
<td>Email</td><td>:</td>
<td> <?php echo $email;?></td>
</tr>

<tr>
<td>Alamat</td><td>:</td>
 <td><?php echo $alamat;?></td>
</tr>

<tr>
<td>Nama Kasir</td><td>:</td>
<td> <?php echo $kasir;?></td>
</tr>

<tr>
<td>Nama Barang</td><td>:</td>
 <td><?php echo $barang;?></td>
</tr>



<td>Harga</td><td> : </td>
<td style="padding-left: 180px">
<?php
    $harga = $_POST['h2'] ;
	$rupiah1=number_format($harga,2,',','.');
	echo "Rp. $rupiah1";

 ?></td>
</tr>

<tr>
<td>Jumlah Beli</td><td>:</td>
<td><?php echo $beli;?></td>
</tr>

<td colspan="4">------------------------------------------------------ (*)</td>

<tr>
<td>Total Harga</td><td>:</td>
<td style="padding-left:180px">
<?php 

	$tot_harga=$beli*$harga;
    $rupiah2=number_format($tot_harga,2,',','.');
	echo "Rp. $rupiah2";
?></td>
</tr>

<tr>
<td>Diskon</td><td>:</td>
<td style="padding-left:180px">
<?php 
if ($beli>=3)
{
	$diskon=(($tot_harga*30)/100);
	$rupiah4=number_format($diskon,2,',','.');
	echo "Rp. $rupiah4";
}
elseif ($beli>=2)
{
	$diskon=(($tot_harga*20)/100);
	$rupiah4=number_format($diskon,2,',','.');
	echo "Rp. $rupiah4";
}
elseif ($beli<=1)
{
	$diskon=(($tot_harga*10)/100);
	$rupiah4=number_format($diskon,2,',','.');
	echo "Rp. $rupiah4";
	
} ?></td>
</tr>

<td colspan="4">------------------------------------------------------ (-)</td>

<tr>
<td>Total Bayar</td><td>:</td>
<td style="padding-left:180px">
<?php $tot_bayar=$tot_harga-$diskon;
$rupiah3=number_format($tot_bayar,2,',','.');
echo "Rp. $rupiah3";
?></td>
</tr>

<td colspan="4">------------------------------------------------------</td>

<tr>

</tr>
</table>
<br><br>
<script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>