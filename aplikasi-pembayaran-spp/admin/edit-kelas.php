<?php
$id_kelas = $_GET['id_kelas'];
include'../conn.php';
$sql = "SELECT*FROM kelas WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit Kelas</h5>
<a href="?url=kelas" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-edit-kelas&id_kelas=<?= $data['id_kelas']?>" method="post">
    <div class="form-group mb-2">
        <label for="">Nama Kelas</label>
        <input value="<?= $data['nama_kelas']?>" type="text" name="nama_kelas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Kompetensi Keahlian</label>
        <input value="<?= $data['kompetensi_keahlian']?>" type="text" name="kompetensi_keahlian" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </div>
</form>