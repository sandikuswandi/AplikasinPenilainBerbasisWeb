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
            <br>
            <h5> Edit Data Siswa </h5>

<?php
	include "../Koneksi_PHP/koneksi.php";
    $id = $_GET['id_nilai'];
	$data = mysqli_query($koneksi,"select * from nilai where id_nilai = '$id'");
	while ($d = mysqli_fetch_array($data)) {
?>
    
    <form method="post" action="proses_editnilai.php">
    <table class="table table-striped table-dark" border="7">
        <tr>
            <td>Id Nilai</td>
            <td>
            <input type="hidden" name="id_nilai" value="<?php echo $d['id_nilai']; ?>"></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td><input type="text" name="nilai_uts" value="<?php echo $d['nilai_uts']; ?>"></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td><input type="text" name="nilai_uas" value="<?php echo $d['nilai_uas']; ?>"></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td><input type="text" name="nilai_tugas" value="<?php echo $d['nilai_tugas']; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama_siswa" value="<?php echo $d['nama_siswa']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Mapel</td>
            <td><input type="text" name="nama_mapel" value="<?php echo $d['nama_mapel']; ?>"></td>
        </tr>
         <tr>
            <td>Nama Kelas</td>
            <td><input type="text" name="nama_kelas" value="<?php echo $d['nama_kelas']; ?>"></td>
           
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan">
            <button class=""><a href="nilaisiswa_admin.php?>">KEMBALI</a></button>
        </td>
        </tr>
    </table>
    </form>
<?php 
}
?>
        </div>
</div>
</body>
</html>