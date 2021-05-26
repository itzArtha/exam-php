<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Import script dari sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
</html>
<?php
// Get file koneksi
require "koneksi.php";
// Get data id dari method POST
$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'] ?? '';
$status = true;

if(! empty($foto)) {
    move_uploaded_file($_FILES['foto']['tmp_name'], 'img-pengarang/' .$foto);
}

$query = "INSERT INTO t_pengarang (nama, hp, alamat, email, status, foto) VALUES('$nama', '$phone', '$alamat', '$email', '$status', '$foto')";
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