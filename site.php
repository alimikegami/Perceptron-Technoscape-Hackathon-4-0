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
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="hsla(219,35%,21%,1)" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,53.3C384,32,480,32,576,64C672,96,768,160,864,170.7C960,181,1056,139,1152,112C1248,85,1344,75,1392,69.3L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg> -->

    <!-- Content -->
    <div class="container booking-form px-4">
        <div class="row justify-content-center mt-3 py-4">
            <div class="col-md-8">

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/glamping.jpg" class="d-block w-100 car-image" alt="...">
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
                <h1 class="mt-4">Glamping Malang Asri</h1>
                <p>Jl. Raya Tawangargo No.1, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65314</p>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>

                <div class="row mt-4">
                    <div class="col-3">
                        <button type="button" class="btn login-button" data-bs-toggle="modal" data-bs-target="#ulasModal">Ulas</button>
                    </div>
                </div>

                <div class="modal fade" id="ulasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ulas: Glamping Malang Asri</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <img src="img/glamping.jpg" class="img-fluid" alt="...">
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col text-center bintang-kuning" id="testBintang">
                                        <ion-icon name="star" id="bintangSatu"></ion-icon>
                                        <ion-icon name="star" id="bintangDua"></ion-icon>
                                        <ion-icon name="star" id="bintangTiga"></ion-icon>
                                        <ion-icon name="star" id="bintangEmpat"></ion-icon>
                                        <ion-icon name="star" id="bintangLima"></ion-icon>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col text-center">
                                        <p id="review">Puas Sekali</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">`
                                        <label for="ulasan_deskripsi" class="form-label">Ulasan Kamu</label>
                                        <input type="text" class="form-control align-text-top" style="height: 250px;" id="ulasan_deskripsi" name="review">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="" style="background-color: #233049;" data-bs-dismiss="modal">Tambah Ulasan</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col book-input-form">
                <h2 class="mt-3">Rp200.000,00/Malam</h2>
                <form action="">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Check In</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Check Out</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="exampleInputEmail1" class="form-label">Jumlah Tamu</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mt-3">
                        <button class="btn login-button" id="check-availability" type="button" onclick="checkAvailability(1, 1, '2021-06-01', '2021-06-02', 1)">Check Availability</button>
                        <div class="row mt-3" id="price" hidden>
                            <div class="col">
                                <span id="left"></span>
                            </div>
                            <div class="col text-end">
                                <span id="right"></span>
                            </div>
                        </div>
                        <div class="row mt-3" id="disinf" hidden>
                            <div class="col text-start">
                                <span id="left-disinf"></span>
                            </div>
                            <div class="col text-end">
                                <span id="right-disinf"></span>
                            </div>
                        </div>
                        <div class="row mt-3" id="service" hidden>
                            <div class="col text-start">
                                <span id="left-service"></span>
                            </div>
                            <div class="col text-end">
                                <span id="right-service"></span>
                            </div>
                        </div>
                        <hr id="horizontal-line" hidden>
                        <div class="row mt-3" id="total" hidden>
                            <div class="col text-start">
                                <span id="left-total"></span>
                            </div>
                            <div class="col text-end">
                                <span id="right-total"></span>
                            </div>
                        </div>
                        <a class="btn login-button mt-5" id="book" type="button" href="payment_page.php" hidden>Book Now</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <hr>
                <div class="mb-3">
                    <h3>Deskripsi</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel mattis massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed lorem arcu, bibendum ut euismod quis, malesuada eget nisi. Sed et ante nisl. Nunc id justo eu est malesuada egestas sed vel ex. Aenean eget arcu mauris. Donec ornare magna tortor, in rhoncus mauris elementum id.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                <hr>
                <h3>Event</h3>
                <div class="col mt-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/bbq.jpg" alt="" srcset="" width="300">
                        </div>
                        <div class="col-5 ms-4">
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: large;" class="fw-bold">New Year's Eve BBQ Party!</p>
                                    <p>Mulai: 31-Desember-2021</p>
                                    <p>Hingga: 1-Januari 2022</p>
                                </div>

                            </div>
                            <!-- <div class="row">
                                <div class="col">
                                    <p>Check in/out cepat banget. Masih sepi banget, kolam agak kotor tapi fine. Yang paling bikin senang, dekat sama tempat-tempat gaul seminyak.</p>
                                </div>
                            </div> -->
                        </div>
                        <div class="col ">
                            <a class="btn selengkapnya" href="event_details.php" role="button">Lihat Selengkapnya</a>
                        </div>
                        <hr class="mt-3">
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/firecamp.jpg" alt="" srcset="" width="300">
                        </div>
                        <div class="col-5 ms-4">
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: large;" class="fw-bold">Campfire Night</p>
                                    <p>Mulai: 22-Januari-2021</p>
                                    <p>Hingga: 25-Januari 2021</p>
                                </div>

                            </div>
                            <!-- <div class="row">
                                <div class="col">
                                    <p>Check in/out cepat banget. Masih sepi banget, kolam agak kotor tapi fine. Yang paling bikin senang, dekat sama tempat-tempat gaul seminyak.</p>
                                </div>
                            </div> -->
                        </div>
                        <div class="col ">
                            <a class="btn selengkapnya" href="event_details.php" role="button">Lihat Selengkapnya</a>
                        </div>
                        <hr class="mt-3">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        function checkAvailability(user_id, accommodation_id, check_in, check_out, guests) {
            $.ajax({
                url: "checkAvailability.php", //the page containing php script
                type: "post", //request type,
                dataType: 'json',
                data: {
                    userid: user_id,
                    accid: accommodation_id,
                    in: check_in,
                    out: check_out,
                    guest_amount: guests
                },
                success: function(result) {
                    $('#price').removeAttr('hidden');
                    $("#check-availability").attr("hidden", true);
                    $('#book').removeAttr('hidden');
                    $("#left").text("1 Malam x Rp20.000,00");
                    $("#right").text("Rp20.000,00");
                    $('#disinf').removeAttr('hidden');
                    $("#left-disinf").text("Sterilisasi");
                    $("#right-disinf").text("Rp200.000,00");
                    $('#service').removeAttr('hidden');
                    $("#left-service").text("Service");
                    $("#right-service").text("Rp200.000,00");
                    $('#horizontal-line').removeAttr('hidden');
                    $('#total').removeAttr('hidden');
                    $("#left-total").text("Total");
                    $("#right-total").text("Rp200.000,00");
                }
            });
        }
    </script>
    <?php include 'template/footer.php'; ?>