<?php 
include '../Koneksi_PHP/koneksi.php';


    $nd = $_POST['id_nilai'];
    $ns = $_POST['nilai_uts'];
    $alm = $_POST['nilai_uas'];
    $jk = $_POST['nilai_tugas'];
    $prodi = $_POST['nama_siswa'];
    $mpl = $_POST['nama_mapel'];
    $kelas = $_POST['nama_kelas'];

    mysqli_query($koneksi, "UPDATE nilai SET id_nilai ='$nd', nilai_uts ='$ns', nilai_uas ='$alm', nilai_tugas ='$jk', nama_siswa ='$prodi', nama_mapel='$mpl', nama_kelas ='$kelas'  where id_nilai ='$nd'");
    
	header('location:nilaisiswa_admin.php?pesan=update');
