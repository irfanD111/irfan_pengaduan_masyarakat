<?php //koneksi php
  $koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
  
  $query = $koneksi->query("select * from pengaduan");
  $data = $query->fetchAll();
  


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/bs2/bs1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporan.php">Buat Laporan</a>
        </li>
        <div class="position-absolute top-5 end-0">  
          <a href="Login.php" class="btn btn-outline-secondary" role="button" data-bs-toggle="button">Login</a>
          <a href="Daftar.php" class="btn btn-outline-secondary" role="button" data-bs-toggle="button">Daftar</a>
        </div>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tanggal</th>
      <th scope="col">NIK</th>
      <th scope="col">isi_laporan</th>
      <th scope="col">foto</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $pengaduan){ ?>
    <tr>
      <th scope="row"><?= $pengaduan ['id_pengaduan']?></th>
      <td><?= $pengaduan ['tgl__pengaduan']?></td>
      <td><?= $pengaduan ['nik']?></td>
      <td><?= $pengaduan ['isi_laporan']?></td>
      <td><?= $pengaduan ['foto']?></td>
      <td><?= $pengaduan ['status']?></td>

    </tr>
   <?php  }?>
  </tbody>
</table>
</div>
</body>
</html>