<?php 
// koneksi database
include 'connect.php';
 
// menangkap data yang di kirim dari form
$id_transaksi = $_POST['id_transaksi'];
$transaksi_status = $_POST['transaksi_status'];
 
// update data ke database
mysqli_query($conn,"update tabel_transaksi set transaksi_status='$transaksi_status' where id_transaksi='$id_transaksi'");
 
// mengalihkan halaman kembali ke index.php
header("location:tabeldata.php");
 
?>
