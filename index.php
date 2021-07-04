<!-- Header -->
<?php include 'template/header.php' ?>

<!-- Content -->
<section id="homepageSearch" class="my-5">
    <div class="container shadow">
        <form class="d-flex align-items-center justify-content-center bg-white" style="height: 11rem; border-radius: 1rem;">
            <div class="d-flex flex-row align-items-center" style="border-radius: .3rem; background-color: #DDE3EF;">
                <div class="d-flex align-items-center px-1">
                    <ion-icon name="search-outline" size="small" class="mx-2"></ion-icon>
                </div>
                <div class="my-1 me-1">
                    <input type="text" name="" id="" placeholder="Nama lokasi/hotel tujuan" style="display: inline; padding-left: .5rem; border: 0; background-color: #DDE3EF; width: 13rem; height: 2.51rem;">
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
</section>

<section id="eventInfo">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/hotel (1).jpg" class="d-block w-50" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/hotel (2).jpg" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/hotel (3).jpg" class="d-block w-100" alt="">
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

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>