<?php
include "koneksi.php";

	$nis = $_GET['nis'];

	$sql = "DELETE FROM peserta_ppdb WHERE nis='$nis'";
	$hasil = mysqli_query($con, $sql);

	if ($hasil) {
		echo "Data berhasil dihapus";
	}else{
		echo "Data gagal dihapus";
	}
?>