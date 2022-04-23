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
            $edit = mysqli_query($koneksi, "UPDATE pendonor set 
                                                nama = '$_POST[tnama]',
                                                jenis_kelamin = '$_POST[tjenis_kelamin]',
                                                alamat = '$_POST[talamat]',
                                                no_hp = '$_POST[tno_hp]',
                                                umur = '$_POST[tumur]',
                                                berat_badan = '$_POST[tberat_badan]',
                                                gol_darah = '$_POST[tgol_darah]',
                                                donor_ke = '$_POST[tdonor_ke]'
                                            WHERE id_donor = '$_GET[id]'
                                            ");
            //data diedit jika sukses
            if($edit){
                echo "<script>
                        alert('Edit Data Sukses');
                        document.location='donordarah.php';
                    </script>";
            }else{
                echo "<script>
                        alert('Edit Data Gagal');
                        document.location='donordarah.php';
                    </script>";
                }
            }
        else{
            //data disimpan
            $simpan = mysqli_query($koneksi, "INSERT INTO pendonor (nama, jenis_kelamin, alamat, no_hp, umur, berat_badan, gol_darah, donor_ke)
                                            VALUES ('$_POST[tnama]', 
                                                '$_POST[tjenis_kelamin]', 
                                                '$_POST[talamat]', 
                                                '$_POST[tno_hp]',
                                                '$_POST[tumur]',
                                                '$_POST[tberat_badan]',
                                                '$_POST[tgol_darah]', 
                                                '$_POST[tdonor_ke]')
                                            ");
            if($simpan){ //jika simpan data sukses
                echo "<script>
                        alert('Menambahkan Data Sukses');
                        document.location='donordarah.php';
                    </script>";
            }else{
                echo "<script>
                        alert('Menambahkan Data Gagal');
                        document.location='donordarah.php';
                    </script>";
            }
        }
    }

//Eksekusi button edit dan hapus
    if(isset($_GET['hal'])){
        //eksekusi data yang akan diedit
        if($_GET['hal'] == "edit"){
            //menampilkan data yang diedit
            $hasil = mysqli_query($koneksi, "SELECT * FROM pendonor WHERE id_donor = '$_GET[id]' ");
            $data = mysqli_fetch_array($hasil);
            if($data){ //jika data ditemukan maka data ditampung di variabel
                $vnama = $data['nama'];
                $vjenis_kelamin = $data['jenis_kelamin'];
                $valamat = $data['alamat'];
                $vno_hp = $data['no_hp'];
                $vumur = $data['umur'];
                $vberat_badan = $data['berat_badan'];
                $vgol_darah = $data['gol_darah'];
                $vdonor_ke = $data['donor_ke'];
            }
        }
        else if($_GET['hal'] == "hapus")
        {
            $hapus = mysqli_query($koneksi, "DELETE FROM pendonor WHERE id_donor = '$_GET[id]'");
            if($hapus){
                echo "<script>
                        alert('Hapus Data Sukses');
                        document.location='donordarah.php';
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
<div class="container">
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
    <br><br><br>
     <!-- Judul-->
    <h2 class="text-center">Formulir Donor Darah</h2>
    <!-- Awal card form-->
    <div class="card mt-4">
    <div class="card-header bg-danger text-black" >
        Form Data Donor Darah
    </div>
    <div class="card-body">
        <form method="post" action="">
            <table>    
                <tr class="form-group">
                    <td>
                        <label>Nama</label>
                    </td>
                    <td>
                        <input type="text" name="tnama" value="<?=@$vnama?>" class="from-control" placeholder="Input Nama Anda disini !" ruqueired>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Jenis Kelamin</label>
                    </td>
                    <td>
                        <select class="from-control" name="tjenis_kelamin">
                            <option value="<?=@$vjenis_kelamin?>"><?@$vjenis_kelamin?></option>
                            <option value="laki-laki">Laki - Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Alamat</label>
                    </td>
                    <td>
                        <textarea class="form-control" name="talamat" placeholder="input alamat anda" ><?=@$alamat?></textarea>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Nomor HP</label>
                    </td>
                    <td>
                        <input type="text" name="tno_hp" value="<?=@$vno_hp?>" class="from-control" placeholder="Input nohp Anda disini !" ruqueired>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Umur</label>
                    </td>
                    <td>
                        <input type="text" name="tumur" value="<?=@$vumur?>" class="from-control" placeholder="Input umur Anda disini !" ruqueired>
                    </td>                
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Berat Badan</label>
                    </td>
                    <td>
                        <input type="text" name="tberat_badan" value="<?=@$vberat_badan?>" class="from-control" placeholder="Input BB Anda disini !" ruqueired>
                    </td>                
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Golongan Darah</label>
                    </td>
                    <td>
                        <input type="text" name="tgol_darah" value="<?=@$vgol_darah?>" class="from-control" placeholder="Input gol.darah Anda disini !" ruqueired>
                    </td>                
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Donor Ke - </label>
                    </td>
                    <td>
                        <input type="text" name="tdonor_ke" value="<?=@$vdonor_ke?>" class="from-control" placeholder="Input jumlah Anda disini !" ruqueired>
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
        Daftar Pendonor Darah
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No.Hp</th>
                <th>Umur</th>
                <th>BB</th>
                <th>Golongan Darah</th>
                <th>Donor Ke</th>
                <th>Action</th>
            </tr>

            <?php
                $hasil = mysqli_query($koneksi, "SELECT * FROM pendonor order by id_donor desc");
                while($data = mysqli_fetch_array($hasil)) :
                $no+1;
            
            ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['nama'];?></td>
                <td><?=$data['jenis_kelamin'];?></td>
                <td><?=$data['alamat'];?></td>
                <td><?=$data['no_hp'];?></td>
                <td><?=$data['umur'];?></td>
                <td><?=$data['berat_badan'];?></td>
                <td><?=$data['gol_darah'];?></td>
                <td><?=$data['donor_ke'];?></td>
                <td>
                    <a href="donordarah.php?hal=edit&id=<?=$data['id_donor']?>" class="btn btn-warning">Edit</a>
                    <a href="donordarah.php?hal=hapus&id=<?=$data['id_donor']?>"
                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endwhile; //penutup perulangan ?> 
        </table>
    </div>
    </div>
<!-- Akhir card tabel-->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.css"></script>
</body>
</html>