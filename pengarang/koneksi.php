<?php
/*=======================================================================================
NIM:
NAMA:
KELAS
=========================================================================================*/

$host="localhost";
$username="root";
$password="";
$database="perpustakaan";

//membuat koneksi
$koneksi=mysqli_connect($host, $username, $password, $database);

//cek koneksi
if (!$koneksi) {
	//error
	die("Koneksi gagal: " .  mysqli_connect_error());	
}
?>