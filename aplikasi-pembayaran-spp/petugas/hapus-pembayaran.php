<?php
$id = $_GET['id_pembayaran'];

include '../conn.php';
$sql = "DELETE FROM pembayaran WHERE id_pembayaran='$id'";
$query = mysqli_query($koneksi, $sql);
if($query){
    echo "<script>window.history.go(-1);</script>";
}else{
    echo "<script>alert('Maaf data tidak terhapus'); window.history.go(-1);</script>";
}
?>