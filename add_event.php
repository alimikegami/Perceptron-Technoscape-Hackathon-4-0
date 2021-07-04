<?php 
session_start();
require_once "functions.php";
// if (!($_SESSION["login_pelanggan"] === true)) {
//     header("Location: formlogin.php?syarat=login");
//     exit();
// }

$empty = 0;
$event = 2;
// $query_select_accommodation = "SELECT * FROM accommodation WHERE user_id=" . $_SESSION["id_akun"];
$query_select_accommodation = "SELECT * FROM accommodation WHERE user_id=1";
$accommodation_list = read($query_select_accommodation);

// if (isset($_POST["new_event"])) {
//     if (ctype_space($_POST["id_penginapan"]) || ctype_space($_POST["event_nama"]) || ctype_space($_POST["event_deskripsi"]) || ctype_space($_POST["event_mulai"]) || ctype_space($_POST["event_berakhir"])) {
//         $empty = 1;
//     } 
    
//     else {
//         $date1 = strtotime(date_create($_POST["event_mulai"]));
//         $date2 = strtotime(date_create($_POST["event_berakhir"]));

//         $secs = $date2 - $date1; 
//         $days = $secs / 86400;

//         // $diff = (array) date_diff(date_create($_POST["event_mulai"]), date_create($_POST["event_berakhir"]));
//         if ($days >= '0') {
//             $ev_venue = $_POST["id_penginapan"];
//             $ev_host = $_SESSION["id_akun"];
//             $ev_event = $_POST["event_nama"];
//             $ev_desc = $_POST["event_deskripsi"];
//             $ev_start = $_POST["event_mulai"];
//             $ev_end = $_POST["event_berakhir"];
//             $event = create_event($ev_venue, $ev_host, $ev_event, $ev_desc, $ev_start, $ev_end);
            
//             if ($event == 0) {
                
//             }
//             else {
    
//             }
//         }
//         else {
//             header("Location: add_event.php?error=date");
//         }
//     }
// }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Tambah Event!</title>
</head>

<body>
    <?php include 'template/header.php' ?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg-add-event">
        <path fill="#233049" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,250.7C384,277,480,267,576,229.3C672,192,768,128,864,106.7C960,85,1056,107,1152,128C1248,149,1344,171,1392,181.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
    <div class="container">
        <div class="row justify-content-center">
            <!-- <?php if($empty == 1): ?>
                <div class="col-md-4 mt-4 alert alert-danger alert-dismissible fade show" role="alert">
                        Lengkapi seluruh field dengan benar!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?>

            <?php if(isset($_GET["error"])): ?>
                <div class="col-md-4 mt-4 alert alert-danger alert-dismissible fade show" role="alert">
                    <?php if($_GET["error"] === "date"): ?>
                        Lengkapi seluruh field dengan benar!"
                    <?php endif;?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?> -->

            <!-- <?php if($event == 0): ?>
                <div class="col-md-4 mt-4 alert alert-danger alert-dismissible fade show" role="alert">
                        Terjadi kesalahan!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?>

            <?php if($event == 1): ?>
                <div class="col-md-4 mt-4 alert alert-danger alert-dismissible fade show" role="alert">
                        Berhasil menambahkan event!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?> -->
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 mt-5 event-form" >

                <h1 class="pt-3 mb-5" align="center">Membuat Event Baru</h1>
                <form class="px-3" method="POST">
                    <div class="mb-3">
                        <label for="event_nama" class="form-label">Judul Event</label>
                        <input type="text" class="form-control" id="event_nama" name="event_nama" aria-describedby="emailHelp" placeholder="Masukkan nama event" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_akomodasi" class="form-label">Akomodasi</label>
                        <select class="form-select" name="id_penginapan" aria-label="Default select example" required>
                        <option selected>* Pilih salah satu</option>
                            <?php 
                                foreach ($accommodation_list as $row) {
                                    echo "<option value='".$row["accommodation_id"]."'>".$row["accommodation_name"]."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="event_photo" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="event_photo" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 row">
                        <div class="col">
                            <label for="event_start" class="form-label">Mulai</label>
                            <div class="col">
                                <input type="date" class="form-control" name="event_mulai" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Berakhir</label>
                            <div class="col">
                                <input type="date" class="form-control" name="event_berakhir" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="event_deskripsi" class="form-label">Deskripsi Event</label>
                        <input type="text" class="form-control align-text-top" style="height: 250px;" id="event_deskripsi" name="event_deskripsi" aria-describedby="emailHelp" placeholder="Masukkan deskripsi event">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="new_event" class="btn btn-primary addevent-button text-center mb-3 rounded-pill py-3">Tambahkan Event</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'template/footer.php' ?>
