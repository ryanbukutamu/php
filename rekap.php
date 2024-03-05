<div class="text-end">
<button class="btn" onclick="printDiv('div1')"><i class="bi bi-printer-fill fs-1 "></i></button>
</div>


<div id="div1">

<!-- tampil -->

<?php
include"boot.php";
include"koneksi.php";

$searchTerm = isset($_GET['q']) ? $_GET['q']: '';

$tampil = "SELECT * FROM tamudesa WHERE nama LIKE '%$searchTerm%'";

$result = $konek->query($tampil);
?>

<table class="table col-5">
  <thead class="table-dark">
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">Keperluan</th>
      <th scope="col">Nomor Hp</th>
      <th scope="col">Waktu</th>
      <th scope="col"></th>
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
                  
                </td>
                </tr>
            <?php
        }
        ?>
  </tbody>
</table>
</div>

<!-- tutuptampil -->

</div>

<script>
    function printDiv(el) {
        var a = document.body.innerHTML;
        var b = document.getElementById(el).innerHTML;
        document.body.innerHTML = b;
        window.print();
        document.body.innerHTML = a;
    }
</script>


