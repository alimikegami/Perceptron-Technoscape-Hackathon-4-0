<!-- Header -->
<?php include 'template/header.php' ?>

<!-- Content -->
<section id="homepageSearch" class="my-5">
    <div class="container shadow">
        <div class="d-block">
            <form class="d-flex align-items-center justify-content-center bg-white">
                <div class="d-flex flex-row align-items-center" style="border-radius: .3rem; background-color: #DDE3EF;">
                    <div class="d-flex align-items-center px-1">
                        <ion-icon name="search-outline" size="small" class="mx-2"></ion-icon>
                    </div>
                    <div class="my-1 me-1">
                        <input type="text" name="" id="" placeholder="Nama lokasi/hotel tujuan" style="display: inline; padding-left: .5rem; border: 0; background-color: #DDE3EF; width: 18rem; height: 2.51rem;">
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
                        <input type="text" placeholder="1 room, 2guests" style="display: inline; padding-left: .5rem; border: 0; background-color: #DDE3EF; height: 1.34rem;">
                    </div>
                </div>
                <input type="button" value="Cari" class="py-2 px-4" style="border-radius: 2rem; background-color: #233049; color: #9CADD0; font-size: 1.2rem;">
            </form>
        </div>
    </div>
</section>

<section id="eventInfo" class="my-5">
    <div class="row text-center mb-5">
        <h3>Event pada Penginapan</h3>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img">
                    <img src="img/hotel (1).jpg" class="d-block w-50" alt="">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="img/hotel (2).jpg" class="d-block w-50" alt="">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="img/hotel (3).jpg" class="d-block w-50" alt="">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section id="rekomendasi" class="my-5">
    <div class="container shadow">
        <div class="d-block">
            <div class="d-flex">
                <div class="me-5" style="width: 50%;">
                    <h3 class="mb-4">Penginapan Terlaris</h3>
                    <div class="d-flex">
                        <div class="d-flex me-4">
                            <div class="d-inline p-3 shadow list-terlaris">
                                <div>
                                    <div class="d-flex justify-content-center text-center mx-3">
                                        <h6>The Alea Hotel Seminyak</h6>
                                    </div>
                                    <div class="col">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <div class="text-end">
                                        <h6>Rp 300.000</h6>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div class="d-flex justify-content-center text-center mx-3">
                                        <h6>The Alea Hotel Seminyak</h6>
                                    </div>
                                    <div class="col">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <div class="text-end">
                                        <h6>Rp 300.000</h6>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div class="d-flex justify-content-center text-center mx-3">
                                        <h6>The Alea Hotel Seminyak</h6>
                                    </div>
                                    <div class="col">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <div class="text-end">
                                        <h6>Rp 300.000</h6>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div class="d-flex justify-content-center text-center mx-3">
                                        <h6>The Alea Hotel Seminyak</h6>
                                    </div>
                                    <div class="col">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <div class="text-end">
                                        <h6>Rp 300.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="d-inline p-3 shadow list-terlaris">
                                <div>
                                    <div class="d-flex justify-content-center text-center mx-3">
                                        <h6>The Alea Hotel Seminyak</h6>
                                    </div>
                                    <div class="col">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <div class="text-end">
                                        <h6>Rp 300.000</h6>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div class="d-flex justify-content-center text-center mx-3">
                                        <h6>The Alea Hotel Seminyak</h6>
                                    </div>
                                    <div class="col">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <div class="text-end">
                                        <h6>Rp 300.000</h6>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div class="d-flex justify-content-center text-center mx-3">
                                        <h6>The Alea Hotel Seminyak</h6>
                                    </div>
                                    <div class="col">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <div class="text-end">
                                        <h6>Rp 300.000</h6>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div class="d-flex justify-content-center text-center mx-3">
                                        <h6>The Alea Hotel Seminyak</h6>
                                    </div>
                                    <div class="col">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <div class="text-end">
                                        <h6>Rp 300.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width: 50%;">
                    <h3 class="mb-4">Rekomendasi Penginapan</h3>
                    <div class="shadow p-3 list-rekomendasi">
                        <div class="d-block">
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <img src="img/hotel (1).jpg" alt="">
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <h6>The Alea Hotel Seminyak</h6>
                                        </div>
                                        <div class="col-auto">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="row address">
                                        <p>Jln Cendrawasih no. 78 petitenget,  Seminyak, Kuta, Bali, 80361</p>
                                    </div>
                                    <div class="row">
                                        <p>Check in/out cepat banget. Masih sepi banget, kolam agak kotor tapi fine. Yang paling bikin senang, dekat sama tempat-tempat gaul seminyak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-auto align-self-center">
                                    <img src="img/hotel (1).jpg" alt="">
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <h6>The Alea Hotel Seminyak</h6>
                                        </div>
                                        <div class="col-auto">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="row address">
                                        <p>Jln Cendrawasih no. 78 petitenget,  Seminyak, Kuta, Bali, 80361</p>
                                    </div>
                                    <div class="row">
                                        <p>Check in/out cepat banget. Masih sepi banget, kolam agak kotor tapi fine. Yang paling bikin senang, dekat sama tempat-tempat gaul seminyak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <img src="img/hotel (1).jpg" alt="">
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <h6>The Alea Hotel Seminyak</h6>
                                        </div>
                                        <div class="col-auto">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="row address">
                                        <p>Jln Cendrawasih no. 78 petitenget,  Seminyak, Kuta, Bali, 80361</p>
                                    </div>
                                    <div class="row">
                                        <p>Check in/out cepat banget. Masih sepi banget, kolam agak kotor tapi fine. Yang paling bikin senang, dekat sama tempat-tempat gaul seminyak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Reviews">
    <div class="container">
        <div class="d-flex justify-content-center">
            <h3>Review Pengguna</h3>
        </div>
        <div class="shadow px-3 py-5 reviews">
            <div class="row justify-content-center">
                <div class="col-sm text-center">
                    <h6>The Alea Hotel Seminyak</h6>
                    <div class="col-auto mb-4">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <div class="mb-4 teks">
                        <p>Tempatnya bagus, kolam renang juga bersih. Fasilitas dengan harga segitu menurutku lebih dari cukup.</p>
                    </div>
                    <div><h6>Wayan Pande</h6></div>
                </div>
                <div class="col-sm text-center">
                    <h6>The Alea Hotel Seminyak</h6>
                    <div class="col-auto mb-4">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <div class="mb-4 teks">
                        <p>Tempatnya bagus, kolam renang juga bersih. Fasilitas dengan harga segitu menurutku lebih dari cukup.</p>
                    </div>
                    <div><h6>Wayan Pande</h6></div>
                </div>
                <div class="col-sm text-center">
                    <h6>The Alea Hotel Seminyak</h6>
                    <div class="col-auto mb-4">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <div class="mb-4 teks">
                        <p>Tempatnya bagus, kolam renang juga bersih. Fasilitas dengan harga segitu menurutku lebih dari cukup.</p>
                    </div>
                    <div><h6>Wayan Pande</h6></div>
                </div>
                <div class="col-sm text-center">
                    <h6>The Alea Hotel Seminyak</h6>
                    <div class="col-auto mb-4">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <div class="mb-4 teks">
                        <p>Tempatnya bagus, kolam renang juga bersih. Fasilitas dengan harga segitu menurutku lebih dari cukup.</p>
                    </div>
                    <div><h6>Wayan Pande</h6></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'template/footer.php' ?>
