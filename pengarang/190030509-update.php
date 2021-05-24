<?php
require "koneksi.php";

$id = $_GET['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$kota = $_POST['kota'];
$kontak = $_POST['kontak'];
$phone = $_POST['phone'];
$alamat = $_POST['alamat'];
$status = isset($_POST['status']) ? true : 0;

$query = "UPDATE t_penerbit SET nama='$nama', kota='$kota', contact_name='$kontak', contact_phone='$phone', alamat='$alamat', email='$email', status='$status' WHERE id_penerbit='$id'";
mysqli_query($koneksi, $query);

mysqli_close($koneksi);
?>