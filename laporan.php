<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs/bs2/bs1/css/bootstrap.min.css">

</head>
<body>
  
<?php 
   include "navbar.php";
?>
<br>
<br>
<h2 style= text-align:center>Laporkan <br>Keluh Kesah Anda</h2>
<br>
<div class="container">
<form action= "proses_pengaduan.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">IsiLaporan</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan"></textarea>
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Foto</label>
      <input class="form-control" type="file" id="formFile" name="gambar">
    </div>
    <button type="submit" class="btn btn-outline-secondary">Buat</button>
</form>
</div>
</body>
</html>