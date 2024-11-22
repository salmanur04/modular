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
    <center><h3>Latihan Menampilkan Data dari tabel user dan tampilkan data user yang Lahirnya di Bandung</h3></center>
    <center>
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

            $data_users = $user->tampil_data();

            usort($data_users, function ($a, $b) {
                return strcmp(strtolower($a->nama_user), strtolower($b->nama_user));
            });

            // Tampilkan user yang lahir di Bandung
            foreach ($data_users as $data) {
                if (strtolower($data->tempatlahir_user) === 'bandung') {
                    $tanggal_sekarang = new DateTime();
                    $tanggal_lahir = new DateTime($data->tanggallahir_user);
                    $umur = $tanggal_sekarang->diff($tanggal_lahir);
            ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?=  ($data->nama_user) ?></td>
                    <td><?=  ($umur->y) ?></td>
                    <td><?=  ($data->tempatlahir_user) . ", " . date("d F Y", strtotime($data->tanggallahir_user)) ?></td>
                    <td><?=  ($data->alamat_user) ?></td>
                </tr>
            <?php 
                } 
            } 
            ?>
            </tbody>
        </table>
    </center>
</body>
</html>
