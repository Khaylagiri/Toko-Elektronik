<h1 class="mt-4">Data Transaksi</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Transaksi</li>
    </ol>
<div class="col-sm-50 col-12 text-right m-b-30">
    <div class="d-flex justify-content-end">
        <a href="index.php?page=transaksi&aksi=tambah" class="btn btn-primary btn-rounded" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Transaksi</a>
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
                                <th>Kode Transaksi</th>
                                <th>Tanggal Transaksi</th>
                                <th>Nama Barang</th>
                                <th>Harga Barang</th>
                                <th>Nama Kasir</th>
                                <th class="text-right">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $query = mysqli_query($koneksi,"SELECT tb_transaksi.*,tb_barang.*, tb_pegawai.* FROM tb_transaksi
                            INNER JOIN tb_barang
                            ON tb_barang.id_barang = tb_transaksi.id_barang
                            INNER JOIN tb_pegawai
                            ON tb_pegawai.nip = tb_transaksi.nip 
                            ORDER BY tb_transaksi.id_transaksi ASC ");
                            $no = 1;
                            while ($data = @mysqli_fetch_array($query))
                            {
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $data['id_transaksi'] ;?></td>
                                <td><?php echo $data['tgl_transaksi'] ;?></td>
                                <td><?php echo $data['nama_barang'] ;?></td>
                                <td><?php echo $data['harga_barang'] ;?></td>
                                <td><?php echo $data['nama_peg'] ;?></td>
                                <td class="text-right">
     
                                     <a class="dropdown-item" href="index.php?page=transaksi&aksi=edit&id=<?php echo $data['id_transaksi']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                     <a class="dropdown-item" href="index.php?page=transaksi&aksi=hapus&id=<?php echo $data['id_transaksi']; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>


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



