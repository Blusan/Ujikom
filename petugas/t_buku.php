<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Buku</title>
    <link rel="icon" href="image/user-icon.png">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
    <div class="content">
        <div class="card" style="margin-top: 1rem;">
            <div class="row">
                <div class="col m-3 ">
                    <h2>Tambahkan Data Buku</h2>
                    <form action="aksi/pt_buku.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penulis</label>
                        <input type="text" name="penulis" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun Terbit</label>
                        <input type="int" name="tahunterbit" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cover</label>
                        <input type="file" name="tahunterbit" class="form-control">
                    </div>
                    <button type="tambah" class="btn btn-primary">TAMBAH</button>
                    <a href="dbuku.php" type="batal" class="btn bg-danger-subtle">BATAL</a>
                    </div>
                </form>
                
                </div>
                <!-- <div class="col">
                    <img src="image/user-icon.png" width="650" height="650" alt="iconuser">
                </div> -->
            </div>
        </div>
    </div>
</div>
</body>
</html>