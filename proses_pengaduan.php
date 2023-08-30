<?php 
session_start();
$nik = $_SESSION['nik'];
$isi = $_POST['isi_laporan'];
$nama_foto = $_FILES['gambar']['name'];
$asal_foto = $_FILES['gambar']['tmp_name'];


include 'koneksi.php';
$tanggal = date('y-m-d');

$koneksi->query("insert into pengaduan values ('','$tanggal','$nik','$isi','$nama_foto','proses')");
 
echo 'laporan terkirim';

move_uploaded_file($asal_foto,"image/$nama_foto");
 
header("location:home.php");
?>


