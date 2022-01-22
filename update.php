<html>
<head>
    <title>Update</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include "connect.php";
    $id = $_GET['id_transaksi'];

    $sql=mysqli_query($conn, "select * from tabel_transaksi where id_transaksi='$id'");
    $data=mysqli_fetch_array($sql);

    ?>

    <h3>Update Data</h3>

    <form method="post" action="hasilupdate.php">
        <input type="hidden" value="<?php echo $data['id_transaksi'];?>" name="id_transaksi">
        <table>
            <tr>
                <td>Berat Barang</td>
                <td><input type="text" name="berat_barang" value="<?php echo $data['berat_barang']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Transaksi</td>
                <td><input type="text" name="tanggal_transaksi" value="<?php echo $data['tanggal_transaksi']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Transaksi Selesai</td>
                <td><input type="text" name="tanggal_transaksi_selesai" value="<?php echo $data['tanggal_transaksi']; ?>"></td>
            </tr>
            <tr>
                <td>Transaksi Status</td>
                <td><input type="text" name="transaksi_status" value="<?php echo $data['transaksi_status']; ?>"></td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td><input type="text" name="nama_pelanggan" value="<?php echo $data['nama_pelanggan']; ?>"></td>
            </tr>
            <tr>
                <td>No HP Pelanggan</td>
                <td><input type="text" name="pelanggan_hp" value="<?php echo $data['pelanggan_hp']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat Pelanggan</td>
                <td><input type="text" name="alamat_pelanggan" value="<?php echo $data['alamat_pelanggan']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Layanan</td>
                <td><input type="text" name="jenis_layanan" value="<?php echo $data['jenis_layanan']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Pakaian</td>
                <td><input type="text" name="pakaian_jenis" value="<?php echo $data['pakaian_jenis']; ?>"></td>
            </tr>
            <tr>
                <td>Jumlah Pakaian</td>
                <td><input type="text" name="pakaian_jumlah" value="<?php echo $data['pakaian_jumlah']; ?>"></td>
            </tr>
            <tr>
                <td><button type="button" class="btn btn-primary" value="simpan" style="margin-top:10px">SIMPAN PERUBAHAN</button>
                <td><a class="btn btn-secondary" href="tabeldata.php" role="button" style="margin-top:10px">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>