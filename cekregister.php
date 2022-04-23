<?php
include"koneksi.php";
global $koneksi;

$nama=$_POST["nama_lengkap"];
$username=$_POST["username"];
$password=md5($_POST["password"]);

$query="INSERT INTO users (nama_lengkap, username,password, level) VALUES ('$nama', '$username', '$password', 'Pendonor');";
$reg=mysqli_query($koneksi, $query);


if($reg){
    echo"<script>
        alert('Anda berhasil mendaftar, silahkan login')
        document.location.href='index.php'
    </script>";
}else{
    echo"<script>
        alert('Anda gagal mendaftar')
        document.location.href='index.php'
    </script>";
}
?>