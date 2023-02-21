<?php
$nisn = $_GET['nisn'];

include '../conn.php';
$sql = "DELETE FROM siswa WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location:?url=siswa');
}else{
    echo "<script>alert('Maaf data tidak terupdate'); window.location.assign('?url=siswa')</script>";
}
?>