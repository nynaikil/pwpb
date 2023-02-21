<h5>Halaman Data Kelas</h5>
<a href="?url=tambah-kelas" class="btn btn-primary">Tambah Kelas</a>
<hr>
<table class="table table-stripped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Nama Kelas</td>
        <td>Kompetensi Keahlian</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include '../conn.php';
    $no = '1';
    $sql = "SELECT*FROM kelas ORDER BY id_kelas ASC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['kompetensi_keahlian'] ?></td>
            <td>
                <a href="?url=edit-kelas&id_kelas=<?= $data['id_kelas']?>" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <a onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data ini?')" href="?url=hapus-kelas&id_kelas=<?= $data['id_kelas']?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php } ?>
</table>