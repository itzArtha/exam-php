<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
</html>
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
$success = mysqli_query($koneksi,$query);
if($success) {
    echo '
        <script>
            swal({
            title: "Berhasil Tambah Data",
            icon: "success",
            buttons: true,
            dangerMode: false,
            })
            .then((DataSuccess) => {
                if (DataSuccess) {
                    window.location = ".";
                }
            });
        </script>
    ';
} else {
    echo '
        <script>
            swal({
            title: "Gagal Tambah Data",
            icon: "error",
            buttons: true,
            dangerMode: true,
            })
            .then((DataFailed) => {
                if (DataFailed) {
                    window.location = "./190030509-add.php";
                }
            });
        </script>
    ';  
}
mysqli_close($koneksi);
?>