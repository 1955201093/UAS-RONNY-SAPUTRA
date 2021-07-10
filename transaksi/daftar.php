<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel daftar</title>
   <style type="text/css">
    .color{
      background-color: rgb(107, 229, 210);
    }
  </style>
 <link rel="stylesheet" type="text/css" href="style.css"><meta charset="utf-8">
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
<br>
	<?php 
$koneksi=new mysqli("localhost","root","","perpustakaan");
$sql="SELECT * FROM `transaksi`";
$q=$koneksi->query($sql);
$rekord=$q->fetch_array();
?>
<br>
	<div class="container">
  <h2> <CENTER>Daftar Transaksi Perpustakaan</h2></CENTER>
            <br>
            <br>  
  <table class="table table-bordered table-striped">
    <thead>
      <tr class="color">
        <th>ID Transaksi Perpustakaan</th>
        <th>Kode Pustaka </th>
		    <th>Nomor Anggota </th>
         <th>Kode Pustakawan Yang Meminjam </th>
         <th>Kode Pustakawan Yang Mengembalikan </th>
         <th>Tanggal Pinjam </th>
          <th>Tanggal Kembali </th>
		
      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekord['idtransaksi'];?></td>
		    <td><?php echo $rekord['kodepustaka'];?></td>
        <td><?php echo $rekord['nomoranggota'];?></td>
        <td><?php echo $rekord['kodepustakawanpinjam'];?></td>
        <td><?php echo $rekord['kodepustakawankembali'];?></td>
        <td><?php echo $rekord['tanggalpinjam'];?></td>
        <td><?php echo $rekord['tanggalkembali'];?></td>
      </tr><?php } while($rekord =$q->fetch_array());?>
    </tbody>
  </table>
</div>
<br>
<br>
  <br>  
  <br>  
  <br>  
  <br>
   <br>  
  <br>  
  <br>  
  <br> 
  <br>  
  <br>  
  <br>   
<footer >
  <h2><center><font color="white">@2021 | Desain By Ronny Saputra ?</h2></center>


</body>
</html>
