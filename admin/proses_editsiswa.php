<?php 
include '../Koneksi_PHP/koneksi.php';


    $nisn = $_POST['nisn'];
    $ns = $_POST['nama_siswa'];
    $alm = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $prodi = $_POST['nama_prodi'];
    $kelas = $_POST['nama_kelas'];

    mysqli_query($koneksi, "UPDATE siswa SET nisn ='$nisn', nama_siswa ='$ns', alamat ='$alm', jenis_kelamin ='$jk', nama_prodi ='$prodi', nama_kelas ='$kelas'  where nisn ='$nisn'");
    
	header('location:data_siswa_admin.php?pesan=update');

?>