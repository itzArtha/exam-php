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
<div class="container my-5">
<h3 class="text-center">FORM UNTUK MENAMBAHKAN DATA PENERBIT BARU</h3>
<form action="190030509-update.php" method="POST">
<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
        <label for="namaid">Nama</label>
        <input type="text" class="form-control" id="namaid" placeholder="Masukkan Nama" name="nama" required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="emailid" placeholder="Masukkan Email" name="email" required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <label for="kotaid">Kota</label>
        <input type="text" class="form-control" id="kotaid" placeholder="Kota" name="kota" required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <label for="kontakid">Nama Kontak</label>
        <input type="text" class="form-control" id="kontakid" placeholder="Masukkan Nama Kontak" name="kontak" required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <label for="hpid">HP</label>
        <input type="text" class="form-control" id="hpid" placeholder="Masukkan No HP" name="phone" required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <label for="alamatid">Alamat</label>
        <input type="text" class="form-control" id="alamatid" placeholder="Masukkan Alamat" name="alamat" required>
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
