<?php
include "koneksi.php";

	$nisa = $_GET['nis'];

	if(isset($_POST['submit'])) {

	$nisn = $_POST['nis'];
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

	$sql = "UPDATE peserta_ppdb SET nis='$nisn', nama='$nama', tempat_lahir='$tempat', id_jk='$jk', id_agama='$agama', asal_sekolah='$asal_sekolah', alamat='$alamat', no_telp='$no', nama_ortu='$nama_ortu', id_penghasilan_ortu='$penghasilan' WHERE nis='$nisa'";

	$hasil = mysqli_query($con, $sql);

	if ($hasil) {
		echo "Perubahan telah berhasil ditambahkan";
	}else{
		echo "Perubahan gagal ditambahkan";
	}
}

	$sql = "SELECT nis,nama,tempat_lahir,tgl_lahir,id_jk,id_agama,asal_sekolah,alamat,no_telp,nama_ortu,id_penghasilan_ortu FROM peserta_ppdb WHERE nis='$nisa'";

	$eks = mysqli_query($con, $sql);
	$hasil = mysqli_fetch_array($eks); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
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
			<legend><h3 class="text-center"><span class="fa fa-user"> FORM EDIT PESERTA PPDB</span></h3></legend>
			<div class="form-group">
				<label class="col-md-4 control-label">Nomor Induk Siswa Nasional (NISN) :</label>
				<div class="col-md-4">
					<input type="text" name="nis" placeholder="Masukkan NISN" class="form-control input-md" value="<?php echo $hasil['nis']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label">Nama Peserta :</label>
				<div class="col-md-4">
					<input type="text" name="nama" placeholder="Masukkan Nama Peserta" class="form-control input-md"  value="<?php echo $hasil['nama']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label">Tempat Lahir :</label>
				<div class="col-md-4">
					<input type="text" name="tempat_lahir" placeholder="contoh : Madiun" class="form-control input-md" value="<?php echo $hasil['tempat_lahir']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label">Tgl Lahir :</label>
				<div class="col-md-4">
					<input type="date" name="tgl_lahir" class="form-control input-md" value="<?php echo $hasil['tgl_lahir']; ?>">
				</div>
			</div>
	<div class="form-group">
  		<label class="col-md-4 control-label">Jenis Kelamin :</label>
  		<div class="col-md-2">
  			<select name="jenis_kelamin" class="form-control">
  				<option value="<?php echo $hasil['id_jk'] ?>"><?php echo $hasil['id_jk']; ?></option>
      			<option value="1">Laki-Laki</option>
      			<option value="2">Perempuan</option>
    		</select>
  		</div>
	</div>
	<div class="form-group">
  		<label class="col-md-4 control-label">Agama :</label>
  		<div class="col-md-2">
  			<select name="agama" class="form-control">
  				<option value="<?php echo $hasil['id_agama'] ?>"><?php echo $hasil['id_agama']; ?></option>
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
    		<textarea class="form-control" name="asal_sekolah" value="<?php echo $hasil['asal_sekolah']; ?>">Asal Sekolah</textarea>
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
  			<input name="no_telp" type="text" placeholder="No WA/Telegram/FB" class="form-control input-md" value="<?php echo $hasil['no_telp'] ?>">
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
			<input type="text" name="nama_ortu" class="form-control input-md" value="<?php echo $hasil['nama_ortu'] ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label">Penghasilan Orang Tua</label>
		<div class="col-md-4">
			<select name="penghasilan_ortu" class="form-control">
				<option value="<?php echo $hasil['id_penghasilan_ortu'] ?>"><?php echo $hasil['id_penghasilan_ortu']; ?></option>
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
			<input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-default">
		</div>
	</div>
</body>
</html>
