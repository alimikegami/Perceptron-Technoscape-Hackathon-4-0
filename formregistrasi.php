<?php 
session_start();
require_once "functions.php";
$empty = 0;
$register = 0;
if(isset($_POST["submit-register"])){
    if (ctype_space($_POST["name-register"]) || ctype_space($_POST["email-register"]) || ctype_space($_POST["phone-number-register"]) || ctype_space($_POST["password-register"] || ctype_space($_POST["konfirmasi-password"]))) {
        $empty = 1;
      } else {
        $register = register_user($_POST);
      }
}
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
    <title>Hello, world!</title>
  </head>
  <body>
    <?php include 'header.php' ?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#233049" fill-opacity="1" d="M0,32L60,69.3C120,107,240,181,360,186.7C480,192,600,128,720,106.7C840,85,960,107,1080,144C1200,181,1320,235,1380,261.3L1440,288L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>
    <div class="container">
        <div class="row justify-content-center">
            <?php if($empty == 1): ?>
                <div class="col-md-4 mt-4 alert alert-danger alert-dismissible fade show" role="alert">
                        Lengkapi seluruh field dengan benar!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?>

            <?php if($register == 1): ?>
                <div class="col-md-4 mt-4 alert alert-danger alert-dismissible fade show" role="alert">
                        Password tidak sesuai!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?>

            <?php if($register == 2): ?>
                <div class="col-md-4 mt-4 alert alert-danger alert-dismissible fade show" role="alert">
                        Email telah digunakan!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?>
            
            <?php if($register == 3): ?>
                <div class="col-md-4 mt-4 alert alert-success alert-dismissible fade show" role="alert">
                        Selamat, akun anda berhasil dibuat!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?>

            <?php if($register == 4): ?>
                <div class="col-md-4 mt-4 alert alert-danger alert-dismissible fade show" role="alert">
                        Terjadi kesalahan pada query!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 login-form mt-5 pb-5 px-4">
                <h1 align="center" class="mb-5 pt-3">Sign Up</h1>
                <form method="POST">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name-register" id="exampleInputName" aria-describedby="emailHelp" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" name="email-register" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPhoneNumber" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" name="phone-number-register" id="exampleInputPhoneNumber" aria-describedby="emailHelp" placeholder="Nomor Handphone" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password-register" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Konfirmasi Password</label>
                        <input type="password" name="konfirmasi-password" class="form-control" id="exampleInputPassword2" placeholder="Konfirmasi Password">
                    </div>
                    <button type="submit" name="submit-register" class="btn login-button mt-4 mb-4">Sign Up</button>
                </form>
                <hr>
                <p align="center">Sudah memiliki akun?</p>
                <a class="btn buat-akun-btn" name="sign-up" href="formlogin.php">Sign In</a>
            </div>
        </div>
    </div>

    <script>
        function show_hide_password() {
            var btn = document.getElementById("pwd")
            if (btn.type == "password") {
                btn.type="text"; 
            } else {
                btn.type="password"; 
            }

        }
    </script>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>