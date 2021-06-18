<?php $checkbox = ""; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Charity.in | Masuk</title>
  <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/masuk.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?= BASEURL; ?>/img/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body" style="margin-right: 0%;">
              <p class="login-card-description">Selamat Datang!</p>
              <div class="row">
                <div style="width:320px;margin-left:3%;">
                <?= Flasher::flash(); ?>
                </div>
              </div>
              <form action="<?= BASEURL; ?>/Masuk/login" method="POST">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="psw" id="password" class="form-control" placeholder="***********">
                  </div>
                  <div class="custom-control custom-checkbox small mb-4">
                    <input type="checkbox" name="checkbox" value="1" <?php if($checkbox == '1') echo "checked"?> class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Ingat Password</label>
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Masuk">
                </form>
                <p class="login-card-footer-text">Belum punya akun? <a href="<?= BASEURL; ?>/Daftar" class="text-reset"><b>Daftar Akun</b></a></p>
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
