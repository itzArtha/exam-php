<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
</html>
<?php
require "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM t_penerbit WHERE id_penerbit='$id'";
$success = mysqli_query($koneksi, $query);
if($succes) {
    header("location:.");
} else {
    echo '
        <script>
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
mysqli_close($koneksi);
?>