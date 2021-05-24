<table class="table table-bordered table-striped">
    <thead>
        <th>No</th>
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
        <?php
            $i = 1;
            while($data = mysqli_fetch_array($sql)) { 
                $status = ($data['status'] == 1) ? "ok.png" : "ko.png";
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['kota'] ?></td>
                <td><?= $data['contact_name'] ?></td>
                <td><?= $data['contact_phone'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td>
                    <img src="<?= $status ?>" alt="">
                </td>
                <td>
                    <a href="190030509-view.php?id=<?= $data['id_penerbit'] ?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                    <a href="190030509-del.php?id=<?= $data['id_penerbit'] ?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php $i++; } ?>
    </tbody>
</table>