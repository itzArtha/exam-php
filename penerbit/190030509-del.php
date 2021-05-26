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
// Get ID dari url
$id = $_GET['id'];
// Query untuk Mysql Delete
$query = "DELETE FROM t_penerbit WHERE id_penerbit='$id'";
// Eksekusi data Mysql diatas
$success = mysqli_query($koneksi, $query);
// Kalo sukses maka back to halaman landing
if($success) {
    header("location:.");
} else {
    // Alert jika gagal eksekusi
    echo '
        <script>
            // Panggil sweetalert
            swal({
            title: "Gagal Hapus Data",
            icon: "error",
            buttons: true,
            dangerMode: true,
            })
            .then((DataFailed) => {
                if (DataFailed) {
                    window.location = ".";
                }
            });
        </script>
    '; 
}
// Tutup koneksi
mysqli_close($koneksi);
?>