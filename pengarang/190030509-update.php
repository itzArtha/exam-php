<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Import script dari sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
</html>
<?php
require "koneksi.php";
// Get data id dari method GET
$id = $_GET['id'];
// Get data nama dari method POST
$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'] ?? '';
// Status akan di set true jika status ada dan false jika tidak
$status = isset($_POST['status']) ? true : 0;
// Query untuk simpan data
if(! empty($foto)) {
    // Fungsi ini digunakan untuk memindahkan data ke folder
    move_uploaded_file($_FILES['foto']['tmp_name'], 'img-pengarang/' .$foto);
    $foto = ", foto='$foto'";
}
// Query untuk update t_penerbit
$query = "UPDATE t_pengarang SET nama='$nama', hp='$phone', alamat='$alamat', email='$email', status='$status'" . $foto . "WHERE id_pengarang='$id'";
// Eksekusi data Mysql diatas
$success = mysqli_query($koneksi, $query);
// Kalo sukses maka back to halaman landing
if($success) {
    // Alert jika gagal eksekusi
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
// Tutup koneksi
mysqli_close($koneksi);
?>