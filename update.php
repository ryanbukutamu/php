<?php

include "koneksi.php";
include "boot.php";

$id = $_GET['id'];
$panggil=$konek->query("select * from tamudesa where no='$id'");
$a=$panggil->fetch_array();
?>

<div class="container col-5">
<form class="form-control mt-3 text-light" style="background-color:#6CBF84" action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?= $a['nama']?>" >

    <label for="exampleInputEmail1" class="form-label">jk</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jk" value="<?= $a['jk']?>" >

    <label for="exampleInputEmail1" class="form-label">alamat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" value="<?= $a['alamat']?>" >

    <label for="exampleInputEmail1" class="form-label">keperluan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="keperluan" value="<?= $a['keperluan']?>" >

    <label for="exampleInputEmail1" class="form-label">nohp</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nohp" value="<?= $a['nohp']?>" >
  </div>
  <div class="d-flex justify-content-between">
  <div class="">
  <button type="submit" class="btn btn-warning mt-2 mb-3" >simpan</button>
  </div>
  
  <div class="">
  <button type="submit" class="btn btn-warning mt-2 mb-3"><a href='tampil.php'>kembali</a></button>
  </div>
  </div>
</form>
</div>

<?php
if (isset($_POST['edit'])) {
} else {
  @$ubah = $konek->query("update tamudesa set nama='$_POST[nama]',jk='$_POST[jk]',alamat='$_POST[alamat]',keperluan='$_POST[keperluan]',nohp='$_POST[nohp]' where no='$id'");
  
}
?>
