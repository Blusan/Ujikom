<?php
include '../config.php';
    if(isset($_GET['delete'])){
        $delete = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM `users` WHERE IDuser = '$delete'") or die('query failed');
        header('location:index_adm.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Akun Pengguna</title>
   <link rel="icon" href="image/user-icon.png">
   <link rel="stylesheet" type="text/css" href="style.css">
   <!-- <link rel="stylesheet" href="styleakun.css"> -->
</head>
<style>
   .title {
      text-transform: uppercase;
      padding: 1rem;
      text-align: center;
   }

   .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 30rem);
   justify-content: center;
   gap: 5rem;
   max-width: 1200px;
   margin:0 auto;
}

.box-container .box p{
   font-size: 1.5rem;
   color: #666;
}

.box-container .box p span{
   color: #19a7ce;
}
</style>
<body>
   
<?php include 'header.php'; ?>
<h1 class="title">Akun Pengguna</h1>

<div class="box-container">
      <?php
         $select_users = mysqli_query($conn, "SELECT * FROM users ") or die('query failed');
         while($fetch_users = mysqli_fetch_assoc($select_users)){
      ?>
      <div class="box" >
         <p> user id : <span><?php echo $fetch_users['IDuser']; ?></span> </p>
         <p> username : <span><?php echo $fetch_users['username']; ?></span> </p>
         <p> email : <span><?php echo $fetch_users['email']; ?></span> </p>
         <p> user type : <span style="color:<?php if($fetch_users['level'] == 'admin'){ echo 'red'; } ?>"><?php echo $fetch_users['level']; ?></span> </p>
         <a href="akun.php?delete=<?php echo $fetch_users['IDuser']; ?>">Hapus Akun</a>
      </div>
      <?php 
      } 
      ?>
</div>
</body>
</html>