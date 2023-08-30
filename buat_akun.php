<?php

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$us = $_POST['usn'];
$pass = $_POST['pasw'];
$telp = $_POST['telp'];

include 'koneksi.php';

$koneksi->query("INSERT INTO `masyarakat` VALUES ('$nik','$nama','$us','$pass','$telp')");

header("location:login.php");