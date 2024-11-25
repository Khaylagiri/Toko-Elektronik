<h1 class="mt-4">Data Pegawai</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Pegawai</li>
    </ol>
<div class="col-sm-50 col-12 text-right m-b-30">
    <div class="d-flex justify-content-end">
        <a href="index.php?page=pegawai&aksi=tambah" class="btn btn-primary btn-rounded" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Pegawai</a>
        <a href="../laporan/laporan_pegawai.php" target="_blank" class="btn btn-success btn-rounded" title="Laporan"><i class="fa fa-print"></i> Laporan</a>
    </div>
</div>
<br>

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered custom-table mb-0 table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telpon</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status</th>
                                    <th class="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($koneksi,"SELECT tb_pegawai.*,tb_login.* FROM tb_pegawai INNER JOIN tb_login on tb_login.nip = tb_pegawai.nip ORDER BY tb_pegawai.nip ASC ");
                                $no = 1;
                                while ($data = @mysqli_fetch_array($query))
                                {
                                ?>                    
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data['nip'] ;?></td>
                                    <td>
                                        <?php echo $data['nama_peg'] ;?>
                                    </td>
                                    <td><?php echo $data['alamat_peg'] ;?></td>
                                    <td><?php echo $data['telp_peg'] ;?></td>
                                    <td><?php echo $data['jenis_kelamin_peg'] ;?></td>
                                    <td><?php echo $data['type_user'] ;?></td>
                                    <td class="text-right">
     
                                 <a class="dropdown-item" href="index.php?page=pegawai&aksi=edit&id=<?php echo $data['nip']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                 <a class="dropdown-item" href="index.php?page=pegawai&aksi=hapus&id=<?php echo $data['nip']; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                          

                                    </td>
                                </tr>
                                <?php
                                $no++;
                                };
                                ?>                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>   
        </div>
    </div>
