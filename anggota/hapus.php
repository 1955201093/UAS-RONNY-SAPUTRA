<!DOCTYPE html>
<html>
<head>
	<title>Hapus Daftar Anggota Perpustakaan</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="style.css">
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="gaya.css">
	</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="landing/index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
       <a class="nav-link" href="daftar.php">Daftar Anggota</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="input.php">Daftar</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="koreksi.php">Cari Daftar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hapus.php">Hapus</a>
      </li> 
    </ul>
  </div>  
</nav>
<br>
<div class="container">
	<h1><center>Hapus Daftar Anggota Perpustakaan</center></h1><br><br>
	<form method="post">
		<div class="form-grup">
			<label for ="hapus">Ketik Nomor  Anggota Perpustakaan</label>
			<input type="text" class="form-control" name="hapus" id="hapus" placeholder="Ketik Nomor Anggota ">
		</div><br>
		<button type="submit" class="btn btn-primary" name="bhapus"onclick="return confirm('Apakah pustakawan yang dipilih akan di hapus?')">Hapus</button>
		
	</form>
</div>

<?php if (isset($_POST['bhapus'])) {
	$userhapus=$_POST['hapus'];
	$koneksi=new mysqli("localhost","root","","perpustakaan");
	$sql="DELETE FROM `anggota` WHERE `anggota`.`nomoranggota` = '".$userhapus."'";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "<center><h2>Anggota sudah dihapus !</center></h2>";
	} else {
		echo "<center><h2>Anggota gagal dihapus !</center></h2>";
	}
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>  <br>
<br>
<br>
<br>
<br>    
<footer >
    <h2><center><font color="white">@2021 | Kelompok ?</h2></center>

  	</body>
</html>
