<?php
@$page = $_GET['page'];
switch ($page) {
	//admin
	case 'pegawai':
		include "../pages/pegawai/pegawai.php";
		break;
	case 'barang':
		include "../pages/barang/barang.php";
		break;
    case 'transaksi':
        include "../pages/transaksi/transaksi.php";
        break;
	default:
		include "../pages/dashboard.php";
		break;
}
?>