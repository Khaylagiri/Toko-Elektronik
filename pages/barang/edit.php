<?php
$ID=$_GET['id'];
$EDIT ="SELECT * FROM tb_barang WHERE tb_barang.id_barang='$ID'" or die ("Gagal melakukan query!!!!".mysql_error());
$HASILEDIT=mysqli_query($koneksi,$EDIT);
while ($ROW = mysqli_fetch_array($HASILEDIT)) {
    $KODE_BARANG = $ROW['id_barang'];
    $NAMA_BARANG=$ROW['nama_barang'];
    $HARGA_BARANG=$ROW['harga_barang'];
    $STOK_BARANG=$ROW['stok_barang'];

}
?>
<h3 class="mt-4">Edit Data Barang</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Barang</li>
    </ol>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
	        <?php
	        if (@$_POST['edit']) {
	        include 'proses_edit.php';
	        }
	        ?>
	        <form class="form-horizontal col-sm-12" method="post" role="form" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Kode Barang</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?php echo $KODE_BARANG; ?>" required readonly>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Nama Barang</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $NAMA_BARANG; ?>" required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Harga Barang</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?php echo $HARGA_BARANG; ?>" required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Stok Barang</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="stok_barang" name="stok_barang" value="<?php echo $STOK_BARANG; ?>" required>
                    </div>
                </div>
                <br>
                <div class="form-group">
                  <div class="col-md-4 offset-md-2">
                    <input type="submit" name="edit" class="btn btn-info" value="Edit">
                    <button type="reset" class="btn btn-danger" >Hapus</button>
                	<a href="index.php?page=biaya" class="btn btn-warning">Batal</a>
                  </div>
                </div>
            </form>    
        </div>
    </div>
</div>