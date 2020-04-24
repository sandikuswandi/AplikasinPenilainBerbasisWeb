<?php 
include '../Koneksi_PHP/koneksi.php';

    $id = $_POST['id_guru'];
    $ng = $_POST['nama_guru'];
    $alm = $_POST['alamat'];
    $jk = $_POST['nama_mapel'];

    mysqli_query($koneksi, "UPDATE guru SET id_guru ='$id', nama_guru ='$ng', alamat ='$alm', nama_mapel ='$jk' where id_guru ='$id'");
    
	header('location:dataguru_admin.php');

?>