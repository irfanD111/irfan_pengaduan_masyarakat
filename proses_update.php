<?php

    include "koneksi.php";
    $isi = $_POST['isi_laporan'];
    $id = $_GET['id'];

    $query = $koneksi->query("UPDATE pengaduan SET isi_laporan='$isi' where id_pengaduan= 
    '$id'");

    header("location:home.php")



?>




