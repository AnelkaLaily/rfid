<?php
    include "koneksi.php";

    $sql = mysqli_query($conn, "Select * from tmprfid");
    $data = mysqli_fetch_array($sql);

    $no_kartu = $data['no_kartu'];
?>

<div class="form-group row mt-3">
    <label class="col-sm-2 col-form-label">No Kartu</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="no_kartu" id="no_kartu" style="width: 400px;">
    </div>
</div>