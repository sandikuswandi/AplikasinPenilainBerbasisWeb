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
        <table class="table table-striped table-dark" border="1">
        <tr>
            <th>No</th>
            <th>ID GURU</th>
            <th>NAMA GURU</th>
            <th>ALAMAT</th>
            <th>BIDANG STUDI</th>

        </tr>
        <?php 
        include '../Koneksi_PHP/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from guru");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_guru']; ?></td>
                <td><?php echo $d['nama_guru']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['nama_mapel']; ?></td>
                   <script type="text/javascript" language="JavaScript">
                            function konfirmasi() {
                                tanya = confirm("Apakah Anda Yakin Akan Menghapus Data Guru?");
                                if (tanya == true) return true;
                                else return false;
                            }
                        </script>
                <td><button class="btn btn-warning"><a href="input_editguru.php?id_guru=<?php echo $d['id_guru']; ?>"> EDIT</a></button>
                <button class="btn btn-danger"><a  onclick="return konfirmasi()" href="hapus_guru.php?id_guru=<?php echo $d['id_guru']; ?>">HAPUS</a></button></td>
            </tr>
            <?php 
        }
        ?>
    </table>
                <form action="input_dataguru.php">
		            <button class="btn btn-primary">Tambah data</button>
                <a href="admin.php"> <b> Back </b></a> 
                </form>
        </div>
</div>
</body>
</html>