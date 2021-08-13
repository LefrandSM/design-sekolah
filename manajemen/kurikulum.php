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
    <link rel="stylesheet" href="../css/manajemen/kurikulum.css">

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
        <div class="row">
            <div class="col-lg-8">
                <div class="konten" data-aos="fade-up" data-aos-duration="1000">
                    <div class="container">
                        <h1>Kurikulum</h1>
                        <span class="garis-bawah mb-3" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500"></span>
                        <img src="../img/kurikulum/kurikulum-2013.png" width="200px" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?php include '../layout/update_terakhir.php'; ?>
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