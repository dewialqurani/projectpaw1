<?php
//membuat koneksi database

$server = "localhost";
$user = "root";
$password = "";
$dbname = "utspaw";

$koneksi = mysqli_connect($server,$user,$password,$dbname)or die(mysqli_error($koneksi));
?>