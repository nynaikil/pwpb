<?php
$id_spp = $_GET['id_spp'];
include'../conn.php';
$sql = "SELECT*FROM spp WHERE id_spp='$id_spp'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit SPP</h5>
<a href="?url=spp" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-edit-spp&id_spp=<?= $data['id_spp']?>" method="post">
    <div class="form-group mb-2">
        <label for="">Tahun</label>
        <input value="<?= $data['tahun']?>" type="number" name="tahun" maxlength="4" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Nominal</label>
        <input value="<?= $data['nominal']?>" type="number" name="nominal" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </div>
</form>