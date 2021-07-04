<?php 
session_start();
require_once "functions.php";
// if (!($_SESSION["login_pelanggan"] === true)) {
//     header("Location: formlogin.php?syarat=login");
//     exit();
// }

$empty = 0;
$event = 2;
$query_select_accommodation_category = "SELECT * FROM accommodation_category";
$category_list = read($query_select_accommodation_category);

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
    <title>Tambah Penginapan</title>
</head>

<body>
    <?php include 'template/header.php' ?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg-add-event">
        <path fill="#233049" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,250.7C384,277,480,267,576,229.3C672,192,768,128,864,106.7C960,85,1056,107,1152,128C1248,149,1344,171,1392,181.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
    <div class="container">
        <div class="row justify-content-center">
            
        

        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 mt-5 event-form text-mtsr">

                <h1 class="pt-3 mb-5" align="center">Tambah Penginapan Baru</h1>
                <form class="px-3" method="POST">
                    <!-- Hidden Input SESSION userID goes HERE -->
                    <div class="mb-3">
                        <label for="ac_name" class="form-label">Nama Penginapan</label>
                        <input type="text" class="form-control" id="ac_name" name="ak_nama" aria-describedby="emailHelp" placeholder="Masukkan nama penginapan" required>
                    </div>
                    <div class="mb-3">
                        <label for="ac_province" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="ac_province" name="ak_prov" aria-describedby="emailHelp" placeholder="Masukkan provinsi" required>
                    </div>
                    <div class="mb-3">
                        <label for="ac_district" class="form-label">Kabupaten / Kota</label>
                        <input type="text" class="form-control" id="ac_district" name="ak_kota" aria-describedby="emailHelp" placeholder="Masukkan kabupaten / kota" required>
                    </div>
                    <div class="mb-3">
                        <label for="ac_street" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="ac_street" name="ak_jalan" aria-describedby="emailHelp" placeholder="Masukkan alamat" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="ac_type" class="form-label">Tipe Akomodasi</label>
                        <select class="form-select" name="ac_category_id" aria-label="" required>
                        <option selected>* Pilih salah satu</option>
                            <?php 
                                foreach ($category_list as $row) {
                                    echo "<option value='".$row["category_id"]."'>".$row["category"]."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ac_price" class="form-label">Biaya menginap (per malam)</label>
                        <input type="number" min="0" class="form-control" id="ac_price" name="ak_harga" aria-describedby="emailHelp" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="ac_max_ppl" class="form-label">Jumlah tamu maksimum</label>
                        <input type="number" min="0" class="form-control" id="ac_max_ppl" name="ak_maks_tamu" aria-describedby="emailHelp" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="ac_bed_qty" class="form-label">Banyak kamar tidur</label>
                        <input type="number" min="0" class="form-control" id="ac_bed_qty" name="ak_byk_kamar_tidur" aria-describedby="emailHelp" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="ac_bath_qty" class="form-label">Banyak kamar kecil</label>
                        <input type="number" min="0" class="form-control" id="ac_bath_qty" name="ak_byk_kamar_kecil" aria-describedby="emailHelp" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="ac_room_qty" class="form-label">Banyak penginapan</label>
                        <input type="number" min="0" class="form-control" id="ac_room_qty" name="ak_byk_kamar" aria-describedby="emailHelp" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="ac_photo" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="ac_photo" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="ac_desc" class="form-label">Deskripsi Event</label>
                        <input type="text" class="form-control align-text-top" style="height: 250px;" id="ac_desc" name="ak_deskripsi" aria-describedby="emailHelp" placeholder="Masukkan deskripsi event">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="new_accommodation" class="btn login-button addevent-button text-center mb-3 rounded-pill py-3" style="width:250px;">Tambahkan Penginapan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'template/footer.php' ?>
