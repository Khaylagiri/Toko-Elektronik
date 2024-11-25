<?php
$satu 		= mysqli_real_escape_string($koneksi,@$_POST['id_barang']);
$dua 		= mysqli_real_escape_string($koneksi,@$_POST['nama_barang']);
$tiga 		= mysqli_real_escape_string($koneksi,@$_POST['harga_barang']);
$empat 		= mysqli_real_escape_string($koneksi,@$_POST['stok_barang']);


if ($satu == "" || $dua == "" || $tiga == "" || $empat == "")
{
?>
<div class="alert alert-block alert-danger">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-warning-sign red"></i>
	Pastikan Semua Form Terisi !!!	
</div>
<?php
}
else
{
  $query = mysqli_query($koneksi,"INSERT INTO `tb_barang` SET 
  id_barang = '$satu',
  nama_barang = '$dua',
  harga_barang = '$tiga',
  stok_barang = '$empat' ;") or die (mysqli_error($koneksi,));
?>
<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4>Data Berhasil di Tambahkan !</h4>

</div>
<meta http-equiv="refresh" content="2; url=index.php?page=barang">
<?php
}
?>