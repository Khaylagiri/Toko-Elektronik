<h3 class="mt-4">Tambah Data Pegawai</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Pegawai</li>
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
                    <label class="col-form-label col-md-2">NIP</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nip" name="nip" value="<?php echo autonumber("tb_pegawai","nip",7,"PGW"); ?>" required readonly>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Nama Pegawai</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nama_peg" name="nama_peg" required>
                    </div>
                </div>  
                <br>              
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Alamat</label>
                    <div class="col-md-10">
                        <textarea rows="3" cols="5" class="form-control" id="alamat_peg" name="alamat_peg" required placeholder="Masukan alamat"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">No. Telp</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="telp_peg" name="telp_peg" required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Jenis Kelamin</label>
                    <div class="col-md-10">
                        <div class="radio">
                            <label>
                                <input type="radio" name="jenis_kelamin_peg" id="Pria" value="Pria" required="required"> Pria
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="jenis_kelamin_peg" id="Wanita" value="Wanita" required="required"> Wanita
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Username</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Status</label>
                    <div class="col-md-10">
                        <select required class="form-control" name="type_user">
                            <option name="type_user" value="Admin">Admin</option>
                            <option name="type_user" value="Kasir">Kasir</option>

                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                  <div class="col-md-4 offset-md-2">
                    <input type="submit" name="tambah" class="btn btn-info" value="Tambah">
                    <button type="reset" class="btn btn-danger" >Hapus</button>
                	<a href="index.php?page=pegawai" class="btn btn-warning">Batal</a>
                  </div>
                </div>
            </form>    
        </div>
    </div>
</div>