<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>StayCay | Penginapan</title>
</head>

<body>
    <?php include 'template/header.php' ?>

    <div class="row">
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg-all-penginapan">
                <path fill="#233049" fill-opacity="1" d="M0,160L30,144C60,128,120,96,180,101.3C240,107,300,149,360,176C420,203,480,213,540,202.7C600,192,660,160,720,165.3C780,171,840,213,900,234.7C960,256,1020,256,1080,250.7C1140,245,1200,235,1260,208C1320,181,1380,139,1410,117.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
            </svg>
            <!-- top search bar -->
            <section id="penginapanSearch" class="my-5">
                <div class="container shadow">
                    <form class="d-flex align-items-center justify-content-center bg-white" style="height: 11rem; border-radius: 1rem;">
                        <div class="d-flex flex-row align-items-center" style="border-radius: .3rem; background-color: #DDE3EF;">
                            <div class="d-flex align-items-center px-1">
                                <ion-icon name="search-outline" size="small" class="mx-2"></ion-icon>
                            </div>
                            <div class="my-1 me-1">
                                <input type="text" name="" placeholder="Nama lokasi/hotel tujuan" style="display: inline; padding-left: .5rem; border: 0; background-color: #DDE3EF; width: 13rem; height: 2.51rem;" id="tujuan">
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="row justify-content-center">
                                                <div class="col-2 text-center align-self-center">
                                                    <ion-icon name="location"></ion-icon>
                                                </div>
                                                <div class="col align-self-start text-start">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p>Bali</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col" style="margin-top: -20px;">
                                                            <p>Indonesia</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="row justify-content-center">
                                                <div class="col-2 text-center align-self-center">
                                                    <ion-icon name="location"></ion-icon>
                                                </div>
                                                <div class="col align-self-start text-start">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p>Seminyak</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col" style="margin-top: -20px;">
                                                            <p>Bali, Indonesia</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="row justify-content-center">
                                                <div class="col-2 text-center align-self-center">
                                                    <ion-icon name="location"></ion-icon>
                                                </div>
                                                <div class="col align-self-start text-start">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p>Kuta</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col" style="margin-top: -20px;">
                                                            <p>Bali, Indonesia</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="row justify-content-center">
                                                <div class="col-2 text-center align-self-center">
                                                    <ion-icon name="location"></ion-icon>
                                                </div>
                                                <div class="col align-self-start text-start">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p>Ubud</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col" style="margin-top: -20px;">
                                                            <p>Bali, Indonesia</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mx-3" style="border-radius: .3rem; background-color: #DDE3EF;">
                            <div class="d-flex flex-row">
                                <div class="d-flex align-items-center px-1">
                                    <ion-icon name="calendar-outline" size="small" class="mx-2"></ion-icon>
                                </div>
                                <div class="my-1 me-1">
                                    <div class="d-flex flex-column">
                                        <p style="margin-bottom: 0; font-size: .8rem;">Check-In</p>
                                        <input type="date" style="display: inline; border: 0; background-color: #DDE3EF; font-size: .9rem;">
                                    </div>
                                </div>
                            </div>
                            <div class="v-line"></div>
                            <div class="d-flex flex-row">
                                <div class="d-flex align-items-center px-1">
                                    <ion-icon name="calendar-outline" size="small" class="mx-2"></ion-icon>
                                </div>
                                <div class="my-1 me-1">
                                    <div class="d-flex flex-column">
                                        <p style="margin-bottom: 0; font-size: .8rem;">Check-Out</p>
                                        <input type="date" style="display: inline; border: 0; background-color: #DDE3EF; font-size: .9rem;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="me-3" style="border-radius: .3rem; background-color: #DDE3EF;">
                            <div class="d-flex flex-column p-1">
                                <p style="padding-left: .5rem; margin-bottom: 0; font-size: .8rem;">Guests</p>
                                <input type="text" placeholder="1 room, 2guests" style="display: inline; padding-left: .5rem; border: 0; background-color: #DDE3EF; height: 1.34rem;" id="guest-form">
                            </div>
                        </div>
                        <a href="allPenginapan.php" class="btn py-2 px-5">Cari</a>
                    </form>
                </div>
            </section>
            <!-- end top search bar -->
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- filter pencarian -->
            <div class="col-sm-3">
                <form class="filter-pencarian" method="GET" action="">
                    <div class="row">
                        <div class="col">
                            <h5>Filter pencarian</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <p>Harga 1kamar/malam</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p style="font-size: medium;">minimum</p>
                                </div>
                                <div class="col-sm-6">
                                    <p style="font-size: medium;">maksimum</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p id="minHarga">0</p>
                                    <input type="hidden" class="form-control" id="amount1" aria-describedby="emailHelp" name="hargaMin">
                                </div>
                                <div class="col-sm-2 align-self-center">
                                    <hr class="garisMinMaks" style="margin-top: -15px;">
                                </div>
                                <div class="col-sm-5 text-center">
                                    <p id="maxHarga" style="margin-left: -50px;">15.000.000</p>
                                    <input type="hidden" class="form-control" id="amount2" aria-describedby="emailHelp" name="hargaMax">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div id="slider-harga" style="margin-left: 15px; margin-right: 15px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <p>Bintang</p>
                        </div>
                    </div>
                    <div class="row ml-3">
                        <div class="col">
                            <div class="form-check all-penginapan">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="bintang[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </label>
                            </div>
                            <div class="form-check all-penginapan">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="bintang[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </label>
                            </div>
                            <div class="form-check all-penginapan">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="bintang[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </label>
                            </div>
                            <div class="form-check all-penginapan">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="bintang[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </label>
                            </div>
                            <div class="form-check all-penginapan">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="bintang[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <ion-icon name="star"></ion-icon>
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <p>Area</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            <select class="form-select all-penginapan" aria-label="Default select example" id="area">
                                <option selected>Bali</option>
                                <option value="aceh">Aceh</option>
                                <option value="bali">Bali</option>
                                <option value="bandung">Bandung</option>
                                <option value="Jakarta">Jakarta</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="scroll mt-4">
                                <div class="form-check all-penginapan">
                                    <input class="form-check-input" type="checkbox" value="badung" id="flexCheckDefault" name="areaBadung">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Badung
                                    </label>
                                </div>
                                <div class="form-check all-penginapan">
                                    <input class="form-check-input" type="checkbox" value="kuta" id="flexCheckDefault" name="areaKuta">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Kuta
                                    </label>
                                </div>
                                <div class="form-check all-penginapan">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Gianyar
                                    </label>
                                </div>
                                <div class="form-check all-penginapan">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Ubud
                                    </label>
                                </div>
                                <!-- <?php for ($i = 0; $i < 10; $i++) : ?>
                                    <div class="form-check all-penginapan">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Denpasar
                                        </label>
                                    </div>
                                <?php endfor; ?> -->
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <p>Tipe penginapan</p>
                            <div class="scroll">
                                <div class="form-check all-penginapan mt-3">
                                    <input class="form-check-input" type="checkbox" value="hotel" id="flexCheckDefault" name="hotel">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Hotel
                                    </label>
                                </div>
                                <div class="form-check all-penginapan">
                                    <input class="form-check-input" type="checkbox" value="villa" id="flexCheckDefault" name="villa">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Villa
                                    </label>
                                </div>
                                <div class="form-check all-penginapan">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Glamping
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col" style="margin-left: 30px;">
                            <a class="btn btn-primary btn-lg terapkan" href="allPenginapan.php" role="button">Reset</a>
                            <button class="btn btn-primary btn-lg terapkan" type="submit" name="submit" style="margin-left: 30px;">Terapkan</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end filter pencarian -->

            <!-- Tampilan hasil search -->
            <div class="col tampilPenginapan">
                <?php for ($i = 0; $i < 10; $i++) : ?>
                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="img/glamping.jpg" alt="" srcset="" width="300">
                        </div>
                        <div class="col-5">
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: large;" class="fw-bold">Glamping Malang Asri</p>
                                </div>
                                <div class="col">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: small;">Jl. Raya Tawangargo No.1, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65314</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Check in/out cepat banget. Masih sepi banget, kolam agak kotor tapi fine. Yang paling bikin senang, dekat tempat-tempat gaul seminyak.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 align-self-center text-center">
                            <p style="color: #869BC6; font-size: 30px;">IDR 300.000</p>
                            <a class="btn btn-primary" href="site.php" role="button" style="background-color: #233049; color: #9CADD0;">Book now</a>
                        </div>
                        <hr class="mt-3">
                    </div>
                <?php endfor; ?>
            </div>
            <!-- end tampilan hasil search -->
        </div>
    </div>

    <?php include 'template/footer.php'; ?>