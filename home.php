<?php 
  session_start();
    if(!isset($_SESSION['nik'])){
      header("location:login.php");
    }

  $koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
  $nik=$_SESSION['nik'];

  // echo $nik;
  $query = $koneksi->query("select * from pengaduan where nik='$nik'");
  $data = $query->fetchAll();
  
    // echo $_SESSION['nik'];
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
<?php  include 'navbar.php'  ?>
<div class="container">
  <br>
   
<h2 style= text-align:center>Selamat Datang <br>Di Pengaduan Masyarakat</h2>
  <br>
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
      <td><a href="halaman_edit.php?id=<?=$pengaduan['id_pengaduan']?>"><button type="button" class="btn btn-outline-info" >U</button></a>
      <br><br>
          <a href="proses_hapus.php?id=<?=$pengaduan['id_pengaduan']?>"><button type="button" class="btn btn-outline-dark">X</button></td></a>

    </tr>
   <?php  }?>
  </tbody>
</table>
</div>
</body>
</html>