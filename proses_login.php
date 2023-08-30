<?php
 session_start();
 include "koneksi.php";
 $un = $_POST['username'];
 $pw = $_POST['pw'];


 $query = $koneksi->query("SELECT * FROM `masyarakat` WHERE username='$un' AND  password='$pw' ");
 $jumlahbaris = $query->rowCount();

 if($jumlahbaris > 0){
    $data =$query->fetch();

    $_SESSION['nik'] = $data ['nik'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['level'] = 'masyarakat';

    header("location:home.php");

 }else{
   $query = $koneksi->query("SELECT * FROM `petugas` WHERE username='$un' AND  password='$pw' ");
   $jumlahbaris = $query->rowCount();
  
   if($jumlahbaris > 0){
      $data =$query->fetch();

      $_SESSION['username'] = $_POST['username'];
      $_SESSION['id_petugas'] = $data['id_petugas'];
      $_SESSION['level'] = $data['level'];

  
      header("location:admin.php");
  

    
       }else{
         header("location:login.php?");
       }
 }




