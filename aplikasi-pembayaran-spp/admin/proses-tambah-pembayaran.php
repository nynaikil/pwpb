<?php
$id_petugas = $_SESSION['id_petugas'];
$nisn = $_POST['nisn'];
$tgl = $_POST['tgl_dibayar'];
$bln = $_POST['bulan_dibayar'];
$thn = $_POST['tahun_dibayar'];
$id_spp = $_POST['id_spp'];
$jumlah_bayar = $_POST['jumlah_bayar'];


include '../conn.php';
$sql = "INSERT INTO pembayaran(id_petugas,nisn,tgl_bayar,bulan_dibayar,tahun_dibayar,id_spp,jumlah_bayar) VALUES ('$id_petugas','$nisn','$tgl','$bln','$thn','$id_spp','$jumlah_bayar')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('Location:?url=pembayaran');
}else{
    echo "<script>alert('Maaf data tidak tersimpan'); window.location.assign('?url=pembayaran')</script>";
}
?>