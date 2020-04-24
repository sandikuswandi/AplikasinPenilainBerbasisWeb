<?php 
include '../Koneksi_PHP/koneksi.php';

	$id = $_POST['id_nilai'];
	$uts = $_POST['nilai_uts'];
	$uas = $_POST['nilai_uas'];
	$tgs = $_POST['nilai_tugas'];

	$ns = $_POST['nama_siswa'];
	$nm = $_POST['nama_mapel'];
	$nk = $_POST['nama_kelas'];
	
      

	mysqli_query($koneksi,"insert into nilai values('$id','$uts','$uas','$tgs','$ns','$nm','$nk') ");
	header('location:nilaisiswa_admin.php');

 ?>