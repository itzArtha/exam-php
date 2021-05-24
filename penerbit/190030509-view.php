<?php 
    require "koneksi.php";
    $query = "SELECT * FROM t_penerbit WHERE id_penerbit='" . $_GET['id'] . "'";
    $sql = mysqli_query($koneksi, $query);
    try {
      $data = mysqli_fetch_assoc($sql);
    } catch(Exception $e) {
      echo 'Error : ' . $e->getMessage();
    }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container my-5">
<h3 class="text-center">MENAMPILKAN DATA PENERBIT YANG AKAN DI-UPDATE</h3>
<form action="190030509-update.php?id=<?= $data['id_penerbit'] ?>" method="POST">
<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
        <label for="namaid">Nama</label>
        <input type="text" class="form-control" id="namaid" placeholder="Masukkan Nama" name="nama" value="<?= $data['nama'] ?>" >
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="emailid" placeholder="Masukkan Email" name="email" value="<?= $data['email'] ?>" >
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <label for="kotaid">Kota</label>
        <input type="text" class="form-control" id="kotaid" placeholder="Kota" name="kota" value="<?= $data['kota'] ?>" >
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <label for="kontakid">Nama Kontak</label>
        <input type="text" class="form-control" id="kontakid" placeholder="Masukkan Nama Kontak" name="kontak" value="<?= $data['contact_name'] ?>" >
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <label for="hpid">HP</label>
        <input type="text" class="form-control" id="hpid" placeholder="Masukkan No HP" name="phone" value="<?= $data['contact_phone'] ?>" >
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <label for="alamatid">Alamat</label>
        <input type="text" class="form-control" id="alamatid" placeholder="Masukkan Alamat" name="alamat" value="<?= $data['alamat'] ?>" >
    </div>
  </div>
  <div class="col-lg-12">
  <label>Aktif</label>
  <div>
    <label class="switch">
      <input type="checkbox" name="status" <?= ($data['status'] == 1) ? 'checked' : '' ?> >
      <span class="slider round"></span>
    </label>
  </div>
  </div>
</div>
<div class="text-right">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</body>
</html>
