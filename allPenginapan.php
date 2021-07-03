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
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#233049" fill-opacity="1" d="M0,160L30,144C60,128,120,96,180,101.3C240,107,300,149,360,176C420,203,480,213,540,202.7C600,192,660,160,720,165.3C780,171,840,213,900,234.7C960,256,1020,256,1080,250.7C1140,245,1200,235,1260,208C1320,181,1380,139,1410,117.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
            </svg>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <form class="filter-pencarian" method="POST" action="test.php">
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
                                <div class="col-sm-4" style="margin-right: 25px;">
                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="hargaMin">
                                </div>
                                <div class="col-sm-2 align-self-center">
                                    <hr class="garisMinMaks">
                                </div>
                                <div class="col-sm-4" style="margin-left: -25px;">
                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="hargaMax">
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
                            <div class="form-check-all-penginapan">
                                <input class="form-check-input" type="checkbox" value="5" id="flexCheckDefault" name="bintangLima">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </label>
                            </div>
                            <div class="form-check-all-penginapan">
                                <input class="form-check-input" type="checkbox" value="4" id="flexCheckDefault" name="bintangEmpat">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </label>
                            </div>
                            <div class="form-check-all-penginapan">
                                <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="bintangTiga">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </label>
                            </div>
                            <div class="form-check-all-penginapan">
                                <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="bintangDua">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </label>
                            </div>
                            <div class="form-check-all-penginapan">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="bintangSatu">
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
                            <select class="form-select-all-penginapan" aria-label="Default select example">
                                <option selected></option>
                                <option value="aceh">Aceh</option>
                                <option value="bali">Bali</option>
                                <option value="bandung">Bandung</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check-all-penginapan mt-3">
                                <input class="form-check-input" type="checkbox" value="badung" id="flexCheckDefault" name="areaBadung">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Badung
                                </label>
                            </div>
                            <div class="form-check-all-penginapan">
                                <input class="form-check-input" type="checkbox" value="kuta" id="flexCheckDefault" name="areaKuta">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Kuta
                                </label>
                            </div>
                            <div class="form-check-all-penginapan">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Gianyar
                                </label>
                            </div>
                            <div class="form-check-all-penginapan">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Ubud
                                </label>
                            </div>
                            <div class="form-check-all-penginapan">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Denpasar
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <p>Tipe penginapan</p>
                            <div class="form-check-all-penginapan mt-3">
                                <input class="form-check-input" type="checkbox" value="hotel" id="flexCheckDefault" name="hotel">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Hotel
                                </label>
                            </div>
                            <div class="form-check-all-penginapan">
                                <input class="form-check-input" type="checkbox" value="villa" id="flexCheckDefault" name="villa">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Villa
                                </label>
                            </div>
                            <div class="form-check-all-penginapan">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Kos
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input class="btn btn-primary btn-lg terapkan" type="submit" value="Terapkan" name="submit" style="margin-left: 90px;">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col tampilPenginapan">
                <?php for ($i = 0; $i < 10; $i++) : ?>
                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="img/hotel1.jpg" alt="" srcset="" width="300">
                        </div>
                        <div class="col-5">
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: large;" class="fw-bold">The Alea Hotel Seminyak</p>
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
                                    <p style="font-size: small;">Jln Cendrawasih no. 78 petitenget, Seminyak, Kuta, Bali, 80361</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Check in/out cepat banget. Masih sepi banget, kolam agak kotor tapi fine. Yang paling bikin senang, dekat sama tempat-tempat gaul seminyak.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 align-self-center text-center">
                            <p style="color: #869BC6; font-size: 30px;">IDR 300.000</p>
                            <a class="btn btn-primary" href="#" role="button" style="background-color: #233049; color: #9CADD0;">Book now</a>
                        </div>
                        <hr class="mt-3">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <?php include 'template/footer.php'; ?>