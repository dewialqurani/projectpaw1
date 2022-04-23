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
                <a class="nav-link" href="galeri.php">Galeri</a>
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

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4 text-center">PMI Kabupaten Probolinggo<br><br>
            <img src="images/pmi.png" width="350"><br>
          </h1><br>
          <h3 class="lead">Apa itu  PMI ?? <br><br>
            Palang Merah Indonesia (PMI) merupakan organisasi kemanusiaan sebagai bagian dari Federasi Internasional Perhimpunan
            Palang Merah dan Bulan Sabit Merah. Berdasarkan Konvensi Jenawa 1949, maka tugas palang merah adalah untuk memberikan bantuan
            pertama pada korban bencana alam dan korba perang. Dalam situasi Pandemi, PMI merupakan salah satu unsur garda terdepan dalam upaya menyelamatkan pasien Covid-19.
        </h3>
            <hr class="my-4">
            <h5 class="text-center"> 7 PRINSIP DASAR GERAKAN PALANG MERAH INDONESIA<br>
               <br><img src="images/7PRINSIP-kemanusiaan.JPG" width="150" height="250">
               <img src="images/7PRINSIP-kesemestaan.JPG" width="150" height="250">
               <img src="images/7PRINSIP-kenetralan.JPG" width="150" height="250">
               <img src="images/7PRINSIP-kemandirian.JPG" width="150" height="250">
               <img src="images/7PRINSIP-kesamaan.JPG" width="150" height="250">
               <img src="images/7PRINSIP-kesukarelaan.JPG" width="150" height="250">
               <img src="images/7PRINSIP-kesatuan.JPG" width="150" height="250">
            </h5>
            <hr class="my-4">
            <hr class="my-4">
            <h5 class="text-center"> VISI,MISI, & TUJUAN STRATEGIS<br>
               <tr class="form-group">
                    <td>
                        <h6>VISI</h6>
                    </td>
                    <td>
                        <p>Terwujudnya PMI yang profesional dan berintegritas serta bergerak bersama masyarakat</p>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <h6>MISI</h6>
                    </td>
                    <td>
                        <li>MEMELIHARA reputasi organisasi PMI di tingkat Nasional dan Internasional</li>
                        <li>MENJADI organisasi kemanusiaan terdepan yang memberikan layanan berkualitas 
                            kepada masyarakat sesuai dengan prinsip-prinsip dasar Gerakan Palang Merah dan Bulan Sabit Merah</li>
                        <li>MENINGKATKAN integritas dan kemandirian organisasi melalui kerjasama strategis yang berkesinambungan 
                            dengan pemerintah, swasta, mitra gerakan, masyarakat, dan pemangku kepentingan lainnya di semua </li>
                    </td><br>
                </tr>
                <tr class="form-group">
                    <td>
                        <h6>TUJUAN STRATEGIS</h6>
                    </td>
                    <td>
                        <li>MEMELIHARA reputasi dan meningkatkan akuntabilitas PMI 
                            sebagai organisasi kemanusiaan di tingkat Nasional maupun Internasional</li>
                        <li>MENINGKATKAN ketersediaan darah yang aman, mudah dijangkau, berkualitas dan 
                            berkesinambungan di seluruh Indonesia</li>
                        <li>MENINGKATKAN rekrutmen dan pembinaan Relawan sebagai tulang-punggung layanan 
                            kemanusiaan PMI, baik secara kuantitas dan kualitas</li>
                        <li>MENINGKATKAN mutu dan jangkauan pelayanan penanggulanan bencana, krisis kesehatan dan krisis kemanusiaan lainnya, 
                            melalui penguatan unit-unit pelayanan PMI di semua tingkatan dan pengembangan potensi </li>
                        <li>MEWUJUDKAN PMI yang berfungsi baik, dengan Kepemimpinan yang kolektif-kolegial dan berpedoman 
                            kuat pada Prinsip-Prinsip Dasar Gerakan Internasional PM/BSM dengan tatakelola organisasi dan 
                            Markas yang sinergis dalam pelaksanaan kegiatan, 
                            peraturan organisasi, sistem, dan prosedur yang berlaku</li>
                        <li>MENINGKATKAN kapasitas PMI di semua tingkatan dalam mengelola infrastruktur material 
                            dasar (sarana-prasarana) untuk mendukung kegiatan operasional dan pelayanan</li>
                        <li>MENINGKATKAN kemandirian organisasi PMI secara berkesinambungan melalui kerjasama
                             strategis disemua tingkatan dan inisiatif Pengembangan Sumber Daya yang inovatif</li>
                    </td>
                </tr>
            </h5>
            <hr class="my-4">
        </div><br>
    <div class="container text-center">
        <div class="row">
            <div class="col text-center">
                <h2>
                    SHARE
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h6>
                    
                </h6>
            </div>
            <div class="col">
                <h6>
                    
                </h6>
            </div>
            <div class="col">
                <h6>
                    <img src="images/facebook.png" width="50">
                </h6>
            </div>
            <div class="col">
                <h6>
                    <img src="images/whatsapp.png" width="50">
                </h6>
            </div>
            <div class="col">
                <h6>
                    <img src="images/instagram.png" width="50">
                </h6>
            </div>
            <div class="col">
                <h6>
                    <img src="images/line.png" width="50">
                </h6>
            </div>
            <div class="col">
                <h6>
                    <img src="images/twitter.png" width="50">
                </h6>
            </div>
            <div class="col">
                <h6>
                    
                </h6>
            </div>
            <div class="col">
                <h6>
                    
                </h6>
            </div>
        </div>
        <br><br>
        <h6>
            Sumber data:
        </h6>
        <h5>
        PMI Kabupaten Probolinggo
        </h5><br>
        <h6>
            Naskah:
        </h6>
        <h5>
        PMI Kabupaten Probolinggo
        </h5><br>
        <h6>
            Grafis:
        </h6>
        <h5>
            Tim IT PMI Kabupaten Probolinggo
        </h5><br>
        <h6>
            Tata Letak: 
        </h6>
        <h5>
        Tim IT PMI Kabupaten Probolinggo
        </h5><br>
        <h6>
            Tim Redaksi:
        </h6>
        <h5>
            Dewi Imani Al Qur' Ani, Dewi Yuniar, Wahyu Agung Ramadhan
        </h5>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>