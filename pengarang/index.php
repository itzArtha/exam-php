<?php 
    require "koneksi.php";
    $query = "SELECT * FROM t_pengarang";
    $sql = mysqli_query($koneksi, $query);
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
            <p class="lead text-light">MENAMPILKAN DAFTAR PENGARANG DALAM FORMAT TABEL</p>
         </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
   </section>

      <div class="container">
         <div class="text-right">
            <a href="../pengarang/190030509-add.php" class="btn btn-success" type="button"><i class="fa fa-user-plus"></i></a>
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
                     <img width="40" src="../pengarang/img-pengarang/<?= $data['foto'] ?>" alt="">
                     <?= $data['nama'] ?>
                  </td>
                  <td><?= $data['email'] ?></td>
                  <td><?= $data['hp'] ?></td>
                  <td><?= $data['alamat'] ?></td>
                  <td>
                     <img src="../pengarang/<?= $status ?>" alt="">
                  </td>
                  <td width="120">
                     <a href="../pengarang/190030509-view.php?id=<?= $data['id_pengarang'] ?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                     <a onclick="deleteData(<?= $data['id_pengarang'] ?>)" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
               <?php $i++; } ?>
            </tbody>
         </table>
      </div>
      <script>
         deleteData = (id) => {
            swal({
               title: "Apakah kamu yakin ?",
               text: "Data tidak akan bisa dikembalikan lagi",
               icon: "warning",
               buttons: true,
               dangerMode: true,
            }).then((willDelete) => {
               if (willDelete) {
                  window.location = "../pengarang/190030509-del.php?id=" + id;
               }
            });
         };
      </script>
      <footer class="footer my-5">
         <div class="container">
            <span class="text-muted">ITB STIKOM BALI <?= date('Y') ?></span>
         </div>
      </footer>
   </body>
</html>
