<?php
/*=======================================================================================
NIM: 190030509
NAMA: I Km Triyana Artha Putra
KELAS: BL-193
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