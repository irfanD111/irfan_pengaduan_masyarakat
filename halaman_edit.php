<?php 
//  $isi_laporan = $_POST['isi_laporan'];
$id = $_GET['id'];

include 'koneksi.php';

$query = $koneksi->query("SELECT * FROM `pengaduan` WHERE id_pengaduan='$id'");

$data = $query->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs/bs2/bs1/css/bootstrap.min.css">
</head>
<body>
    <?php   include "navbar.php"; ?>
    <div class="container">
        <br>
        <br>
        <br>
        <form action= "proses_update.php?id=<?=$data['id_pengaduan']?> " method="POST" >
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Edit Laporan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="isi_laporan"><?php echo $data['isi_laporan'] ?></textarea>
            </div>
                <button type="submit" class="btn btn-outline-secondary">UPDATE</button>
        </form>
</div>
</body>
</html>