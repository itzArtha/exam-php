<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Import script dari sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
</html>
<?php
// Import file koneksi
require "koneksi.php";
// Get ID dari method POST 
$nama = $_POST['nama'];
$email = $_POST['email'];
$kota = $_POST['kota'];
$kontak = $_POST['kontak'];
$phone = $_POST['phone'];
$alamat = $_POST['alamat'];
// Set status
$status = true;
// Query untuk Mysql Delete
$query = "INSERT INTO t_penerbit (nama, kota, contact_name, contact_phone, alamat, email, status) VALUES('$nama', '$kota', '$kontak', '$phone', '$alamat', '$email', '$status')";
// Eksekusi data Mysql diatas
$success = mysqli_query($koneksi,$query);
// Kalo sukses maka back to halaman landing
if($success) {
    // Alert jika gagal eksekusi
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
// Tutup koneksi
mysqli_close($koneksi);
?>