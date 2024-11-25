<?php
$ID=$_GET['id'];
$EDIT ="SELECT tb_transaksi.*,tb_barang.*, tb_pegawai.* FROM tb_transaksi 
JOIN tb_barang 
ON tb_barang.id_barang = tb_transaksi.id_barang
JOIN tb_pegawai
ON tb_pegawai.nip = tb_transaksi.nip 
WHERE tb_transaksi.id_transaksi='$ID'" or die ("Gagal melakukan query!!!!".mysql_error());
$HASILEDIT=mysqli_query($koneksi,$EDIT);
while ($ROW = mysqli_fetch_array($HASILEDIT)) {
    $KODE_TRANSAKSI  = $ROW['id_transaksi'];
    $TGL_TRANSAKSI   =$ROW['tgl_transaksi'];
    $ID_BARANG       =$ROW['id_barang'];
    $NIP             =$ROW['nip'];

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
                    <label class="col-form-label col-md-2">Kode Transaksi</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?php echo $KODE_TRANSAKSI; ?>" required readonly>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Tanggal Transaksi</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" value="<?php echo $TGL_TRANSAKSI; ?>" required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Nama Barang</label>
                    <div class="col-md-10">
                        <select required class="form-control" name="id_barang" id="id_barang">
                            <option value="">- Nama Barang -</option>
                                <?php
                                $sql_poli = mysqli_query($koneksi, "SELECT * FROM tb_barang") or die (mysqli_error($koneksi));
                                while ($data_poli = mysqli_fetch_array($sql_poli)) {
                                    echo '<option value="'.$data_poli['id_barang'].'" >'.$data_poli['nama_barang'].'</option>';
                                } ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Nama Pembeli</label>
                    <div class="col-md-10">
                        <select required class="form-control" name="nip" id="nip">
                            <option value="">- Nama Pembeli -</option>
                                <?php
                                $sql_poli = mysqli_query($koneksi, "SELECT * FROM tb_pegawai") or die (mysqli_error($koneksi));
                                while ($data_poli = mysqli_fetch_array($sql_poli)) {
                                    echo '<option value="'.$data_poli['nip'].'">'.$data_poli['nama_peg'].'</option>';
                                } ?>
                        </select>
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