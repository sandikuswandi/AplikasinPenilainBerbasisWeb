<?php 
// mengaktifkan session php
session_start();

// menghapus semua session
session_destroy($_SESSION['username_u']);

// mengalihkan halaman ke halaman login
header("location:login.php");
?>