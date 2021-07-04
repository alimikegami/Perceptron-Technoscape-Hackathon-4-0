<?php 
require_once "functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Penginapan: </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7c6955c5b0.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header -->
    <?php include 'template/header.php' ?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg-login">
        <path fill="#233049" fill-opacity="1" d="M0,32L60,69.3C120,107,240,181,360,186.7C480,192,600,128,720,106.7C840,85,960,107,1080,144C1200,181,1320,235,1380,261.3L1440,288L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>

    <!-- Content -->
    <div class="container px-4 py-3 mt-2">
        <div class="row justify-content-center">
            <div class="col-md-7 event-box px-4">
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/bbq.jpg" class="d-block w-100 car-image" alt="..." height="400">
                            </div>
                            <!-- <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            </div> -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="row mt-3">
                    <h3 class="mb-3">New Year's Eve BBQ Party!</h3>
                    <h5 class="address-txt mb-3"><i class="fa fa-building me-2"></i> Malang Asri Glamming</h5>
                    <p class="address-txt"><i class="fa fa-location-arrow me-3"></i> Jl. Raya Tawangargo No.1, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65314</p>
                    <h6 class="address-txt mb-3"><i class="fa fa-calendar-check-o me-3"></i>Mulai: 20.00 WITA, 31 Desember 2021</h6>
                    <h6 class="address-txt"><i class="fa fa-calendar-check-o me-3"></i>Berakhir: 00.00 WITA, 1 Januari 2022</h6>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="mb-2">
                        <h5>All About This Event</h5>
                    </div>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel mattis massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed lorem arcu, bibendum ut euismod quis, malesuada eget nisi. Sed et ante nisl. Nunc id justo eu est malesuada egestas sed vel ex. Aenean eget arcu mauris. Donec ornare magna tortor, in rhoncus mauris elementum id.
                    </p>
                </div>
                <hr>
                <div class="row">
                    <div class="col text-center pb-4">
                        <a href="site.php" class="btn back-btn">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include 'template/footer.php'?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>