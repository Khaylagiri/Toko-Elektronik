<?php
	$id=$_GET['id'];
	$query_hapus=mysqli_query($koneksi," DELETE FROM `tb_pegawai` WHERE `tb_pegawai`.`nip`='$id' ");
	//header("Location:../../admin/index.php?page=pegawai ");
?>
<meta http-equiv="refresh" content="2; url=index.php?page=pegawai">