<?php
include "boot.php";
$date =date('Y-m-d');
echo $date;
?>
<div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="" width="200">
            <div class="card-body">
                <p class="card-text">RPL
                    <?php
                    include "koneksi.php";
                    $lihat = $konek->query("select nama,waktu from tamudesa where nama like 'sutiana' and waktu like '%$date%");
                    $jumlah = $lihat->num_rows;
                    echo $jumlah;
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>