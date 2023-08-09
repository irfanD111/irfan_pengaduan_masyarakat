<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                  <a class="nav-link " aria-current="page" href="home.php">Home</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="laporan.php">Buat Laporan</a>
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
<form>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">IsiLaporan</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
   <div class="mb-3">
      <label for="formFile" class="form-label">Foto</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <a href="home.php" class="btn btn-outline-secondary" role="button" data-bs-toggle="button">Buat</a>
</form>
</div>
</body>
</html>