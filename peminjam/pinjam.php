<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peminjaman Buku</title>
    <link rel="icon" href="image/user-icon.png">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<div class="container">
    <div class="content">
        <div class="card" style="margin-top: 1rem;">
            <div class="row">
                <div class="col m-3 ">
                    <?php 
                    if(isset($_GET['IDbuku'])){
                        $idbuku =$_GET['IDbuku'];
                    }
                    else{
                        die("Error");
                    }
                    include '../config.php';
                    $query = mysqli_query($conn, "SELECT * FROM buku WHERE IDbuku = '$idbuku' ");
                    $result = mysqli_fetch_array($query);
                    ?>
                    <h2>Isi Data Peminjaman</h2>
                    <form action="aksi/pinjam.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">IDbuku</label>
                        <input type="text" name="IDbuku" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Peminjaman</label>
                        <input type="date" name="tgl_peminjaman" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Kembali</label>
                        <input type="date" name="tgl_pengembalian" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="level" >
                            <option value="">--Buku Telah Di Pinjam</option>
                        </select>
                    </div>
                    <button type="tambah" class="btn btn-primary">TAMBAH</button>
                    <a href="buku.php" type="batal" class="btn bg-danger-subtle">BATAL</a>
                    </div>
                </form>          
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>