<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staycay</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?<?= filemtime('style.css'); ?>">
    <link rel="stylesheet" href="jquery.css?<?= filemtime('jquery.css'); ?>">
</head>

<body>
    <nav id="header" class="navbar navbar-light">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="" width="161.1134" height="60">
            </a>
            <div class="navbar-nav d-flex flex-row align-items-end">
                <a href="#" class="nav-link">Events</a>
                <div class="v-line"></div>
                <a href="#" class="nav-link">Masuk</a>
                <div class="v-line"></div>
                <a href="#" class="nav-link">Daftar</a>
            </div>
        </div>
    </nav>

    <!-- Navbar Sticky Top -->
    <!-- <nav class="navbar sticky-top navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sticky top</a>
  </div>
</nav> -->