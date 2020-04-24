<?php 
include '../Koneksi_PHP/koneksi.php';

	$id = $_GET['id_guru'];
   
    mysqli_query($koneksi,"DELETE FROM guru WHERE id_guru = '$id' ");
	header('location:dataguru_admin.php');

 ?>