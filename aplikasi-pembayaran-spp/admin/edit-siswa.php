<?php
$nisn = $_GET['nisn'];
include'../conn.php';
$sql = "SELECT*FROM siswa WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit Siswa</h5>
<a href="?url=siswa" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-edit-siswa&nisn=<?= $data['nisn']?>" method="post">
    <div class="form-group mb-2">
        <label for="">NISN</label>
        <input value="<?= $data['nisn']?>" type="number" name="nisn" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">NIS</label>
        <input value="<?= $data['nis']?>" type="number" name="nis" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Nama</label>
        <input value="<?= $data['nama']?>" type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Kelas</label>
        <select name="id_kelas" class="form-control" required>
            <option value="">- Pilih Kelas -</option>
            <?php
            include'../conn.php';
            $kelas = mysqli_query($koneksi, "SELECT*FROM kelas ORDER BY nama_kelas ASC");
            foreach($kelas as $data_kelas){
            ?>
            <option value="<?= $data_kelas['id_kelas']?>"><?= $data_kelas['nama_kelas'];?> </option>    
            <?php }
            ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label for="">Alamat</label>
        <input value="<?= $data['alamat']?>" type="text" name="alamat" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">No Telpon</label>
        <input value="<?= $data['no_telp']?>" type="text" name="no_telp" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">SPP</label>
        <select name="id_spp" class="form-control" required>
            <option value="">- Pilih SPP -</option>
            <?php
            include'../conn.php';
            $spp = mysqli_query($koneksi, "SELECT*FROM spp ORDER BY id_spp ASC");
            foreach($spp as $data_spp){
            ?>
            <option value="<?= $data_spp['id_spp']?>"><?= $data_spp['tahun'];?> | <?= number_format($data_spp['nominal'],2,',','.');?></option>    
            <?php }
            ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </div>
</form>