<?php
$ID=$_GET['id'];
$EDIT ="SELECT tb_pegawai.*, tb_login.* FROM tb_pegawai INNER JOIN tb_login on tb_login.nip=tb_pegawai.nip WHERE tb_pegawai.nip='$ID'" or die ("Gagal melakukan query!!!!".mysql_error());
$HASILEDIT=mysqli_query($koneksi,$EDIT);
while ($ROW = mysqli_fetch_array($HASILEDIT)) {
    $NIP = $ROW['nip'];
    $NAMA=$ROW['nama_peg'];
    $ALAMAT=$ROW['alamat_peg'];
    $TELEPON=$ROW['telp_peg'];
    $JENKEL=$ROW['jenis_kelamin_peg'];
    $USERNAME=$ROW['username'];
    $PASSWORD=$ROW['password'];
    $STATUS=$ROW['type_user'];
}
?>
<h3 class="mt-4">Edit Data Pegawai</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Pegawai</li>
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
                    <label class="col-form-label col-md-2">NIP</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $NIP; ?>" required readonly>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Nama Pegawai</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nama_peg" name="nama_peg" value="<?php echo $NAMA; ?>"  required>
                    </div>
                </div>
                <br>                
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Alamat</label>
                    <div class="col-md-10">
                        <textarea rows="3" cols="5" class="form-control" id="alamat_peg" name="alamat_peg" required placeholder="Masukan alamat"><?php echo $ALAMAT; ?></textarea>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">No. Telp</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="telp_peg" name="telp_peg" value="<?php echo $TELEPON; ?>" required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Jenis Kelamin</label>
                    <div class="col-md-10">
                        <div class="radio">
                            <label>
                                <input type="radio" name="jenis_kelamin_peg" id="Pria" value="Pria" <?php if ($JENKEL=="Pria") {echo 'Checked';} ?> required="required"> Pria
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="jenis_kelamin_peg" id="Wanita" value="Wanita" <?php if ($JENKEL=="Wanita") {echo 'Checked';} ?> required="required"> Wanita
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Username</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $USERNAME; ?>" required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Password</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="password" name="password" value="<?php echo md5($PASSWORD); ?>" required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Status</label>
                    <div class="col-md-10">
                        <select class="form-control" name="type_user">
                            <option required>-- Status Kepegawaian --</option>
                            <option value="Admin" <?php if($STATUS=='Admin') {echo "selected=\"selected=\"";} ?>>Admin</option>
                            <option value="Kasir" <?php if($STATUS=='Kasir') {echo "selected=\"selected=\"";} ?>>Kasir</option>
                            <option value="Dokter" <?php if($STATUS=='Dokter') {echo "selected=\"selected=\"";} ?>>Dokter</option>
                            <option value="Pendaftar" <?php if($STATUS=='Pendaftar') {echo "selected=\"selected=\"";} ?>>Pendaftar</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                  <div class="col-md-4 offset-md-2">
                    <input type="submit" name="edit" class="btn btn-info" value="Edit">
                    <button type="reset" class="btn btn-danger" >Hapus</button>
                    <a href="index.php?page=pegawai" class="btn btn-warning">Batal</a>
                  </div>
                </div>
            </form>    
        </div>
    </div>
</div>