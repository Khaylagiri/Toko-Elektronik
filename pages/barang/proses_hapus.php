<?php
	$id=$_GET['id'];
	$query_hapus=mysqli_query($koneksi," DELETE FROM `tb_barang` WHERE `tb_barang`.`id_barang`='$id' ");
	//header("Location:../../admin/index.php?page=pegawai ");
?>
<meta http-equiv="refresh" content="2; url=index.php?page=barang">