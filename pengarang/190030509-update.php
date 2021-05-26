<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
</html>
<?php
require "koneksi.php";

$id = $_GET['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'] ?? '';
$status = isset($_POST['status']) ? true : 0;

if(! empty($foto)) {
    move_uploaded_file($_FILES['foto']['tmp_name'], 'img-pengarang/' .$foto);
    $foto = ", foto='$foto'";
}

$query = "UPDATE t_pengarang SET nama='$nama', hp='$phone', alamat='$alamat', email='$email', status='$status'" . $foto . "WHERE id_pengarang='$id'";
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