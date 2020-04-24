<!DOCTYPE >
<?php
include "../Koneksi_PHP/koneksi.php";
session_start();

if ($_SESSION['status']!= "login") {
    header("location:login.php?pesan=gagal");
}
?>
<html>
<head>
    <link rel="stylesheet" href="../Tambahan/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="galeri.css">
    <title> GALERI </title>
</head>
<body>
    <div class="container">
        <div class="header">            
        <img src="Logo.jpg">
        <b> SMK INDONESIA </b>
        <h6> Jl.Raya Padalarang, Kabupaten Bandung Barat </h6>
        <div class="tambahan">
            <img src="poto1.jpg">
        </div>
        </div>        
            <div class="menuAtas">
            <a href="home.php"> <b> HOME </b></a>
            <a href="data_siswa.php"> <b>  DATA SISWA </b></a>
            <a href="dataguru.php"> <b> DATA GURU </b></a>
            <a href="nilaisiswa.php"> <b> NILAI SISWA </b></a>
            <a href="galeri.php"> <b> GALERI </b></a>
             <a href="pencarian.php"> <b> PENCARIAN </b></a>
            </div>        
                <div class="badan">
                    <div class="konten">
                    <b> Galeri SMK INDONESIA </b> <br>
                    <br>
                    <div class="poto1">
                        <img src="poto1.jpg">
                    </div>
                    <br>
                    <div class="poto2">
                        <img src="poto2.jpg">
                    </div>
                    <br>
                    <div class="poto3">
                        <img src="poto3.png">
                    </div>
                    <br>
                   <a href="logout.php"> <b> logout</b></a>
                    </div>
                        <div class="footer">
                            <b> &copy;copyright TIM 4. </b>
                                </div>
                            </div>
                        </div>
</body>
</html>