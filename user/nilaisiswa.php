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
    <title> NILAI SISWA SMK INDONESIA </title>
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
        <table  class="table table-striped table-dark" border="1">
                <br>
                <h5> Data Nilai Siswa SMK INDONESIA </h5>
        <tr>
            <th>No</th>
            <th>NAMA SISWA</th>
            <th>KELAS</th>
            <th>MATA PELAJARAN</th>
            <th>NILAI TUGAS </th>
            <th>NILAI UTS</th>
            <th>NILAI UAS</th>
            <th>NILAI AKHIR</th>
            <th>PREDIKAT</th>
           
        </tr>
        <?php 
        include '../Koneksi_PHP/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from nilai");
        while($d = mysqli_fetch_array($data)){
            ?> 
<?php
            $tugas = $d['nilai_tugas'];
            $uts = $d['nilai_uts'];
            $uas = $d['nilai_uas'];
            $nilai_akhir =($uts + $uas + $tugas)/3;
             if ($nilai_akhir>90) {
                $ket=("A");
            }
            elseif ($nilai_akhir>=70) {
                $ket=("B");
            }
            else {
                $ket=("C");
            }
   ?>
          <tr>
                    <td><?php echo $no++; ?></td>
                   
                    <td><?php echo $d['nama_siswa']; ?></td>
                    <td><?php echo $d['nama_kelas']; ?></td>
                    <td><?php echo $d['nama_mapel']; ?></td>
                    <td><?php echo $d['nilai_tugas']; ?></td>
                    <td><?php echo $d['nilai_uts']; ?></td>
                    <td><?php echo $d['nilai_uas']; ?></td>
                      <td><?php echo round($nilai_akhir, 2); ?></td>
                       <td><?php echo $ket; ?></td>
                  
                    <?php
        }
        ?>
    </table>
            <br>
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