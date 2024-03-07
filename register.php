
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>
    <link rel="icon" href="image/user-icon.png">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
    <div class="content">
        <div class="card" style="margin-top: 1rem;">
            <div class="row">
                <div class="col m-3 ">
                    <h2>Masukkan Data Pengguna!</h2>
                    <form action="aksi/p_regis.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="namalengkap" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Level</label>
                        <select class="form-select" name="level" aria-label="Default select example">   
                            <option value="peminjam">Pengguna</option>
                        </select>
                    </div>
                    <p class="mt-3">Sudah Memiliki Akun? Klik <a href="index.php" class="btn btn-warning text-white">Disini</a></p>
                    <button type="submit" class="btn btn-primary">Simpan</button>
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