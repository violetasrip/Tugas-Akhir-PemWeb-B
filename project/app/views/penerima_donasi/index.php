<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Penerima Donasi</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= BASEURL; ?>/css/penerima_donasi.css" rel="stylesheet" />
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/Penerima_Donasi">Penerima Donasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>/Profil">Profil Saya</a></li>
                    </ul>
                    <form class="d-flex">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= BASEURL; ?>/Donasi_saya">Donasi Saya</a></div>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Mari Bantu Mereka!</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Demi Memutus Mata Rantai Kemiskinan di Indonesia</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-3 gx-lg-5 row-cols-3 row-cols-md-3 row-cols-xl-3 justify-content-center">
                    <?php foreach($data['penerima_donasi'] as $person): ?>
                        <div class="col mb-5">
                            <div class="card h-80" style="width: 300px;">
                                <!-- <img class="card-img-top" src="<?= $person['foto1']; ?>" alt="..." /> -->
                                <div class="card-body p-2">
                                    <div class="text-center">
                                        <h5 class="fw-bolder"><?= $person['nama']; ?></h5>
                                        <p style="font-size:12px">Terakhir menempuh pendidikan pada tingkat <?= $person['pendidikan']; ?></p> 
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= BASEURL; ?>/Penerima_donasi/detail/<?= $person['id_person'] ?>">Detail Profil</a></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Charity 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= BASEURL; ?>/js/penerima_donasi.js"></script>
    </body>
</html>

