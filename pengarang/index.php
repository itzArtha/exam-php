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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="container">
<h3 class="text-center">MENAMPILKAN DAFTAR PENGARANG DALAM FORMAT TABEL</h3>
<div class="text-right">
    <a href="190030509-add.php" class="btn btn-success" type="button"><i class="fa fa-user-plus"></i></a>
</div>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>HP</th>
        <th>Alamat</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php
            $i = 1;
            while($data = mysqli_fetch_array($sql)) { 
                $status = ($data['status'] == 1) ? "ok.png" : "ko.png";
            ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                <img width="40" src="img-pengarang/<?= $data['foto'] ?>" alt="">
                <?= $data['nama'] ?>
                </td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['hp'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td>
                    <img src="<?= $status ?>" alt="">
                </td>
                <td width="100">
                    <a href="190030509-view.php?id=<?= $data['id_pengarang'] ?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                    <a href="190030509-del.php?id=<?= $data['id_pengarang'] ?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php $i++; } ?>
    </tbody>
</table>
</div>
</body>
</html>
