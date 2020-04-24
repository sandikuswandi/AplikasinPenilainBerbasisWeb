<!DOCTYPE>
<html>
<?php
include "../Koneksi_PHP/koneksi.php";
session_start();

if ($_SESSION['status']!= "login") {
    header("location:login.php?pesan=gagal");
}
?>

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
            <a href="data_siswa_admin.php"> <b> DATA SISWA </b></a>
            <a href="dataguru_admin.php"> <b> DATA GURU </b></a>
            <a href="nilaisiswa_admin.php"> <b> NILAI SISWA </b></a>
      
            <a href="logout.php"> <b> LOGOUT </b></a>
        </div>
        <div class="konten">
            <table class="table table-striped table-dark" border="1">
                <tr>
                    <th>No</th>
                      <th>ID NILAI</th>
                    <th>NAMA SISWA</th>
                    <th>KELAS</th>
                    <th>MATA PELAJARAN</th>
                    <th>N.TUGAS</th>
                    <th>N.UTS</th>
                    <th>N.UAS</th>
                    <th>N.Akhir</th>
                    <th>KETERANGAN</th>
                 
                    <th>AKSI</th>
                  
                </tr>
                <?php 
        include '../Koneksi_PHP/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from nilai");
        while($d = mysqli_fetch_array($data)){     
                    
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
                   <td><?php echo $d['id_nilai']; ?></td>
                    <td><?php echo $d['nama_siswa']; ?></td>
                    <td><?php echo $d['nama_kelas']; ?></td>
                    <td><?php echo $d['nama_mapel']; ?></td>
                    <td><?php echo $d['nilai_tugas']; ?></td>
                    <td><?php echo $d['nilai_uts']; ?></td>
                    <td><?php echo $d['nilai_uas']; ?></td>
                      <td><?php echo round($nilai_akhir, 2); ?></td>
                       <td><?php echo $ket; ?></td>
                        <script type="text/javascript" language="JavaScript">
                            function konfirmasi() {
                                tanya = confirm("Apakah Anda Yakin Akan Menghapus Data Nilai?");
                                if (tanya == true) return true;
                                else return false;
                            }
                        </script>
                    

                    <td><button class="btn btn-warning"><a href="input_editnilai.php?id_nilai=<?php echo $d['id_nilai']; ?>"> EDIT</a></button>
                        <button class="btn btn-danger"><a onclick="return konfirmasi()" href="hapus_nilai.php?id_nilai=<?php echo $d['id_nilai']; ?>">HAPUS</a></button></td>
                </tr>
                <?php 
        }
        ?>
            </table>
            <form action="input_nilaisiswa.php">
                <button class="btn btn-primary">Tambah data</button>
                <a href="admin.php"> <b> Back </b></a>
            </form>
        </div>
    </div>
</body>

</html>