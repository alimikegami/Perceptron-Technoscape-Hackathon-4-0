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
    <div class="container px-4 py-3 mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8 payment-confirmation-box pt-3">
            <div class="mb-3">
                    <h4 align="center">Metode Pembayaran:</h4>
                </div>
                <div class="mb-4 text-center">
                    <img src="https://ecs7.tokopedia.net/img/toppay/payment-logo/indomaret.png" alt="" width="150">
                </div>
                <div class="mb-3">
                    <h4 align="center">Lakukan Pembayaran Sebelum:</h4>
                </div>
                <div class="mb-4 justify-content-center">
                    <h3 align="center" class="important-txt"><strong>6 Juli 2021 20.20 WIB</strong></h3>
                </div>
                
                <div class="mb-3">
                    <h4 align="center">Kode Pembayaran Anda:</h4>
                </div>
                <div class="mb-4 important-txt">
                <h3 align="center"><strong>SW1239039</strong></h3>
                </div>
                
                <div class="mb-3">
                    <h4 align="center">Nominal Yang Harus Dibayarkan:</h4>
                </div>
                <div class="mb-4 important-txt">
                <h3 align="center"><strong>Rp100.000,00</strong></h3>
                </div>
                <hr>
                <div>
                <div align="center" class="mb-3">
                    Langkah Pembayaran:
                </div>
                <ol>
                    <li>Datangi gerai Indomaret terdekat</li>
                    <li>Tunjukkan kode pembayaran anda</li>
                    <li>Lakukan Pembayaran</li>
                    <li>Simpan bukti pembayaran anda</li>
                </ol>
            </div class="row">
                <div class="col text-center">
                    <a href="" class="btn beranda-btn mt-3 mb-3">Beranda</a>
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