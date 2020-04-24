<?php
include '../Koneksi_PHP/koneksi.php';

session_start();

$user = $_POST['username'];
$pass = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from login where username='$user' and password='$pass'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;
    $_SESSION['status'] = "login";

    header('location:admin.php');    
} else {
    header("location:login.php?pesan=gagal");
}


 
