<?php
include "koneksi.php";

	$sql = "SELECT 	nis, nama, tempat_lahir, tgl_lahir, id_jk, id_agama, asal_sekolah, alamat, no_telp, nama_ortu, id_penghasilan_ortu FROM peserta_ppdb";
	$data = mysqli_query($con, $sql);

	function jenisKelamin($idJk, $koneksi){
	$sql = "SELECT jenis_kelamin FROM jeniskelamin WHERE id_jk='$idJk'";
	$data = mysqli_query($koneksi, $sql);
	$jenis = mysqli_fetch_assoc($data);
	//die mysqli_error($koneksi)
	return $jenis['jenis_kelamin'];
	}
	function namaAgama($idAgama, $koneksi){
	$sql = "SELECT nama_agama FROM agama WHERE id_agama='$idAgama'";
	$data = mysqli_query($koneksi, $sql);
	$agama = mysqli_fetch_assoc($data);
	//die mysqli_error($koneksi)
	return $agama['nama_agama'];
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="author" content="Abdul Hafid Gunawan" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta rel="shortcut icon" href="">
	<title>Halaman Peserta PPDB</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/fashion.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<!--============================================ HEADER ============================================-->
	<header>
			<div class="container-fluid">
				<div class="container text-center">
					<h2 style="font-weight: bold;">List Data Peserta PPDB</h2>
					<hr>
				</div>
			</div>
	</header>
	<!--========================================== BATAS HEADER ==========================================-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-sm-6">
				<a href="tambah-data.php" class="btn btn-default btn1"><span class="fa fa-plus"> Tambah Data</span></a>
					<table class="table table-bordered table-responsive"> 
						<tr class="active">
							<th>NISN</th>
							<th width="200">Nama Peserta</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Agama</th>
							<th>Asal Sekolah</th>
							<th width="200">Alamat Peserta</th>
							<th>No Telpon</th>
							<th>Nama Orang Tua</th>
							<th>Penghasilan Orang Tua</th>
							<th width="400">Aksi</th>
						</tr>
					<?php
						foreach ($data as $row):
					?>
						<tr>
							<td><?php echo $row['nis'] ?></td>
							<td><?php echo $row['nama'] ?></td>
							<td><?php echo jenisKelamin($row['id_jk'], $con); ?></td>
							<td><?php echo $row['tempat_lahir'] ?></td>
							<td><?php echo $row['tgl_lahir'] ?></td>
							<td><?php echo namaAgama($row['id_agama'], $con); ?></td>
							<td><?php echo $row['asal_sekolah']; ?></td>
							<td><?php echo $row['alamat'] ?></td>
							<td><?php echo $row['no_telp'] ?></td>
							<td><?php echo $row['nama_ortu']; ?></td>
							<td><?php echo $row['id_penghasilan_ortu']; ?></td>
							<td><a href="ubah-data.php?nis=<?php echo $row['nis'] ?>" class="btn btn-success"><span class="fa fa-edit"> Edit</span></a> | <a href="hapus-data.php?nis=<?php echo $row['nis'] ?>" class="btn btn-danger"><span class="fa fa-trash-o"> Hapus</span></a></td>
							</tr>
					<?php endforeach; ?>
					</table>
			</div>
		</div>
	</div>
</body>
</html>
