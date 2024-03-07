<!-- <?php
include '../config.php';
session_start();

$level = $_SESSION['level'];

if(!isset($level)){
   header('location:../index.php');
}
?> -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link rel="icon" href="image/user-icon.png">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-white">
    <div class="container">
        <h2 class="my-4">PERPUSTAKAAN DIGITAL</h2>
        <div class="card">
            <div class="card-body ms-auto">
                <a href="index_ptgs.php" class="btn">Beranda</a>
                <a href="dbuku.php" class="btn">Data Buku</a>
                <a href="#" class="btn">Riwayat</a>
                <a href="laporan.php" class="btn">Laporan</a>
                <a href="../logout.php" class="btn">Logout</a>
                
            </div>
        </div>
    </div>