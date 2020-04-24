<?php 
include '../Koneksi_PHP/koneksi.php';

	$id = $_POST['id_guru'];
	$ng = $_POST['nama_guru'];
	$alm = $_POST['alamat'];
	$nm = $_POST['nama_mapel'];
	

	mysqli_query($koneksi,"insert into guru values('$id','$ng','$alm','$nm') ");
	header('location:dataguru_admin.php');

 ?>