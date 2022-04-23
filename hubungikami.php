<?php
//membuat koneksi database

$server = "localhost";
$user = "root";
$password = "";
$dbname = "utspaw";
$no = 1;

$koneksi = mysqli_connect($server,$user,$password,$dbname)or die(mysqli_error($koneksi));
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PMI Kabupaten Probolinggo</title>
    <style>
        .header {
    padding-left: 50px;
    padding-top: 5px;
    }
    #logo {
        width: 40px;
        height: 40px;
    }
    </style>
  </head>
  <body>
    <!-- <br>
    <h1>Selamat Datang !</h1>
    <br>
    <h5>Website ini berguna untuk informasi kalian tentang PMI Kabupaten Probolinggo.</h5> -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
        <div class="header">
            <img id="logo" src="images/pmi.png" alt="logo">
        </div>
        <div class="container">
        <a class="navbar-brand" href="#"> PMI Kab.Probolinggo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Beranda.php">Beranda<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profil.php">Profil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Formulir
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="donordarah.php">Formulir Donor Darah</a>
                <a class="dropdown-item" href="ambulanace.php">Formulir Permintaan Ambulance</a>
                <a class="dropdown-item" href="tanya.php">Formulir Pertanyaan</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Informasi
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="manfaat.php">Manfaat Donor Darah</a>
                <a class="dropdown-item" href="syarat.php">Syarat Donor Darah</a>
                <a class="dropdown-item" href="procedure.php">Procedur Donor Darah</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="hubungikami.php">Kontak Darurat</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="event.php">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Keluar</a>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div></div>
    </nav>
  
    <div class="container-fluid p-0">
        <div class="gradient-header-big">
            <div class="row" style="">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center" style="padding-bottom:100px;">
                    <div class="row justify-content-center">
                            <h1  style="padding-top:100px;font-size:35px;">
                                <span class="py-3" id="text-beranda">
                                   NOMOR DARURAT PMI KABUPATEN PROBOLINGGO                              </span>
                            </h1>
                    </div>
                    <div class="row justify-content-center">
                        <p style="padding-top:15px;">Hubungi Layanan PMI Kabupaten Probolinggo
                            <br>Apabila terjadi keadaan darurat.
                        </p>
                    </div>
                    <div class="row justify-content-center">
                        <a href="tel:112" class="btn btn-primary m-2 custom-button"><img class="mr-2" src="https://corona.jakarta.go.id/img/logo/phone.png" alt=""> 112 (24 jam bebas pulsa)</a>
                        <a href="tel:+6281112112112 " class="btn btn-primary m-2 custom-button2"><img class="mr-2" src="https://corona.jakarta.go.id/img/logo/phone.png" alt=""> 081 112 112 112 </a>
                        <a href="tel:+6281388376955" class="btn btn-primary m-2 custom-button2"> <img class="mr-2" src="https://corona.jakarta.go.id/img/logo/phone.png" alt=""> 081 388 376 955</a>
                    </div>
                </div>
                
        </div>
        <div class="well well-lg">
            <img src="images/petapro.jpeg" width="1000" style="display: block; margin: auto;" alt="Peta Kabupaten Probolinggo">
        </div>
    </div>
    <br>
    <div class="jumbotron">
        <h3 class="display-4 text-center">Layanan Kesehatan</h3>
        <p class="lead">Apabila Anda dalam kondisi membutuhkan bantuan yang terkait dengan bencana dan terkait darah, silahkan menuju ke layanan PMI terdekat. Stay Safe!.</p>
        <hr class="my-4">
        <p>Pemerintah PMI Kabupaten Probolinggo telah menyediakan hand sanitizer maupun tempat untuk mencuci tangan di beberapa titik lokasi.</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126504.63013510415!2d113.36739841213613!3d-7.761196871675205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd701ae40471a59%3A0xdb254867ca4b7e40!2sRegional%20General%20Hospital%20Waluyo%20Jati!5e0!3m2!1sen!2sid!4v1650169964012!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>