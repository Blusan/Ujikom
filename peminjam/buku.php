
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
   .tittle {
      text-transform: uppercase;
      padding: 1rem;
      text-align: center;
   }

   .container{
   justify-content: center;
   gap: 5rem;
   max-width: 1200px;
   margin:0 auto;
}

.container .box p{
   font-size: 1.5rem;
   color: #666;
}
</style>
<body>
    <?php include 'header.php';?>
    <div class="container">
        <h1 class="tittle">DATA BUKU</h1>
        <?php
        include '../config.php';
         $select_users = mysqli_query($conn, "SELECT * FROM buku ") or die('query failed');
         while($fetch_users = mysqli_fetch_assoc($select_users)){
      ?>
    <div class="box" >
         <p> IDbuku : <span><?php echo $fetch_users['IDbuku']; ?></span> </p>
         <p> Judul : <span><?php echo $fetch_users['judul']; ?></span> </p>
         <p> Penulis : <span><?php echo $fetch_users['penulis']; ?></span> </p>
         <p> Penerbit : <span><?php echo $fetch_users['penerbit']; ?></span> </p>
         <p> Tahun terbit : <span><?php echo $fetch_users['tahunterbit']; ?></span> </p>
         <a href="pinjam.php" class="btn btn-danger">PINJAM</a>
      </div>        
      <?php
         }
      ?>
</body>
</html>