<?php
require "koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM t_penerbit WHERE id_penerbit='$id'";
mysqli_query($koneksi, $query);

mysqli_close($koneksi);
?>