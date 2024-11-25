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
$UPDATE1 = mysqli_query ($koneksi, "UPDATE tb_barang SET 
		nama_barang='$dua', 
        harga_barang='$tiga',
		stok_barang='$empat'
		WHERE tb_barang.id_barang='$satu';")
	or die ("Gagal edit data".mysqli_error($koneksi));
// kode jadwal tidak di update karena field primary key di tbl_pegawai	

?>
<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4>Edit Data Barang Berhasil !</h4>

</div>
<meta http-equiv="refresh" content="2; url=index.php?page=barang">
<?php
}
?>