<?php
$id = $_GET['id_petugas'];
include'../conn.php';
$sql = "SELECT*FROM petugas WHERE id_petugas='$id'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit Petugas</h5>
<a href="?url=petugas" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-edit-petugas&id_petugas=<?= $data['id_petugas']?>" method="post">
    <div class="form-group mb-2">
        <label for="">Username</label>
        <input value="<?= $data['username']?>" type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Password</label>
        <input value="<?= $data['password']?>" type="password" name="password" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Nama Petugas</label>
        <input value="<?= $data['nama_petugas']?>" type="text" name="nama_petugas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Level</label>
        <select name="level" class="form-control" required>
            <option value="">- Pilih Level -</option>
            <option value="admin"> Admin </option>
            <option value="petugas"> Petugas </option>
        </select>
    </div>
    <div class="form-group mb-2">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </div>
</form>