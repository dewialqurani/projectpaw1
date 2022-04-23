<?php
//membuat koneksi database

$server = "localhost";
$user = "root";
$password = "";
$dbname = "utspaw";
$no = 1;

$koneksi = mysqli_connect($server,$user,$password,$dbname)or die(mysqli_error($koneksi));
?>

<!DOCTYPE html>
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
          <h1 class="display-4 text-center">Informasi Syarat Donor Darah<br><br>
            <img src="images/darah4.jpg" width="350"><br>
          </h1><br>
          <h3 class="lead">Syarat Untuk Menjadi Donor Darah : <br><br>
          Donor darah adalah orang yang memberikan darah secara sukarela untuk maksud 
          dan tujuan transfusi darah bagi orang lain yang membutuhkan.
           Semua orang dapat menjadi donor darah jika memenuhi persyaratan yang berlaku.
        </h3>
            <hr class="my-4">
            <h5 class="text-center"> APA SYARAT SYARAT UNTUK MENJADI DONOR DARAH ?<br></h5>
                <tr class="form-group">
                    <td><ol>
                        <li>Sehat jasmani dan rohani</li>
                        <li>Usia 17 sampai dengan 65 tahun.</li>
                        <li>Berat badan minimal 45 kg.</li>
                        <li>Tekanan Darah :</li>
                        <ol><ul> - sistole 100 - 170</ul>
                        <ul> - diastole 70 - 100</ul></ol>
                        <li>Kadar haemoglobin 12,5g% s/d 17,0g%</li>
                        <li>Interval donor minimal 12 minggu atau 3 bulan sejak donor darah sebelumnya (maksimal 5 kali dalam 2 tahun)</li>
                        </ol>
                    </td><br>
                </tr>
                <hr class="my-4">
                <h5 class="text-center">JANGAN MENYUMBANGKAN DARAH JIKA :<br></h5>
                <tr class="form-group">
                    <td>
                        <ol>
                          <li>Mempunyai penyakit jantung dan paru paru</li>
                          <li>Menderita kanker</li>
                          <li>Menderita tekanan dara tinggi (hipertensi)</li>
                          <li>Menderita kencing manis (diabetes militus)</li>
                          <li>Memiliki kecenderungan perdarahan abnormal atau kelainan darah lainnya.</li>
                          <li>Menderita epilepsi dan sering kejang</li>
                          <li>Menderita atau pernah menderita Hepatitis B atau C.</li>
                          <li>Mengidap sifilis</li>
                          <li>Ketergantungan Narkoba.</li>
                          <li>Kecanduan Minuman Beralkohol</li>
                          <li>Mengidap atau beresiko tinggi terhadap HIV/AIDS</li>
                          <li>Dokter menyarankan untuk tidak menyumbangkan darah karena alasan kesehatan.</li>
                        </ol>
                    </td>
                </tr>
            </h5>
            <hr class="my-4">
        </div><br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>