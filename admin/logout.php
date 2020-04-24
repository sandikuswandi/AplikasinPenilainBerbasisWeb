<?php 
// mengaktifkan session php
session_start();

// menghapus semua session
session_destroy($_SESSION['username']);

// mengalihkan halaman ke halaman login
header("location:login.php");
?>