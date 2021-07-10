<!DOCTYPE html>
<html lang="en">
<head>
  <title>Koreksi Transaksi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

<div class="container">
  <br>  <br>
  <h2><center>Cari Daftar Transaksi Perpustakaan</h2></center>
  <form method="post">
    <div class="form-group">
      <label for="namadikoreksi">Ketik Nomor ID Transaksi Perpustakaan</label>
      <input type="text" class="form-control" id="namadikoreksi" placeholder="Ketik nomor Id Transaksi" name="namadikoreksi">
    </div>
      <button type="submit" class="btn btn-primary" name="bkoreksi" onclick="return confirm('Apakah rekord dengan kata kunci yang terpilih dikoreksi ?')">Koreksi</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bkoreksi'])) {
  $namadikoreksi=$_POST['namadikoreksi'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");
  $sql="SELECT * FROM transaksi WHERE idtransaksi = '".$namadikoreksi."'";
  $q=$koneksi->query($sql);
  $rekord=$q->fetch_array();
  if (empty($rekord)) {
    echo "Rekord tidak ditemukan !";
    exit();
  } else {
    ?>
<div class="container">
  <h2>Daftar Transaksi Perpustakaan</h2><br>
  <form method="post">
    <div class="form-group">
      <label for="idtransaksi">Nomor ID Transaksi </label>
      <input type="text" class="form-control" id="idtransaksi"  name="idtransaksi" value="<?php echo $rekord['idtransaksi'];?>" readonly>
    </div>
  <div class="form-group">
      <label for="kodepustaka"> Kode Pustaka </label>
      <input type="text" class="form-control" id="kodepustaka"  name="kodepustaka" value="<?php echo $rekord['kodepustaka'];?>">
    </div>
   <div class="form-group">
      <label for="nomoranggota">Nomor Anggota</label>
      <input type="text" class="form-control" id="nomoranggota" name="nomoranggota"
    value="<?php echo $rekord['nomoranggota'];?>">
    </div>
    <div class="form-group">
      <label for="kodepustakawanpinjam">Kode Pustakawan Yang meminjam</label>
      <input type="text" class="form-control" id="kodepustakawanpinjam" name="kodepustakawanpinjam"
    value="<?php echo $rekord['kodepustakawanpinjam'];?>">
    </div>
    <div class="form-group">
      <label for="tanggalpinjam">Tanggal Pinjam</label>
      <input type="text" class="form-control" id="tanggalpinjam" name="tanggalpinjam"
    value="<?php echo $rekord['tanggalpinjam'];?>">
    </div>
     <div class="form-group">
      <label for="tanggalkembali">Tanggal Kembali</label>
      <input type="text" class="form-control" id="tanggalkembali" name="tanggalkembali"
    value="<?php echo $rekord['tanggalkembali'];?>">
    </div>
  <br><br> 
   
    <?php
  } //end if empty
}
if (isset($_POST['bSimpan'])) {
  $idtransaksi=$_POST['idtransaksi'];
  $kodepustaka=$_POST['kodepustaka'];
  $nomoranggota=$_POST['nomoranggota'];
  $kodepustakawanpinjam=$_POST['kodepustakawanpinjam'];
  $tanggalpinjam=$_POST['tanggalpinjam'];
  $tanggalkembali=$_POST['tanggalkembali'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");
  $sql="UPDATE `pustakawan` SET `idtransaksi` = '$idtransaksi', `idtransaksi` = '$idtransaksi',  `nomoranggota` = '$nomoranggota',  `kodepustakawanpimjam` = '$kodepustakawanpimjam' ,  `tanggalpinjam` = '$tanggalpinjam',  `tanggalkembali` = '$tanggalkembali' WHERE `transaksi`.`idtransaksi` = '$idtransaksi';";
  $q=$koneksi->query($sql);
  if ($q) {
    echo "Rekord Transaksi sudah tersimpan !";
  } else {
    echo "Rekord Transaksi gagal tersimpan !";
  } 
}
?>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<footer>
   <h2><center><font color="white">@2021 | Desain By Ronny Saputra ?</h2></center>

</footer>