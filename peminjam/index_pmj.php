<?php
include '../config.php';
session_start();

$level = $_SESSION['level'];

if(!isset($level)){
   header('location:../index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Halaman Admin</title>
</head>
<style>
.home .content{
  max-width: 60rem;
  text-align: center;
  text-transform: uppercase;
  margin: auto;
}

.home.content h3{
  font-size: 6rem;
  text-transform: uppercase;
  color: white;
}

.home.content p{
  padding:1rem;
  line-height: 2.5;
  
  font-size: 1.7rem;
}</style>
<body>
  <?php
include 'header.php';
?>
  <div class="row my-3">
    <section class="home">
      <div class="content">
      <?php
         $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
         if($fetch_users = mysqli_fetch_assoc($select_users)){
      ?>
         <h3>Selamat Datang <?php echo $fetch_users['namalengkap'];?></h3>
         <p style="font-size: 20px;">Selamat datang di Surganya ilmu pengetahuan. Lihatlah Buku-Buku berkualitas yang berguna untuk menemani proses belajarmu.</p>
      </div>
      <?php 
      }
      ?>
   </section>
  
        <!-- <div class="col-sm-6">
                <img src="..image/??.png" width="305" alt="iconhome">
            </div> -->
        </div>
</div>
</body>
</html>