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
    <div class="container booking-form px-4 py-3 mt-4">
        <div class="row">
            <div class="col-md-7 text-center payment-box me-3">
                <div class="mt-3">
                    <h3>Choose Payment Method</h1>
                </div>
                <div class="row mt-4 text-start">
                    <span>Transfer Bank</span>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="row py-2">
                            <div class="col-md-3">
                                <img src="Img/bca.png" alt="" height="25">
                            </div>
                            <div class="col-md-7 text-start">
                                BCA
                            </div>
                            <div class="col">
                                <span><i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="row py-2">
                            <div class="col-md-3">
                                <img src="Img/bni.png" alt="" height="25">
                            </div>
                            <div class="col-md-7 text-start">
                                BNI
                            </div>
                            <div class="col">
                                <span><i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="row py-2">
                            <div class="col-md-3">
                                <img src="Img/mandiri.png" alt="" height="25">
                            </div>
                            <div class="col-md-7 text-start">
                                Mandiri
                            </div>
                            <div class="col">
                                <span><i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row mt-4 text-start">
                    <span>E-Money</span>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="row py-3">
                            <div class="col-md-3">
                                <img src="Img/gopay.png" alt="" height="25">
                            </div>
                            <div class="col-md-7 text-start">
                                Gopay
                            </div>
                            <div class="col">
                                <span><i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="row py-3">
                            <div class="col-md-3">
                                <img src="Img/ovo.png" alt="" height="25">
                            </div>
                            <div class="col-md-7 text-start">
                                Ovo
                            </div>
                            <div class="col">
                                <span><i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="row py-3">
                            <div class="col-md-3">
                                <img src="Img/logo_dana_blue.svg" alt="" height="25">
                            </div>
                            <div class="col-md-7 text-start">
                                Dana
                            </div>
                            <div class="col">
                                <span><i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row mt-4 text-start">
                    <span>Gerai Terdekat</span>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="row py-3">
                            <div class="col-md-3">
                                <img src="Img/indomaret.png" alt="" height="25">
                            </div>
                            <div class="col-md-7 text-start">
                                Indomaret
                            </div>
                            <div class="col">
                                <span><i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="row py-3">
                            <div class="col-md-3">
                                <img src="Img/alfamart.png" alt="" height="25">
                            </div>
                            <div class="col-md-7 text-start">
                                Alfamart
                            </div>
                            <div class="col">
                                <span><i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="row py-3">
                            <div class="col-md-3">
                                <img src="Img/alfamidi.png" alt="" height="25">
                            </div>
                            <div class="col-md-7 text-start">
                                Alfamidi
                            </div>
                            <div class="col">
                                <span><i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col text-center summary-box">
                <div class="mt-3">
                    <h3 >Summary</h1>
                </div>
                <div class="row mb-2 mt-4">
                    <div class="col-md-5 text-start">
                        <img src="img/hotel1.jpg" alt="" width="200" class="img-payment">
                    </div>
                    <div class="col text-start">
                        <div class="row mb-2">
                            <h5 class="">Glamping Malang Asri</h5>
                        </div>
                        <div class="row">
                            <span class="address-txt mb-2">Batu, Malang, Jawa, Indonesia</span>
                        </div>
                        <div class="row">
                            <span class="address-txt">2 Tamu</span>
                        </div>
                    </div>
                </div>
                <hr>
                
                <div class="row mb-2">
                    <div class="col text-start">
                        <span>2 Malam x Rp200.000,00</span>
                    </div>
                    <div class="col text-end">
                        <span>Rp400.000,00</span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col text-start">
                        <span>Sterilisasi</span>
                    </div>
                    <div class="col text-end">
                        <span>Rp200.000,00</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-start">
                        <span>Service</span>
                    </div>
                    <div class="col text-end">
                        <span>Rp100.000,00</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col text-start">
                        <span>Total</span>
                    </div>
                    <div class="col text-end">
                        <span>Rp100.000,00</span>
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