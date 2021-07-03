<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staycay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <?php include 'header.php' ?>

    <!-- Content -->
    <section id="homepageSearch" class="my-5">
        <div class="container">
            <form class="d-flex align-items-center justify-content-center bg-white" style="height: 8rem; border-radius: 1rem;">
                <div class="d-flex flex-row align-items-center" style="border-radius: .3rem; background-color:rgba(128, 128, 128, .55);">
                    <div class="d-flex align-items-center px-1">
                        <ion-icon name="search-outline" size="small" class="mx-2"></ion-icon>
                    </div>
                    <div class="my-1 me-1">
                        <input type="text" name="" id="" placeholder=" Nama lokasi/hotel tujuan" style="width: 13rem; height: 2.15rem;">
                    </div>
                </div>
                <div class="d-flex align-items-center mx-3" style="border-radius: .3rem; background-color:rgba(128, 128, 128, .55);">
                    <div class="d-flex flex-row">
                        <div class="d-flex align-items-center px-1">
                            <ion-icon name="calendar-outline" size="small" class="mx-2"></ion-icon>
                        </div>
                        <div class="mb-1 me-1">
                            <div class="d-flex flex-column">
                                <p style="margin-bottom: 0; font-size: .7rem;">Check-In</p>
                                <input type="date" style="font-size: .7rem;">
                            </div>
                        </div>
                    </div>
                    <div class="v-line"></div>
                    <div class="d-flex flex-row">
                        <div class="d-flex align-items-center px-1">
                            <ion-icon name="calendar-outline" size="small" class="mx-2"></ion-icon>
                        </div>
                        <div class="mb-1 me-1">
                            <div class="d-flex flex-column">
                                <p style="margin-bottom: 0; font-size: .7rem;">Check-Out</p>
                                <input type="date" style="font-size: .7rem;">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>