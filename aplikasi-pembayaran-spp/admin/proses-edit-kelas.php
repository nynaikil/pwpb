<?php
$id_kelas = $_GET['id_kelas'];
$kelas = $_POST['nama_kelas'];
$kompetensi = $_POST['kompetensi_keahlian'];

include '../conn.php';
$sql = "UPDATE kelas SET nama_kelas='$kelas', kompetensi_keahlian='$kompetensi' WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location:?url=kelas');
}else{
    echo "<script>alert('Maaf data tidak terupdate'); window.location.assign('?url=kelas')</script>";
}
?>