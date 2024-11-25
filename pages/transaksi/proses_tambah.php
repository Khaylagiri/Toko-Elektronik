<?php
$satu 		= mysqli_real_escape_string($koneksi,@$_POST['id_transaksi']);
$dua 		= mysqli_real_escape_string($koneksi,@$_POST['tgl_transaksi']);
$tiga 		= mysqli_real_escape_string($koneksi,@$_POST['id_barang']);
$empat 		= mysqli_real_escape_string($koneksi,@$_POST['nip']);




if ($satu == "" || $dua == ""  || $tiga == "" || $empat == "" )
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
  $query = mysqli_query($koneksi,"INSERT INTO `tb_transaksi` VALUES ('$satu', '$dua', '$tiga', '$empat');") or die (mysql_error());

?>
<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4>Data  Transaksi Berhasil di Tambahkan !</h4>

</div>
<meta http-equiv="refresh" content="2; url=index.php?page=transaksi">
<?php
}
?>