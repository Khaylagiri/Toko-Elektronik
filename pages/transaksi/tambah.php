<h3 class="mt-4">Tambah Data Transaksi</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Transaksi</li>
    </ol>
    <div class="row">
    <div class="col-lg-12">
        <div class="card-box">
 
	        <?php
	        if (@$_POST['tambah']) {
	          include 'proses_tambah.php';
	        }
	        ?>
	        <form class="form-horizontal col-sm-12" method="post" role="form" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Kode Transaksi</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?php echo autonumber("tb_transaksi","id_transaksi",7,"TRS"); ?>" required readonly>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Tanggal Transaksi</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" required>
                    </div>
                </div>
                <br>
                 <div class="form-group row">
                    <label class="col-form-label col-md-2">Nama Barang</label>
                    <div class="col-md-10">
                        <select required class="form-control" name="id_barang" id="id_barang">
                            <option value="">- Pilih Barang -</option>
                                <?php
                                $sql_poli = mysqli_query($koneksi, "SELECT * FROM tb_barang") or die (mysqli_error($koneksi));
                                while ($data_poli = mysqli_fetch_array($sql_poli)) {
                                    echo '<option value="'.$data_poli['id_barang'].'">'.$data_poli['nama_barang'].'</option>';
                                } ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Nama Pembeli</label>
                    <div class="col-md-10">
                        <select required class="form-control" name="nip" id="nip">
                            <option value="">- Pilih Pembeli -</option>
                                <?php
                                $sql_jadwal = mysqli_query($koneksi, "SELECT * FROM tb_pegawai") or die (mysqli_error($koneksi));
                                while ($data_jadwal = mysqli_fetch_array($sql_jadwal)) {
                                    echo '<option value="'.$data_jadwal['nip'].'">'.$data_jadwal['nama_peg'].'</option>';
                                } ?>
                        </select>
                    </div>
                </div>
                <br>

                <div class="form-group">
                  <div class="col-md-4 offset-md-2">
                    <input type="submit" name="tambah" class="btn btn-info" value="Tambah">
                    <button type="reset" class="btn btn-danger" >Hapus</button>
                	<a href="index.php?page=biaya" class="btn btn-warning">Batal</a>
                  </div>
                </div>
            </form>    
        </div>
    </div>
</div>
