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
          <h1 class="display-4 text-center">Informasi Manfaat Donor Darah<br>
            <img src="images/manfaat.jpg" width="350"><br>
          <br></h1>
            <hr class="my-4">
            <h5 class="text-center">Berikut adalah manfaat donor darah yang harus anda ketahui:<br></h5>
                <tr class="form-group">
                    <td><ol>
                        <h4><li>Menurunkan risiko terkena penyakit jantung dan pembuluh darah</li></h4>
                        <p>Donor darah secara teratur diketahui dapat menurunkan kekentalan darah. 
                          Kekentalan darah merupakan salah satu faktor yang berperan dalam meningkatkan risiko terkena penyakit jantung.</p>
                        <p>Semakin kental darah yang mengalir dalam tubuh, semakin tinggi pula 
                          kemungkinan terjadinya gesekan antara darah dan pembuluh darah. 
                          Gesekan yang terjadi pada pembuluh darah ini dapat merusak 
                          sel-sel dinding pembuluh darah yang selanjutnya dapat meningkatkan risiko terjadinya sumbatan pembuluh darah.</p>
                        <p>Sebuah penelitian menunjukkan manfaat donor darah terhadap penyakit jantung. Dari penelitian tersebut diketahui bahwa orang yang rutin melakukan donor darah memiliki kemungkinan 
                          terkena penyakit jantung 88 persen lebih rendah daripada mereka yang tidak melakukan donor darah.</p>
                        <p>Selain itu, manfaat donor darah juga dapat membantu membuang kelebihan zat besi yang terdapat dalam tubuh. Zat besi yang berlebihan dalam darah dapat menyebabkan oksidasi kolesterol. Hasil dari proses 
                          oksidasi tersebut dapat menumpuk pada dinding arteri dan meningkatkan risiko terjadinya serangan jantung dan stroke.</p>
                        <p>Melalui donor darah, kadar zat besi dalam tubuh dapat menjadi lebih stabil dan menurunkan risiko terkena penyakit jantung dan pembuluh darah.</p>
                        <h4><li>Menurunkan risiko kanker</li></h4>
                        <p>Berkurangnya zat besi yang berlebih dalam tubuh Anda saat melakukan donor darah juga dapat mengurangi risiko terkena kanker. Sebaliknya, kadar zat besi dalam darah yang terlalu berlebihan dianggap sebagai salah satu penyebab meningkatnya radikal bebas dalam tubuh yang dapat menjadi faktor risiko terjadinya kanker dan penuaan.</p>
                        <p>Sebuah penelitian yang melibatkan 2 kelompok dengan total 1200 orang memperlihatkan manfaat donor darah terhadap risiko kanker. Pada kelompok yang melakukan donor darah 2 kali dalam satu tahun diketahui memiliki kadar besi dalam darah yang lebih stabil dan risiko kanker yang lebih rendah dibandingkan dengan kelompok yang tidak melakukan donor darah.</p>
                        <h4><li>Membantu menurunkan berat badan</li></h4>
                        <p>Manfaat donor darah lainnya adalah membantu menurunkan berat badan. Hal ini karena rata-rata orang dewasa dapat membakar 650 kalori saat memberikan 450 ml darahnya.</p>
                        <p>Pendonor yang secara rutin menyumbangkan darahnya dapat mengalami penurunan berat badan yang berarti. Akan tetapi, perlu diingat juga bahwa donor darah tidak dapat dijadikan sebagai pilihan program penurunan berat badan.</p>
                        <p>Anda tetap harus menerapkan pola hidup sehat dengan memperhatikan asupan makanan dan olahraga secara teratur supaya dapat mencapai berat badan yang ideal.</p>
                        <h4><li>Mendeteksi penyakit serius</li></h4>
                        <p>Setiap kali akan mendonorkan darah, Anda akan menjalani pemeriksaan dasar rutin seperti pemeriksaan berat badan, suhu, nadi, tekanan darah, dan kadar hemoglobin.</p>
                        <p>Selain itu, Anda juga akan diminta untuk menjalani pemeriksaan darah untuk mendeteksi ada tidaknya penyakit seperti HIV, hepatitis B, hepatitis C, sipilis, dan malaria. Hal ini bertujuan untuk mencegah terjadinya penularan penyakit melalui transfusi.</p>
                        <p>Manfaat donor darah tidak hanya itu saja. Bagi pendonor, pemeriksaan ini tentu saja berguna untuk mendeteksi penyakit-penyakit tertentu secara dini. Jadi selain membantu orang lain yang membutuhkan darah, Anda juga dapat mendapatkan cek kesehatan secara cuma-cuma.</p>
                        <h4><li>Membuat lebih sehat secara psikologis dan memperpanjang usia</li></h4>
                        <p>Sebuah penelitian dalam bidang psikologi menunjukkan bahwa orang yang mendonorkan darahnya dengan tujuan menolong orang lain memiliki risiko kematian yang lebih rendah dibandingkan dengan orang yang melakukan donor darah untuk kepentingan sendiri atau bahkan tidak mendonorkan darahnya sama sekali.</p>
                        <p>Selain itu, menyumbangkan hal yang tidak ternilai harganya kepada yang membutuhkan akan membuat kita merasakan kepuasan psikologis.</p>
                        </ol>
                    </td><br>
                </tr>
                <hr class="my-4">
        </div><br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>