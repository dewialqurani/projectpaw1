<?php

session_start();

include "koneksi.php";


$username = $_POST["username"];
$password = md5($_POST["password"]);


$query="SELECT * FROM users WHERE users.username='$username' AND users.password='$password'";
$login=mysqli_query($koneksi,$query);

$cek=mysqli_num_rows($login);

if($cek>0){
    $data=mysqli_fetch_assoc($login);
    if($data['level']=="Admin"){
        $_SESSION['login']=true;
        $_SESSION['nama']=$data['nama'];
        $_SESSION['username']=$username;
        $_SESSION['level']="admin";

        header("location:donordarah.php");
    }else if($data['level']=="Pendonor"){
        $_SESSION['login']=true;
        $_SESSION['nama']=$data['nama'];
        $_SESSION['username']=$username;
        $_SESSION['level']="pendonor";

        header("location:tpendonor.php");
    }
}else{
	echo"<script>
    alert('Username atau password salah')
    document.location.href='index.php'
    </script>";
}

?>