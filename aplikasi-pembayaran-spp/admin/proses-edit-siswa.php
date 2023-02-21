<?php
$nisn = $_GET['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$spp = $_POST['id_spp'];

include '../conn.php';
$sql = "UPDATE siswa SET nisn='$nisn', nis='$nis', nama='$nama', id_kelas='$kelas', alamat='$alamat', no_telp='$no_telp', id_spp='$spp' WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location:?url=siswa');
}else{
    echo "<script>alert('Maaf data tidak terupdate'); window.location.assign('?url=siswa')</script>";
}
?>