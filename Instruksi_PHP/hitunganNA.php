<?php
include '../Koneksi_PHP/koneksi.php';

    $data = mysqli_query($koneksi, "select * from nilai");
   
  while($d = mysqli_fetch_array($data)){
        
    $Ket=1;
    $nama = $d['nama_siswa'];
    $uts = $d['nilai_uts'];
    $uas = $d['nilai_uas'];
    $tugas = $d['nilai_tugas'];
    $nilai_akhir = ($uts + $uas + $tugas)/3;
   

    if ($nilai_akhir>90) {
        $ket=("A");
    }
    elseif ($nilai_akhir>=70) {
       $ket=("B");
    }
    else {
        $ket=("C");
    }
    echo "Ket.". $Ket++; 
    echo "<br>";  
    echo "Nama siswa  : $nama <br> ";
    echo "Nilai akhir : $nilai_akhir <br> ";
    echo "Predikat $ket";
}
?>