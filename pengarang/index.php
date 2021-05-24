<?php 
    require "koneksi.php";
    $query = "SELECT * FROM t_pengarang";
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
<h3 class="text-center">MENAMPILKAN DAFTAR PENGARANG DALAM FORMAT TABEL</h3>
<table class="table table-bordered table-striped">
    <thead>
        <th>Nama</th>
        <th>Email</th>
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
                <td><?= $data['hp'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['status'] ?></td>
                <td>
                    <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
</body>
</html>
