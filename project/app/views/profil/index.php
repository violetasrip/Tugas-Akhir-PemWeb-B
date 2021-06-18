<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profil Perusahaan</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= BASEURL; ?>/css/profil.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Charity.in</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>/Beranda">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>/Penerima_donasi">Penerima Donasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>/Donasi_saya">Donasi Saya</a></li>
                    </ul>
                    <form class="d-flex">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" aria-current="page" style="background-color:#212529;color:white;" href="<?= BASEURL; ?>/Profil">Profil Saya</a></div>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5" style="margin-top:-3%;">
                <div class="text-center text-white">
                    <h1 class="fw-bolder"><?= $data['user']['nama_p']; ?></h1>
                    <p class="lead" style="width: 60%; margin-left:19%"><?= $data['user']['motto']; ?></p>
                </div>
            </div>
        </header>
        <!-- About section-->
        <section id="about" style="margin-top:3%; margin-left:23%" >
            <div class="card mb-5" style="width: 70%;" >
                <div class="card-header">
                    PROFILE PERUSAHAAN
                </div>
                <div class="card-body" >
                    <table>
                        <tr>
                            <td style="width: 200px;">Nama Perusahaan</td>
                            <td>:</td>
                            <td><?= $data['user']['nama_p']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?= $data['user']['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Call Center</td>
                            <td>:</td>
                            <td><?= $data['user']['telepon']; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?= $data['user']['alamat_p']; ?></td>
                        </tr>
                    </table>
                    <br>
                    <form action="<?= BASEURL; ?>/Keluar" method="POST">
                        <input name="logout" id="logout" class="btn btn-outline-dark mt-auto" style="margin-left:45%;" type="submit" value="Keluar">
                    </form>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= BASEURL; ?>/js/profil.js"></script>
    </body>
</html>
