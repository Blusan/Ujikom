<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link rel="icon" href="image/user-icon.png">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
    <div class="content">
        <div class="card" style="margin-top: 11rem;">
            <div class="row">
                <div class="col m-3 ">
                    <h2>Login Perpustakaan!</h2>
                    <?php
                        if (isset($_GET['pesan'])) {
                            if($_GET['pesan']=="gagal") {
                            echo"<div class='alert alert-danger'>Username atau Password Anda Salah</div>";
                            }
                        }
                    ?>
                    <form action="aksi/p_login.php" method="post" autocomplete="OFF">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <p>Belum Memiliki Akun? <a href="register.php" class="btn btn-warning text-white">Daftar!</a></p>
                        <button type="submit" class="btn btn-primary">Login</button>

                    </form>
                    
                    </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>