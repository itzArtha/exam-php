<?php 
    require "koneksi.php";
    $query = "SELECT * FROM t_penerbit";
    $sql = mysqli_query($koneksi, $query);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<h3 class="text-center">MENAMPILKAN DAFTAR PENERBIT DALAM FORMAT TABEL</h3>
<div class="text-right">
    <a href="/penerbit/190030509-add.php" class="btn btn-success" type="button">Tambah Data</a>
</div>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>Nama</th>
        <th>Email</th>
        <th>Kota</th>
        <th>Nama Kontak</th>
        <th>HP</th>
        <th>Alamat</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php while($data = mysqli_fetch_array($sql)) {  ?>
            <tr>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['kota'] ?></td>
                <td><?= $data['contact_name'] ?></td>
                <td><?= $data['contact_phone'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['status'] ?></td>
                <td>
                    <a href="/penerbit/190030509-view.php?id=<?= $data['id_penerbit'] ?>" type="button" class="btn btn-success">Edit</a>
                    <a type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
</body>
</html>
