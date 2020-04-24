<?php
include '../Koneksi_PHP/koneksi.php';

session_start();

$user = $_POST['username_u'];
$pass = $_POST['password_u'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from loginuser where username_u='$user' and password_u='$pass'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    
    $_SESSION['username_u'] = $user;
    $_SESSION['password_u'] = $pass;
    $_SESSION['status'] = "login";

    header('location:home.php');    
} else {
    header("location:login.php?pesan=gagal");
}
