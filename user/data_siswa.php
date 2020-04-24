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
    <title> DATA SISWA SMK INDONESIA </title>
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
            <table class="table table-striped table-dark" border="1">
                <br>
                <h5> Data Siswa SMK INDONESIA </h5>
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>NAMA SISWA</th>
            <th>ALAMAT</th>
            <th>JENIS KELAMIN</th>
            <th>NAMA JURUSAN</th>
            <th>NAMA KELAS</th>

        </tr>
        <?php 
        include '../Koneksi_PHP/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from siswa");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nisn']; ?></td>
                <td><?php echo $d['nama_siswa']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['nama_prodi']; ?></td>
                <td><?php echo $d['nama_kelas']; ?></td>
            </tr>
            <?php 
        }
        ?>
    </table>
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