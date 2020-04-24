<?php 
include '../Koneksi_PHP/koneksi.php';

	$id = $_GET['id_nilai'];
   
    mysqli_query($koneksi,"DELETE FROM nilai WHERE id_nilai = '$id' ");
	header('location:nilaisiswa_admin.php');

 ?>