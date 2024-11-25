<?php
$QUERY = mysqli_query ($koneksi, "SELECT * FROM `tb_login` WHERE username='".$_SESSION['username']."' ");
while ($DATA=mysqli_fetch_array($QUERY))
$NIP = $DATA['nip'];
{
    $QUERY2 = mysqli_query ($koneksi,"SELECT * FROM `tb_pegawai` WHERE tb_pegawai.nip='$NIP'");
    while ($DATA2=mysqli_fetch_array($QUERY2))
    {
        if (@$_SESSION['username'])
        {
            if ($_SESSION['type_user']== "Admin")
            {
                echo "
    <!--- Awal Admin-->
    <div class='alert alert-info alert-dismissible fade show' role='alert'>
    <strong>Selamat Datang</strong> di Aplikasi Toko Segala Ada <br>
    <h3>$DATA2[nama_peg]</h3>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
    </button>
</div>      
        <!--- Akhir Admin-->
                ";

            }else if ($_SESSION['type_user']== "Kasir") 
            {
    Echo "
        <!--- Awal Kasir-->
    <div class='alert alert-info alert-dismissible fade show' role='alert'>
        <strong>Selamat Datang</strong> di Aplikasi Toko Segala Ada <br>
        <h3>$DATA2[nama_peg]</h3>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>        
        <!--- Akhir Kasir-->
        "; 
            }
        }
    };
};
?>   