<?php
$satu 		= mysqli_real_escape_string($koneksi,@$_POST['nip']);
$dua 		= mysqli_real_escape_string($koneksi,@$_POST['nama_peg']);
$tiga 		= mysqli_real_escape_string($koneksi,@$_POST['alamat_peg']);
$empat 		= mysqli_real_escape_string($koneksi,@$_POST['telp_peg']);
$lima		= mysqli_real_escape_string($koneksi,@$_POST['jenis_kelamin_peg']);

$enam		= mysqli_real_escape_string($koneksi,@$_POST['username']);
$tujuh		= mysqli_real_escape_string($koneksi,@$_POST['password']);
$delapan	= mysqli_real_escape_string($koneksi,@$_POST['type_user']);

if ($satu == "" || $dua == "" || $tiga == "" || $empat == "" || $lima == "" || $enam =="" || $tujuh =="" || $delapan =="")
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
  $query = mysqli_query($koneksi,"INSERT INTO `tb_pegawai` VALUES ('$satu', '$dua', '$tiga', '$empat', '$lima');") or die (mysqli_error($koneksi,));
  $query2 = mysqli_query($koneksi,"INSERT INTO `tb_login` VALUES ('$enam', md5('$tujuh'), '$delapan', '$satu');") or die (mysqli_error($koneksi,));
?>
<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4>Data Berhasil di Tambahkan !</h4>

</div>
<meta http-equiv="refresh" content="2; url=index.php?page=pegawai">
<?php
}
?>