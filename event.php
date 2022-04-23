<?php
//membuat koneksi database
session_start();
	if($_SESSION['level']!='admin' || empty($_SESSION['login'])){
		header("location:index.php");
	}
$server = "localhost";
$user = "root";
$password = "";
$dbname = "utspaw";
$no = 1;

$koneksi = mysqli_connect($server,$user,$password,$dbname)or die(mysqli_error($koneksi));
//keterangan Tombol Simpan
if(isset($_POST['bsimpan'])){
    //uji data diedit atau disimpan
    if($_GET['hal'] == "edit"){ 
        $edit = mysqli_query($koneksi, "UPDATE even set 
                                            judul = '$_POST[tjudul]',
                                            tempat = '$_POST[ttempat]',
                                            tanggal = '$_POST[ttanggal]',
                                            waktu = '$_POST[twaktu]'
                                        WHERE id_event = '$_GET[id]'
                                        ");
        //data diedit jika sukses
        if($edit){
            echo "<script>
                    alert('Edit Data Sukses');
                    document.location='event.php';
                </script>";
        }else{
            echo "<script>
                    alert('Edit Data Gagal');
                    document.location='event.php';
                </script>";
            }
        }
    else{
        //data disimpan
        $simpan = mysqli_query($koneksi, "INSERT INTO even (judul, tempat, tanggal, waktu)
                                        VALUES ('$_POST[tjudul]', 
                                            '$_POST[ttempat]', 
                                            '$_POST[ttanggal]',
                                            '$_POST[twaktu]')
                                        ");
        if($simpan){ //jika simpan data sukses
            echo "<script>
                    alert('Menambahkan Data Sukses');
                    document.location='event.php';
                </script>";
        }else{
            echo "<script>
                    alert('Menambahkan Data Gagal');
                    document.location='event.php';
                </script>";
        }
    }
}

//Eksekusi button edit dan hapus
if(isset($_GET['hal'])){
    //eksekusi data yang akan diedit
    if($_GET['hal'] == "edit"){
        //menampilkan data yang diedit
        $hasil = mysqli_query($koneksi, "SELECT * FROM even WHERE id_event = '$_GET[id]' ");
        $data = mysqli_fetch_array($hasil);
        if($data){ //jika data ditemukan maka data ditampung di variabel
            $vjudul = $data['judul'];
            $vtempat = $data['tempat'];
            $vtanggal = $data['tanggal'];
            $vwaktu = $data['waktu'];
        }
    }
    else if($_GET['hal'] == "hapus")
    {
        $hapus = mysqli_query($koneksi, "DELETE FROM even WHERE id_event = '$_GET[id]'");
        if($hapus){
            echo "<script>
                    alert('Hapus Data Sukses');
                    document.location='event.php';
                </script>";
        }
    }
}
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
    
    <br><br><br><br>
    <div class="container">
    <!-- Judul-->
    <h2 class="text-center">Event Donor Darah</h2>

    <!-- Awal card form-->
    <div class="card mt-4">
    <div class="card-header bg-danger text-black" >
        Form Event Donor Darah
    </div>
    <div class="card-body">
        <form method="post" action="">
            <table>    
                <tr class="form-group">
                    <td>
                        <label>Judul</label>
                    </td>
                    <td>
                        <input type="text" name="tjudul" value="<?=@$vjudul?>" class="from-control" placeholder="Input Judul event disini !" ruqueired>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Tempat</label>
                    </td>
                    <td>
                        <input type="text" name="ttempat" value="<?=@$vtempat?>" class="from-control" placeholder="Input tempat event disini !" ruqueired>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Tanggal</label>
                    </td>
                    <td>
                        <input type="date" name="ttanggal" value="<?=@$vtanggal?>" class="from-control">
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Waktu</label>
                    </td>
                    <td>
                        <input type="text" name="twaktu" value="<?=@$vwaktu?>" class="from-control" placeholder="Input waktu event disini !" ruqueired>
                    </td>                
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-success" name="bsimpan">Save</button>
                        <button type="reset" class="btn btn-danger" name="bbatal">Cancel</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </div>
<!-- Akhir card form-->

<!-- Awal card tabel-->
<div class="card mt-4">
    <div class="card-header bg-danger text-black" >
        Daftar Event Donor Darah
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tempat</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>ACTION</th>
            </tr>

            <?php
                $hasil = mysqli_query($koneksi, "SELECT * FROM even order by id_event desc");
                while($data = mysqli_fetch_array($hasil)) :
                $no+1;
            
            ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['judul'];?></td>
                <td><?=$data['tempat'];?></td>
                <td><?=$data['tanggal'];?></td>
                <td><?=$data['waktu'];?></td>
                <td>
                    <a href="event.php?hal=edit&id=<?=$data['id_event']?>" class="btn btn-warning">Edit</a>
                    <a href="event.php?hal=hapus&id=<?=$data['id_event']?>"
                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endwhile;?> 
        </table>
    </div>
    </div>
<!-- Akhir card tabel-->

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.min.css"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>