<html>
<head>
    <title>Form</title>

        <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
	    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/Style.css">
        
        <script type="text/javascript" src="assets/js/jquery.js"></script>
	    <script type="text/javascript" src="assets/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="assets/js/datatables.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <style>
        body{
                background-image:url(assets/images/laundry.jpg);
            }
        </style>
</head>

<body>

    <h3>Masukkan Data</h3>

    <form action="" method="POST">
        <table>
            <tr>
                <td>ID Transaksi</td>
                <td><input type="text" name="id_transaksi" value="<?php $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
                                                                        // Output: 54esmdr0qf
                                                                        echo substr(str_shuffle($permitted_chars), 0, 10);?>" readonly></td>
            </tr>
            <tr>
                <td>Berat Barang</td>
                <td><input type="text" name="berat_barang" style="margin-top:10px">Kg</td>
            </tr>
            <tr>
                <td>Tanggal Transaksi</td>
                <td><input type="date" name="tanggal_transaksi" style="margin-top:10px"></td>
            </tr>
            <tr>
                <td>Tanggal Transaksi Selesai</td>
                <td><input type="date" name="tanggal_transaksi_selesai" style="margin-top:10px"></td>
            </tr>
            <tr>
                <td>Transaksi Status</td>
                <td><select name="transaksi_status" style="margin-top:10px">
                    <option selected disabled>-----</option>
                    <option value="Dalam Proses (Belum Selesai)">Dalam Proses (Belum Selesai)</option>
                    <option value="Selesai">Selesai</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td><input type="text" name="nama_pelanggan" style="margin-top:10px"></td>
            </tr>
            <tr>
                <td>No HP Pelanggan</td>
                <td><input type="number" name="pelanggan_hp" style="margin-top:10px"></td>
            </tr>
            <tr>
                <td>Alamat Pelanggan</td>
                <td><textarea name="alamat_pelanggan" placeholder="Masukkan Alamat..." style="margin-top:10px"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Layanan</td>
                <td><input type="text" name="jenis_layanan" style="margin-top:10px"></td>
            </tr>
            <tr>
                <td>Jenis Pakaian</td>
                <td><input type="text" name="pakaian_jenis" style="margin-top:10px"></td>
            </tr>
            <tr>
                <td>Jumlah Pakaian</td>
                <td><input type="number" name="pakaian_jumlah" style="margin-top:10px"></td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary" value="Simpan" name="simpan" style="margin-top:10px">Simpan</td>
            </tr>
        </table>
    </form>
    
    <?php
     include "connect.php";
    ?> 
    <?php

     if (isset($_POST['simpan'])){
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

     if(!empty($id_transaksi) && !empty($berat_barang) && !empty($tanggal_transaksi) && !empty($tanggal_transaksi_selesai) && !empty($transaksi_status) && !empty($nama_pelanggan) && !empty($pelanggan_hp) && !empty($alamat_pelanggan) && !empty($jenis_layanan) && !empty($pakaian_jenis) && !empty($pakaian_jumlah)){
         $sql = "INSERT INTO tabel_transaksi (id_transaksi, berat_barang, tanggal_transaksi, tanggal_transaksi_selesai, transaksi_status, nama_pelanggan, pelanggan_hp, alamat_pelanggan, jenis_layanan, pakaian_jenis, pakaian_jumlah) VALUES('".$id_transaksi."','".$berat_barang."','".$tanggal_transaksi."','".$tanggal_transaksi_selesai."','".$transaksi_status."','".$nama_pelanggan."','".$pelanggan_hp."','".$alamat_pelanggan."','".$jenis_layanan."','".$pakaian_jenis."','".$pakaian_jumlah."')";
         $simpan = mysqli_query($conn, $sql);
         echo"<script>alert('Data Berhasil di Simpan')</script>";
         echo "<meta http-equiv=refresh content=1;URL='tabeldata.php'>";

         }  else {
         echo"<script>alert('Data Gagal di Simpan!')</script>";
         echo "<meta http-equiv=refresh content=1;URL='form.php'>";
         }
     }
    ?>
</body>
</html>