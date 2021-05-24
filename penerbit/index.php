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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<h3 class="text-center">MENAMPILKAN DAFTAR PENERBIT DALAM FORMAT TABEL</h3>
<div class="text-right">
    <a href="190030509-add.php" class="btn btn-success" type="button"><i class="fa fa-user-plus"></i></a>
</div>
<br>
    <?php include "component-view.php"; ?>
</div>
</body>
</html>
