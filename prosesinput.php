<?php
include "koneksi.php";

$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$keperluan = $_POST['keperluan'];
$nohp = $_POST['nohp'];
if ($nama==""){
  echo "maaf nama wajib di isi";
} else {
  
}
$simpan = $konek->query("insert into tamudesa(nama,jk,alamat,keperluan,nohp) values ('$nama','$jk','$alamat','$keperluan','$nohp')");
?>
<script>
    document.location.href='input.php';
</script>