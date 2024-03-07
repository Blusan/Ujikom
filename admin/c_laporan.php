<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
    <table class="table my-3">
    <thead class="table table-warning">
        <tr>
            <th>IDuser</th>
            <th>Username</th>
            <th>Email</th>
            <th>namalengkap</th>
            <th>alamat</th>
            <th>level</th>
            </tr>
    </thead>
    <?php 
    include '../config.php';
    $data = mysqli_query($conn, "SELECT * FROM users" );
    while ($d= mysqli_fetch_array($data)){
    ?>
    <tbody>
    <tr>
            <th <?php echo $d['IDuser'];?></th>
            <th <?php echo $d['namalengkap'];?>Nama Lengkap</th>
            <th <?php echo $d['username'];?>Username</th>
            <th <?php echo $d['email'];?>Email</th>
            <th <?php echo $d['alamat'];?>Alamat</th>
            <th <?php echo $d['level'];?>Level</th>
            </tr>
    </tbody>
    <?php
    }
    ?>
    </table>
</div>
<div class="row"
<a href="dbuku.php" type="batal" class="btn bg-danger-subtle">Kembali</a>
</div>
<script> window.print()    </script>
</body>
</html>