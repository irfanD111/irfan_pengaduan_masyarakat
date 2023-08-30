<?php 
  session_start();
    if(!isset($_SESSION['id_petugas'])){
      header("location:login.php");
    }

  $koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
//   $id_p=$_SESSION['id_petugas'];
//   $level=$_SESSION['level'];


  $query = $koneksi->query("select * from pengaduan ");
  $data = $query->fetchAll();
  
    // echo $_SESSION['id_petugas'];
    // echo $_SESSION['level'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/bs2/bs1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="container-fluid position-relative">
    <div class="position-absolute top-0 start-0">
      <a class="navbar-brand" href="">
        <img src="image/pengaduan.png" alt="Bootstrap" width="65" height="65">
      </a>
    </div>
  </div>
    <ul class="nav nav-underline nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link"  href="logout.php">logout</a>
      </li>
    </ul>


  <br><br><br><br>
  <h2 >Laporan Masyarakat</h2>
  <br>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tanggal</th>
      <th scope="col">NIK</th>
      <th scope="col">isi_laporan</th>
      <th scope="col">foto</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $pengaduan){ ?>
    <tr>
      <th scope="row"><?= $pengaduan ['id_pengaduan']?></th>
      <td><?= $pengaduan ['tgl_pengaduan']?></td>
      <td><?= $pengaduan ['nik']?></td>
      <td style ="text-align:justify;"><?= $pengaduan ['isi_laporan']?></td>
      <td><img src ="image/<?= $pengaduan ['foto']?>" height ="100px" width="100px" style="border-radius:10px;"></td>
      <td><?= $pengaduan ['status']?></td>
      <td><a href="tanggapan.php?id=<?=$pengaduan['id_pengaduan']?>"><button type="button" class="btn btn-outline-info" style="margin:5px">Tanggapi</button></a>

    </tr>
   <?php  }?>
  </tbody>
</table>
</div>
</body>
</html>
