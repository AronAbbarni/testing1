<?php
    include 'connect.php';
        $id_transaksi  = $_POST['id_transaksi'];
        $berat_barang  = $_POST['berat_barang'];
        $tanggal_transaksi = $_POST['tanggal_transaksi'];
        $tanggal_transaksi_selesai = $_POST['tanggal_transaksi_selesai'];
        $transaksi_status = $_POST['transaksi_status'];
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $pelanggan_hp = $_POST['pelanggan_hp'];
        $alamat_pelanggan = $_POST['alamat_pelanggan'];
        $jenis_layanan = $_POST['jenis_layanan'];
        $pakaian_jenis = $_POST['pakaian_jenis'];
        $pakaian_jumlah = $_POST['pakaian_jumlah'];
    // query SQL untuk insert data
    $query="INSERT INTO tabel_transaksi SET id_transaksi='$id_transaksi',berat_barang='$berat_barang',tanggal_transaksi='$tanggal_transaksi',tanggal_transaksi_selesai='$tanggal_transaksi_selesai',transaksi_status='$transaksi_status',nama_pelanggan='$nama_pelanggan',pelanggan_hp='$pelanggan_hp',alamat_pelanggan='$alamat_pelanggan',jenis_layanan='$jenis_layanan',pakaian_jenis='$pakaian_jenis',pakaian_jumlah='$pakaian_jumlah' where id_transaksi='$id_transaksi'";
    mysqli_query($conn, $query);
    // mengalihkan ke halaman index.php
    header("location:tabeldata.php");
    ?>