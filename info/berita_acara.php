<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <!-- library animasi css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- my css -->

    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/font-family.css">
    <link rel="stylesheet" href="../css/update_terakhir.css">
    <link rel="stylesheet" href="../css/info/berita_acara.css">

    <title>Berita & Acara | Smk Negeri 4 Payakumbuh</title>
</head>

<body>
    <div class="wrap">

        <!-- include navbar -->
        <?php include '../layout/navbar.php'; ?>
        <!-- akhir navbar -->

        <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid text-center"></div>
        <!-- akhir jumbotron -->

        <!-- konten -->
        <div class="konten bg-light">
            <div class="row">
                <div class="col-lg-8">
                    <div class="konten" data-aos="fade-up" data-aos-duration="1000">
                        <div class="container berita">
                            <div class="row pt-3">
                                <div class="col-6">
                                    <p class="header-berita" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1000">News</p>
                                </div>
                                <div class="col-6">
                                    <div class="dropdown" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1000">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Kategori
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="judul">
                                <h1>Siswa mendapat medali emas</h1>
                            </div>
                            <div class="row foto_bio">
                                <div class="col-lg-4">
                                    <img class="foto_topik" src="../img/slider-1.jpg" alt="">
                                </div>
                                <div class="col-lg-8">
                                    <p data-aos="fade">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, quia fuga expedita eveniet dolore quo ut facilis, quisquam quis, impedit voluptatem. Ab earum soluta deserunt? Minima laudantium ipsum incidunt possimus.</p>
                                    <p>20 Agustus 2021</p>
                                    <a href="berita_acara_detail.php">Lihat selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="container berita">
                            <div class="judul">
                                <h1>Siswa mendapat medali emas</h1>
                            </div>
                            <div class="row foto_bio">
                                <div class="col-lg-4">
                                    <img class="foto_topik" src="../img/slider-1.jpg" alt="">
                                </div>
                                <div class="col-lg-8">
                                    <p data-aos="fade">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, quia fuga expedita eveniet dolore quo ut facilis, quisquam quis, impedit voluptatem. Ab earum soluta deserunt? Minima laudantium ipsum incidunt possimus.</p>
                                    <p>20 Agustus 2021</p>
                                    <a href="berita_acara_detail.php">Lihat selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php include '../layout/update_terakhir.php'; ?>
                </div>
            </div>
        </div>
        <!-- akhir konten -->

        <!-- footer -->
        <div class="footer bg-dark text-center text-light py-4">
            <p>&copy; SamSam Tech. All reversed</p>
        </div>
        <!-- akhir footer -->


    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>