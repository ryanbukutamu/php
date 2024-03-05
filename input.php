<?php
include"boot.php";
?>

<div class="container col-6">
<form class="form-control mt-3 bg- text-dark" action="prosesinput.php" method="post" style="background-color:#6CBF84">
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nama</label>
  <input type="text" class="form-control" id="formGroupExampleInput" aria-describedby="emailHelp" name="nama" required>
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Jenis Kelamin</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" aria-describedby="emailHelp" name="jk"required>
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Alamat</label>
  <input type="text" class="form-control" id="formGroupExampleInput2"aria-describedby="emailHelp" name="alamat"required>

</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Keperluan</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" aria-describedby="emailHelp" name="keperluan"required>
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">No Hp</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" aria-describedby="emailHelp" name="nohp"required>
</div>

<div class="text-end">
  <button type="submit" class="btn btn-warning mt-2 mb-2S">Simpan</button>
  </div>
  </form>
</div>

