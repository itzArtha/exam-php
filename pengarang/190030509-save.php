<?php
require "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$kota = $_POST['kota'];
$kontak = $_POST['kontak'];
$phone = $_POST['phone'];
$alamat = $_POST['alamat'];
$status = true;

$query = "INSERT INTO t_penerbit (nama, kota, contact_name, contact_phone, alamat, email, status) VALUES('$nama', '$kota', '$kontak', '$phone', '$alamat', '$email', '$status')";
$s = mysqli_query($koneksi,$query);

mysqli_close($koneksi);
?>