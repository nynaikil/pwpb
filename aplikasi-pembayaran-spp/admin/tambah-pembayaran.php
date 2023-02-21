<?php
$nisn = $_GET['nisn'];
$kekurangan = $_GET['kekurangan'];
include'../conn.php';
$sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Pembayaran SPP</h5>
<a href="?url=pembayaran" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-tambah-pembayaran&nisn=<?= $data['nisn'];?>" method="post">
<input value="<?= $data['id_spp']?>" type="hidden" name="id_spp" class="form-control" required>
    <div class="form-group mb-2">
        <label for="">Nama Petugas</label>
        <input value="<?= $_SESSION['nama_petugas'] ?>" disabled class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">NISN</label>
        <input value="<?= $data['nisn']?>" readonly name="nisn" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Nama Siswa</label>
        <input value="<?= $data['nama']?>" disabled class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Tanggal Bayar</label>
        <input type="date" class="form-control" name="tgl_dibayar" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Bulan Dibayar</label>
        <select name="bulan_dibayar" class="form-control" required>
            <option value="">- Pilih Bulan Bayar -</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>
    </div>
    <div class="form-group mb-2">
        <label for="">Tahun Bayar</label>
        <select name="tahun_dibayar" class="form-control" required>
            <option value="">- Pilih Tahun Bayar -</option>
            <?php
            for($i=2010; $i<=date('Y'); $i++){
                echo"<option value='$i'> $i </option>"; 
            }
            ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label for="">Jumlah Bayar (Jumlah Yang Harus Dibayarkan Adalah <b><?= number_format($kekurangan,2,',',',') ?></b>)</label>
        <input type="number" name="jumlah_bayar" max="<?= $kekurangan; ?>" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </div>
</form>