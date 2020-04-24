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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> VISI & MISI SMK INDONESIA </title>
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
            <div class="login">
          <img src="tutwuri.jpg" >
            </div>

        <div class="konten">
            <b>Visi</b>
        <br><br>
        Menjadi Sekolah Menengah Kejuruan yang berkarakter, berbudaya, berwawasan lingkungan,<br> menghasilkan insan yang bertaqwa, profesional, mampu berwirausaha dan berdaya saing global <br><br>
        <b> Misi </b>
        <br><br>
        1. Menyelenggarakan pembelajaran sistem CBT (Competency-Based Training) dan PBE (Production-Based Education) menggunakan bilingual dengan pendekatan ICT. <br>
        2. Mengembangkan kurikulum, metodologi pembelajaran dan system penilaian berbasis kompetensi yang berkarakter. <br>
        3. Menyelenggarakan kegiatan ekstrakurikuler agar peserta didik memiliki multiskills yang mampu mengembangkan kecakapan hidup (life skill) dan berakhlak mulia, kreatif dan inovatif. <br>
        4. Meningkatkan kualitas  pendidik dan tenaga kependidikan yang memenuhi kualifikasi profesional, kreatif, inovatif, berkarakter dan berbudaya. <br>
        5. Meningkatkan fasilitas dan lingkungan belajar yang aman, nyaman, memenuhi standar nasional pendidikan, standar kerja industri secara kualitas dan kuantitas. <br>
        6. Menerapkan dan mengembangkan sistem penjaminan mutu pendidikan  yang ramah lingkungan, ramah anak dan responsif gender. <br>
        7. Membangun kemitraan (link and match) dengan lembaga yang relevan baik dalam maupun luar negeri. <br>
            <a href="logout.php"> <b> logout</b></a>  
        </div>
        <div class="gambar">
            <img src="Logo.jpg">
        </div>
        <div class="footer">
            <b> &copy;copyright TIM 4. </b>
        </div>
</div>
</body>
</html>