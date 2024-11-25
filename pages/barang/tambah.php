<h3 class="mt-4">Tambah Data Barang</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Barang</li>
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
                    <label class="col-form-label col-md-2">Kode Barang</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?php echo autonumber("tb_barang","id_barang",7,"BRG"); ?>" required readonly>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Nama Barang</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Harga Barang</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="harga_barang" name="harga_barang" required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Stok Barang</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="stok_barang" name="stok_barang" required>
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