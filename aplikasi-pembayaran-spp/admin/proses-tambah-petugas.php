<?php
$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['nama_petugas'];
$level = $_POST['level'];

include '../conn.php';
$sql = "INSERT INTO petugas(username, password, nama_petugas, level) VALUES ('$user', '$pass', '$nama', '$level')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location:?url=petugas');
}else{
    echo "<script>alert('Maaf data tidak tersimpan'); window.location.assign('?url=petugas')</script>";
}
?>