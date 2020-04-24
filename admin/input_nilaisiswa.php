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
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>ADMIN SMK INDONESIA</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="logo.jpg">
            <p><b> ADMIN SMK INDONESIA </b></p>
            <h6> Jl.Raya Padalarang, Kabupaten Bandung Barat </h6>
        </div>
        <div class="tambahan">
            <img src="logo.jpg">
        </div>
        <div class="menuAtas">
            <a href="admin.php"> <b> HOME </b></a>
            <a href="data_siswa_admin.php"> <b>  DATA SISWA </b></a>
            <a href="dataguru_admin.php"> <b> DATA GURU </b></a>
            <a href="nilaisiswa_admin.php"> <b> NILAI SISWA </b></a>
   
            <a href="logout.php"> <b> LOGOUT </b></a>
        </div>
        <div class="konten">
        <form method="post" action="proses_datanilai.php">
    <table class="table table-striped table-dark" border="7">
         <tr>
            <td>ID nilai</td>
            <td><input type="hidden" name="id_nilai" ></td>
        </tr>
        
        <tr>
            <td>Nilai UTS</td>
            <td><input type="text" name="nilai_uts" ></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td><input type="text" name="nilai_uas" ></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td><input type="text" name="nilai_tugas" ></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td><input type="text" name="nama_siswa" ></td>
        </tr>
        <tr>
            <td>Nama Mapel</td>
            <td><input type="text" name="nama_mapel" ></td>
        </tr>
         <tr>
            <td>Nama Kelas</td>
            <td><input type="text" name="nama_kelas" ></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan">
            <button class=""><a href="data_siswa_admin.php?>">KEMBALI</a></button>
            </td>
        </tr>
    </table>
    </form>
        </div>
</div>
</body>
</html>