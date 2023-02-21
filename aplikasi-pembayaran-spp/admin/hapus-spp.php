<?php
$id_spp = $_GET['id_spp'];

include '../conn.php';
$sql = "DELETE FROM spp WHERE id_spp='$id_spp'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location:?url=spp');
}else{
    echo "<script>alert('Maaf data tidak terupdate'); window.location.assign('?url=spp')</script>";
}
?>