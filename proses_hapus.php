<?php 
    $id = $_GET['id'];
    include 'koneksi.php';

    $koneksi->query("DELETE FROM pengaduan WHERE id_pengaduan='$id'");
    
    header("location:home.php");


?>