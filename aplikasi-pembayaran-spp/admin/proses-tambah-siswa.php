<?php
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$spp = $_POST['id_spp'];

include '../conn.php';
$sql = "INSERT INTO siswa(nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) VALUES ('$nisn', '$nis', '$nama', '$kelas', '$alamat', '$no_telp', '$spp')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location:?url=siswa');
}else{
    echo "<script>alert('Maaf data tidak tersimpan'); window.location.assign('?url=siswa')</script>";
}
?>