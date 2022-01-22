<?php
        include 'connect.php';
        // menyimpan data id kedalam variabel
        $id_transaksi   = $_GET['id_transaksi'];
        // query SQL untuk insert data
        $query="DELETE from tabel_transaksi where id_transaksi='$id_transaksi'";
        mysqli_query($conn, $query);
        // mengalihkan ke halaman index.php
        echo '<script language="javascript" type="text/javascript">
        alert("Data berhasil di hapus!");</script>';
        echo "<meta http-equiv='refresh' content='2; url=tabeldata.php'>";
?>