<?php
$id = $_GET['id_petugas'];

include '../conn.php';
$sql = "DELETE FROM petugas WHERE id_petugas='$id'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location:?url=petugas');
}else{
    echo "<script>alert('Maaf data tidak terupdate'); window.location.assign('?url=petugas')</script>";
}
?>