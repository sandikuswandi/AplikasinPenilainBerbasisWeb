<?php 
include '../Koneksi_PHP/koneksi.php';

	$id = $_GET['nisn'];
   
    mysqli_query($koneksi,"DELETE FROM siswa WHERE nisn = '$id' ");
	header('location:data_siswa_admin.php');

 ?>