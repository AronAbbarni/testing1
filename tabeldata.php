<html>
    <head>
        <title>Program Estimasi</title>
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="assets/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
	    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/Style.css"/>
        
        <!-- <script type="text/javascript" src="assets/js/jquery.js"></script> -->
        <script type="text/javascript" src="assets/js/datatables.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        
    <h2 style="margin-left:10px;margin-top:30px">Tabel Data Transaksi Keseluruhan</h2>

    <div class="container mt-5 position">
        <div class="row">
        <table id="example" class="table table-striped table-bordered data">
            <thead>
                <tr>
                    <th width="50">No</th>
                    <th width="50">Berat Barang</th>
                    <th width="110">Tanggal Transaksi</th>
                    <th width="110">Tanggal Transaksi Selesai</th>
                    <th width="110">Transaksi Status</th>
                    <th width="110">Nama Pelanggan</th>
                    <th width="110">No HP Pelanggan</th>
                    <th width="110">Alamat Pelanggan</th>
                    <th width="110">Jenis Layanan</th>
                    <th width="110">Jenis Pakaian</th>
                    <th width="110">Jumlah Pakaian</th>
                    <th width="50">Opsi</th>
                </tr>
            </thead>

        <?php
            include 'connect.php';
            $ambildata = mysqli_query($conn, "SELECT * from tabel_transaksi");
        ?>
        
        <?php $no=1; ?>
        <?php while ($row = mysqli_fetch_assoc($ambildata)): ?>
                            <?php
                                $transaksi_status =  $row['transaksi_status'];
                            ?>
                            <tr>
                            
                                <td><?=$no++;?>
                                </td>
                                <td><?= $row["berat_barang"]; ?></td>
                                <td><?= $row["tanggal_transaksi"]; ?></td>
                                <td><?= $row["tanggal_transaksi_selesai"]; ?></td>
                                <td class="text-center">
                                    <?php 
                                        if ( $transaksi_status == "Dalam Proses (Belum Selesai)"){
                                            echo"<span class='badge badge-warning'> Belum Selesai </span>";
                                        }elseif($transaksi_status == "Selesai"){
                                            echo"<span class='badge badge-success'> Selesai </span>";
                                        }      
                                    ?>
                                </td>
                                <td><?= $row["nama_pelanggan"]; ?></td>
                                <td><?= $row["pelanggan_hp"]; ?></td>
                                <td><?= $row["alamat_pelanggan"]; ?></td>
                                <td><?= $row["jenis_layanan"]; ?></td>
                                <td><?= $row["pakaian_jenis"]; ?></td>
                                <td><?= $row["pakaian_jumlah"]; ?></td>
            
                        
                                <td><button style="margin-bottom:5px;" type="button" class="btn btn-danger" data-toggle="modal" data-href="delete.php?id_transaksi=<?php echo $row['id_transaksi']; ?>" data-target="#hapus">Hapus</button>
                                <button type="button" class="btn btn-primary" style="width: 72px;" data-toggle="modal" data-target="#edit<?php echo $row['id_transaksi']; ?>">Edit</button></td>
                                <div class="modal fade" id="edit<?php echo $row['id_transaksi']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="hasilupdate.php" method="POST">
                                                <input type="hidden" name="id_transaksi" value="<?php echo $row['id_transaksi']; ?>">
                                                    <label>Transaksi Status</label>
                                                    <label>
                                                        <select name="transaksi_status" style="margin-top:10px">
                                                            <option value="<?php echo $row['transaksi_status'];?>"><?php echo $row['transaksi_status'];?></option>
                                                            <option>-----</option>
                                                            <option value="Dalam Proses (Belum Selesai)">Dalam Proses (Belum Selesai)</option>
                                                            <option value="Selesai">Selesai</option>
                                                        </select>
                                                    </label>
                                        </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary btn-md" value="Save" name="btn_save">Save</button></td>
                                            </div>
                                            </form>
                            
                                    </div>
                                </div>
                </tr>
                        <?php endwhile; ?>
        </table>
        </div>
    </div>

        <!-- Modal Hapus-->
        <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Hapus Data Ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-danger btn-md btn-ok" type="button">Delete</a></td>
            </div>
            </div>
        </div>
        </div>

        <script>
        $('#hapus').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
        </script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();

            } );
        </script>

    </body>
</html>