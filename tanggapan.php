<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</div>
<br>
<br>
<h2 style= text-align:center>Beri Tanggapan</h2>
<br>
<div class="container">
<form action= ".php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">isi tanggapan</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan"></textarea>
    </div>
         Status:
         <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">selesai</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">proses</label>
</div>
<br><br>
            <button type="submit" class="btn btn-outline-secondary">selesai</button>
            <a class="btn btn-outline-secondary" href="admin.php" role="button">kembali</a>

</form>
</div>
</body>
</html>
