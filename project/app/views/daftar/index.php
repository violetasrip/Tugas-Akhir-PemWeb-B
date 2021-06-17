<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Charity.in | Daftar Akun</title>
  <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/daftar.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?= BASEURL; ?>/img/daftar.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body" style="margin-top: 0%;margin-bottom: 0%;">
              <p class="login-card-description">Daftar Sekarang!</p>
              <form action="#!">
                  <div class="form-group">
                    <label for="nama" class="sr-only">Nama Perusahaan</label>
                    <input class="form-control" placeholder="Nama Perusahaan">
                  </div>
                  <div class="form-group">
                    <label for="alamat" class="sr-only">Alamat</label>
                    <input class="form-control" placeholder="Alamat Perusahaan">
                  </div>
                  <div class="form-group">
                    <label for="nomor" class="sr-only">Nomor</label>
                    <input class="form-control" placeholder="0356-******">
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <input class="btn btn-block login-btn mb-4" type="button" value="Daftar Akun">
                </form>
                <p class="login-card-footer-text">Sudah punya akun? <a href="<?= BASEURL; ?>/Masuk" class="text-reset"><b>Masuk</b></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
