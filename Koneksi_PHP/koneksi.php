<?php
//koneksi ke mysql 

		$koneksi= mysqli_connect( "localhost:3036", "root" , "" , "smkindonesia" );

		//jika tidak ada koneksi
		if (mysqli_connect_errno()) {
			echo "Koneksi Anda gagal :" . mysqli_connect_error();
		} 
?>