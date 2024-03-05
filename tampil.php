<?php
include"boot.php";
include"koneksi.php";

$searchTerm = isset($_GET['q']) ? $_GET['q']: '';

$tampil = "SELECT * FROM tamudesa WHERE nama LIKE '%$searchTerm%'";

$result = $konek->query($tampil);
?>

<table class="table col-6">
  <thead class="table-dark">
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Keperluan</th>
      <th scope="col">Nomor hp</th>
      <th scope="col">Waktu</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
 <?php
 $no = 0;
 while ($s = $result->fetch_assoc()) {
  $no++;
  ?>
       

        <!-- // $tampil = $konek->query("select*from tamudesa");
        // while ($s = $tampil->fetch_array()){
        //     @$no++; -->
       
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $s['nama'] ?></td>
                <td><?= $s['jk'] ?></td>
                <td><?= $s['alamat'] ?></td>
                <td><?= $s['keperluan'] ?></td>
                <td><?= $s['nohp'] ?></td>
                <td><?= $s['waktu'] ?></td>
                <td>
                  
                  <button class="btn btn-danger" onclick="document.location.href='hapus.php?id=<?= $s['no'] ?>'
                "><i class="bi bi-trash3-fill"></i></button>

                
                  <button class="btn btn-primary" onclick="document.location.href='update.php?id=<?= $s['no'] ?>'
                "><i class="bi bi-pencil-square" ></i></button>
                </td>
                </tr>
            <?php
        }
        ?>
  </tbody>
</table>
</div>
