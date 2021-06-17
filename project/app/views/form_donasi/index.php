<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Charity.in | Form Donasi</title>
  <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/form_donasi.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?= BASEURL; ?>/img/donasi.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body" style="margin-right: 0%;">
              <p class="login-card-description">Make a Change!</p>
              <form action="#!">
                  <div>
                    <p lass="login-card-description" >Memfasilitasi sampai jenjang :</p>
                  </div>
                  <select class="form-select form-control mb-3" aria-label="Default select example" style="width:325px;">
                    <!-- <option selected>Pilih jenjang</option> -->
                    <option value="1">SD</option>
                    <option value="2">SMP</option>
                    <option value="3">SMA</option>
                  </select>
                  <div class="form-group">
                    <label for="nominal" class="sr-only">Nominal per Semester</label>
                    <input class="form-control" placeholder="Masukkan Nominal per Semester">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Donasi">
                </form>
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
