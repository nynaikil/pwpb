<?php
$id_petugas = $_GET['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama_petugas'];
$level = $_POST['level'];

include '../conn.php';
$sql = "UPDATE petugas SET username='$username', password='$password', nama_petugas='$nama', level='$level' WHERE id_petugas='$id_petugas'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location:?url=petugas');
}else{
    echo "<script>alert('Maaf data tidak terupdate'); window.location.assign('?url=petugas')</script>";
}
?>