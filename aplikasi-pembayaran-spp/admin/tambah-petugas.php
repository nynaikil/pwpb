<h5>Halaman Tambah Data Petugas</h5>
<a href="?url=petugas" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-tambah-petugas" method="post">
    <div class="form-group mb-2">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control" required>
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