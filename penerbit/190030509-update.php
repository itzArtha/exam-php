<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
</html>
<?php
require "koneksi.php";

$id = $_GET['id'];
// Get data nama dari method POST
$nama = $_POST['nama'];
$email = $_POST['email'];
$kota = $_POST['kota'];
$kontak = $_POST['kontak'];
$phone = $_POST['phone'];
$alamat = $_POST['alamat'];
// Status akan di set true jika status ada dan false jika tidak
$status = isset($_POST['status']) ? true : 0;
// Query untuk update t_penerbit
$query = "UPDATE t_penerbit SET nama='$nama', kota='$kota', contact_name='$kontak', contact_phone='$phone', alamat='$alamat', email='$email', status='$status' WHERE id_penerbit='$id'";
$success = mysqli_query($koneksi, $query);
if($success) {
    echo '
        <script>
            swal({
            title: "Berhasil Update Data",
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
            title: "Gagal Update Data",
            icon: "error",
            buttons: true,
            dangerMode: true,
            })
            .then((DataFailed) => {
                if (DataFailed) {
                    window.location = "./190030509-view.php?id=" + ' . $id . ';
                }
            });
        </script>
    ';  
}
mysqli_close($koneksi);
?>