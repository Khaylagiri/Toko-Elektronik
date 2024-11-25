<?php
$id=$_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM `tb_pegawai` WHERE nip = '$id'") or die (mysql_error());
$data = mysqli_fetch_array($query);
?>

<!-- page start-->
<h1 class="mt-4">Data Pegawai</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Pegawai</li>
    </ol>
    		<div class="panel-body">
        <h3>Apakah Anda Menghapus Data Pegawai : <?php echo $data['nama_peg']; ?></h3>
    			<form class="form-horizontal col-sm-12" method="post" role="form">
              <div class="form-group">
              <hr>
                <div class="">
                  <a href="?page=pegawai&aksi=proses_hapus&id=<?php echo $data['nip']; ?>" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Hapus 
                  </a>
                  <a href="?page=pegawai">
                  <button type="button" class="btn btn-success">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Batal
                  </button>
                  </a>
                </div>
              </div>    
            </form>
    		</div>
    	</div>
    </div>
</div>

<!-- page end-->
