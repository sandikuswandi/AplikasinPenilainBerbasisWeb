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
                     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" style="width :900px;" type="search" placeholder="Search" aria-label="Search" name="cari">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
 <table style="margin-top=500px;" class="table table-striped table-dark" >
	<tr>
		  
                      <th>ID NILAI</th>
                    <th>NAMA SISWA</th>
                    <th>KELAS</th>
                    <th>MATA PELAJARAN</th>
                    <th>N.TUGAS</th>
                    <th>N.UTS</th>
                    <th>N.UAS</th>
                    <th>N.Akhir</th>
                    <th>KETERANGAN</th>
	</tr>
    <hr> <hr>
    <hr> <hr> <hr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($koneksi,"select * from nilai where nama_siswa like '%".$cari."%'");				
	}else{
        $data = mysqli_query($koneksi,"select * from nilai");
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
    
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
    
		 <td><?php echo $d['id_nilai']; ?></td>
                    <td><?php echo $d['nama_siswa']; ?></td>
                    <td><?php echo $d['nama_kelas']; ?></td>
                    <td><?php echo $d['nama_mapel']; ?></td>
                    <td><?php echo $d['nilai_tugas']; ?></td>
                    <td><?php echo $d['nilai_uts']; ?></td>
                    <td><?php echo $d['nilai_uas']; ?></td>
                      <td><?php echo round($nilai_akhir, 2); ?></td>
                       <td><?php echo $ket; ?></td>
	</tr>
	<?php } ?>
</table>
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