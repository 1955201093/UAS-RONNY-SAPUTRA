<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>input data anggota</title>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
	  footer
    {
      background-color: #80FF00;
      height: 300px;
      margin-top: -285px;
    
    }
    .bot{
  width: 385px;
  height: 200px;
  position: relative;

  
  margin-left: 71.5%;
  background-color: yellow;
  top: -50px;
}
.bot2{
  width: 575px;
  height: 200px;
  position: relative;
  top: 166px;
  margin-left: 29%;

  background-color: lightblue;
}
.bot3{
  width: 391px;
  height: 200px;
  position: relative;
  top: -266px;

  background-color: lightgreen;
}
.heder{
  width: cover;
  height: 100px;
  text-align: center;
  background-color: rgb(107, 229, 210);
}
.text{
  font-family: sans-serif;
  font-size: 50px;
  font-color:  lightred;
}
</style>

	</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="perpus.jpeg" alt="logo" style="width:80px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="daftar.php">Daftar Anggota</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="input.php">Tambah Anggota</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="koreksi.php">Cari Anggota</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="hapus.php">Hapus Anggota</a>
    </li>
  </ul>
</nav>
<br>
<br>
<br>
<div class="container">

	<h2><center>Form Pendaftaran Anggota Perpustakaan</h2></center>
	<form method="post">
	 <div class="form-group">
      <label for="nomoranggota">Nomor Anggota</label>
      <input type="text" class="form-control" id="nomoranggota" placeholder=" Ketik Nomor Anggota" name="nomoranggota">
    </div>
		<label for="namaanggota">Nama Anggota</label>
			<input type="text" name="namaanggota" id="namaanggota" placeholder="Ketik nama anggota" class="form-control"><br>
		<label for="alamat">Alamat</label>
			<input type="alamat" name="alamat" placeholder="alamat" class="form-control" id="alamat"><br>
	
		<label for="tanggaldaftar">Tanggal Daftar</label>
			<input type="datetime-local" name="tanggaldaftar" placeholder="Tanggal daftar" id="tanggaldaftar" class="form-control"><br>

		<label for="tanggalkadaluarsa">Tanggal Kadaluarsa</label>
			<input type="datetime-local" name="tanggalkadaluarsa" placeholder="Tanggal Kadaluarsa" id="tanggalkadaluarsa" class="form-control"><br>
		<br>
		 <button type="submit" class="btn btn-primary" name="bSimpan">Simpan </button>

	</div>
</form>
</div>
<br>
<br>
<br>

<?php 
if (isset($_POST['bSimpan'])) {
	$nomoranggota=$_POST['nomoranggota'];
	$namaanggota=$_POST['namaanggota'];
	$alamat=$_POST['alamat'];
	$tanggaldaftar=$_POST['tanggaldaftar'];
	$tanggalkadaluarsa=$_POST['tanggalkadaluarsa'];
	$koneksi=new mysqli("localhost","root","","perpustakaan");

	$sql="INSERT INTO `anggota`(`nomoranggota`, `namaanggota`, `alamat`, `tanggaldaftar`, `tanggalkadaluarsa`) VALUES ('".$nomoranggota."','".$namaanggota."', '".$alamat."','".$tanggaldaftar."','".$tanggalkadaluarsa."');";
	
		$q=$koneksi->query($sql);
		if ($q) {
			echo "<h2><center>Selamat Anda Telah Terdaftar !</center></h2>";
		} else {
			echo "<h2><center>Maff Anda Gagal Mendaftar !</center></h2>";
		}	
	}
	?>
	<br>
	<br>
	 <br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer >
  <br>
	<h2><center><font color="white">@2021 | Desain By Ronny Saputra </font></center></h2>
	
</footer>

	</body>
</html>