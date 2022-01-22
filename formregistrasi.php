<?php
    // untuk memanggil halaman koneksi.php 
    require 'connect.php';

    if (isset($_POST["daftar"])){
        
            if ( daftar($_POST) > 0 ){
                echo"<script>
                        alert('user baru berhasil di tambahkan!');
                     </script>";
            }else{
                echo mysqli_error($conn);
            }
    }

?>
<html>
<head>
    <title>Registrasi</title>

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
                background-image:url(assets/images/backgroundregistrasi.jpg);
                background-size:cover;
            }
        </style>
</head>

<body>

    <h3>Registrasi</h3>

    <form action="" method="POST" >
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" style="margin-top:10px" placeholder="Masukkan Username" id="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" style="margin-top:10px" placeholder="Masukkan Password" id="password"/></td>
            </tr>
            <tr>
                <td>Konfirmasi Password</td>
                <td><input type="password" name="konfirmasi_password" style="margin-top:10px" id="konfirmasi_password" placeholder="Masukkan Ulang Password"></td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary" value="Daftar" name="daftar" style="margin-top:10px">Daftar</td>
            </tr>
        </table>
    </form>
    
</body>
</html>