<?php

if (isset($_POST['submit'])) {
	
	include "koneksi.php";

	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$tempat = $_POST['tempat_lahir'];
	$tgl = $_POST['tgl_lahir'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$alamat = $_POST['alamat'];
	$no = $_POST['no_telp'];
	$nama_ortu = $_POST['nama_ortu'];
	$penghasilan = $_POST['penghasilan_ortu'];

	$sql = "INSERT INTO peserta_ppdb(nis, nama, tempat_lahir, tgl_lahir, id_jk, id_agama, asal_sekolah, alamat, no_telp, nama_ortu, id_penghasilan_ortu) VALUES ('$nis', '$nama', '$tempat', '$tgl', '$jk', '$agama', '$asal_sekolah', '$alamat', '$no', '$nama_ortu', '$penghasilan')";

	$cetak = mysqli_query($con, $sql);
	if ($cetak) {
		echo "Data berhasil di daftarkan";
	}else{
		echo "Data gagal di daftarkan";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Peserta</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/tcss.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<form class="form-horizontal" method="POST">
		<fieldset>
			<legend><h3 class="text-center"><span class="fa fa-user"> FORM PENDAFTARAN PPDB</span></h3></legend>
			<div class="form-group">
				<label class="col-md-4 control-label">Nomor Induk Siswa Nasional (NISN) :</label>
				<div class="col-md-4">
					<input type="text" name="nis" placeholder="Masukkan NISN" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label">Nama Peserta :</label>
				<div class="col-md-4">
					<input type="text" name="nama" placeholder="Masukkan Nama Peserta" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label">Tempat Lahir :</label>
				<div class="col-md-4">
					<input type="text" name="tempat_lahir" placeholder="contoh : Madiun" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label">Tgl Lahir :</label>
				<div class="col-md-4">
					<input type="date" name="tgl_lahir" class="form-control input-md">
				</div>
			</div>
	<div class="form-group">
  		<label class="col-md-4 control-label">Jenis Kelamin :</label>
  		<div class="col-md-2">
  			<select name="jenis_kelamin" class="form-control">
      			<option value="1">Laki-Laki</option>
      			<option value="2">Perempuan</option>
    		</select>
  		</div>
	</div>
	<div class="form-group">
  		<label class="col-md-4 control-label">Agama :</label>
  		<div class="col-md-2">
  			<select name="agama" class="form-control">
      			<option value="1">Islam</option>
      			<option value="2">Kristen</option>
      			<option value="3">Katolik</option>
      			<option value="4">Hindhu</option>
      			<option value="5">Budha</option>
      			<option value="6">Kong Hu Cu</option>
    		</select>
  		</div>
	</div>
	<div class="form-group">
  		<label class="col-md-4 control-label">Asal Sekolah :</label>
  		<div class="col-md-4">                     
    		<textarea class="form-control" name="asal_sekolah">Asal Sekolah</textarea>
  		</div>
	</div>
	<div class="form-group">
  		<label class="col-md-4 control-label" for="Alamat tinggal">Alamat Tempat Tinggal :</label>
  		<div class="col-md-4">                     
    		<textarea class="form-control" name="alamat">Alamat Tempat Tinggal</textarea>
  		</div>
	</div>
	<div class="form-group">
  		<label class="col-md-4 control-label">No Telpon :</label>  
  		<div class="col-md-4">
  			<input name="no_telp" type="text" placeholder="No WA/Telegram/FB" class="form-control input-md">
  			<span class="help-block">*Note : No Telpon harus bisa dihubungi</span>  
  		</div>
	</div>

<!-- File Button  
	<div class="form-group">
  		<label class="col-md-4 control-label" for="pas foto">pas foto</label>
  		<div class="col-md-4">
    		<input id="pas foto" name="pas foto" class="input-file" type="file">
  		</div>
	</div>
-->
	<div class="form-group">
		<label class="col-md-4 control-label">Nama Orang Tua / Wali :</label>
		<div class="col-md-4">
			<input type="text" name="nama_ortu" class="form-control input-md">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label">Penghasilan Orang Tua</label>
		<div class="col-md-4">
			<select name="penghasilan_ortu" class="form-control">
				<option value="1"> < 500.000 </option>
				<option value="2"> > 500.000 </option>
				<option value="3"> 1.250.000 </option>
				<option value="4"> 1.500.000 </option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label"></label>
		<div class="col-md-4">
			<textarea class="form-control" readonly style="text-align: left;">
				SYARAT & KETENTUAN : 
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).i</textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label"></label>
		<div class="col-md-4">
		<input type="submit" name="submit" value="Daftar" class="btn btn-default">
		<a href="index.php" class="btn btn-success">Kembali</a>
		</div>
	</div>
		</fieldset>
	</form>
</body>
</html>