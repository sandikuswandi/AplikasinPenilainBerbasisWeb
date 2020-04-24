<?php 
include '../Koneksi_PHP/koneksi.php';

	$nisn = $_POST['nisn'];
	$ns = $_POST['nama_siswa'];
	$alm = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
    $prodi = $_POST['nama_prodi'];
    $kelas = $_POST['nama_kelas'];

	mysqli_query($koneksi,"insert into siswa values('$nisn','$ns','$alm','$jk','$prodi','$kelas') ");
	header('location:data_siswa_admin.php');

 ?>