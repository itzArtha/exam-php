<?php 
    require "koneksi.php";
    $query = "SELECT * FROM t_pengarang WHERE id_pengarang='" . $_GET['id'] . "'";
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
      <title>Project UAS</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
      <link rel="stylesheet" href="../pengarang/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <section class="pt-4 bg-success">
         <div>
            <div class="container">
               <h1 class="display-5 pt-5 text-light">Project UAS</h1>
               <p class="lead text-light">MENAMPILKAN DATA PENGARANG YANG AKAN DI-UPDATE</p>
            </div>
         </div>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </section>
      <div class="container my-5">
         <form onSubmit="return cek_form(this)" action="../pengarang/190030509-update.php?id=<?= $data['id_pengarang'] ?>" method="POST" enctype="multipart/form-data">
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
                     <label for="hpid">HP</label>
                     <input type="text" class="form-control" id="hpid" placeholder="Masukkan No HP" name="phone" value="<?= $data['hp'] ?>" >
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label for="alamatid">Alamat</label>
                     <input type="text" class="form-control" id="alamatid" placeholder="Masukkan Alamat" name="alamat" value="<?= $data['alamat'] ?>" >
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label for="fotoid">Foto</label>
                     <input type="file" class="form-control" id="fotoid" name="foto">
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
      <script>
         function cek_form(frm) {
            if (frm.nama.value == "") {
               alert("Silahkan lengkapi kolom Nama");
               frm.nama.focus();
               return false;
            } else if (frm.email.value == "") {
               alert("Silahkan lengkapi kolom Email");
               frm.email.focus();
               return false;
            } else if (frm.phone.value == "") {
               alert("Silahkan lengkapi kolom HP");
               frm.phone.focus();
               return false;
            } else if (frm.alamat.value == "") {
               alert("Silahkan lengkapi kolom alamat");
               frm.alamat.focus();
               return false;
            } else if (frm.foto.value == "" && frm.foto.id == "add") {
               alert("Silahkan lengkapi kolom foto");
               frm.foto.focus();
               return false;
            } else {
               return true;
            }
         }
      </script>
      <footer class="footer my-5">
         <div class="container">
            <span class="text-muted">ITB STIKOM BALI <?= date('Y') ?></span>
         </div>
      </footer>
   </body>
</html>
