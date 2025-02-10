<?php
include_once '../controllers/c_user.php';
require_once 'template/header.php';
require_once 'template/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center><h3>Latihan Menampilkan data dari tabel user dan urutkan data berdasarkan nama user dari yang terkecil sampai ke terbesar</h3></center>
    <center>
    <p><a href="latihan3.php">Ke Latihan 3</a></p>
        
        <table border="1" ellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Alamat</th>
                </tr>
            </thead>  
            <tbody>
            <?php
            $no = 1;
            foreach ($user->tampil_data2() as $data) {
                $tanggal_sekarang = new DateTime();
                $tanggal_lahir = new DateTime($data->tanggallahir_user);
                $umur = $tanggal_sekarang->diff($tanggal_lahir);
            ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $data->nama_user ?></td>
                    <td><?= $umur->y ?></td>
                    <td><?= $data->tempatlahir_user . ", " . date("d F Y", strtotime($data->tanggallahir_user)) ?></td>
                    <td><?= $data->alamat_user ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </center>
</body>
</html>

<?php

?>require_once 'template/footer.php';