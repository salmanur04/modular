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
    <center><h3>Latihan Menampilkan Data dari tabel user dan tampilkan data user yang Lahir di Bulan Februari</h3></center>
    <center>
    <p><a href="latihan7.php">Ke Latihan 7</a></p>
        <table border="1"ellspacing="0" cellpadding="5">
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

            // Dapatkan data pengguna
            $data_users = $user->tampil_data();

            // Urutkan data berdasarkan nama
            usort($data_users, function ($a, $b) {
                return strcmp(strtolower($a->nama_user), strtolower($b->nama_user));
            });

            // Tampilkan data pengguna yang lahir di bulan Februari
            foreach ($data_users as $data) {
                // Ambil bulan dari tanggal lahir
                $bulan_lahir = date('m', strtotime($data->tanggallahir_user));

                if ($bulan_lahir == '02') { // Februari = bulan 02
                    $tanggal_sekarang = new DateTime();
                    $tanggal_lahir = new DateTime($data->tanggallahir_user);
                    $umur = $tanggal_sekarang->diff($tanggal_lahir);
            ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= htmlspecialchars($data->nama_user) ?></td>
                    <td><?= htmlspecialchars($umur->y) ?></td>
                    <td><?= htmlspecialchars($data->tempatlahir_user) . ", " . date("d F Y", strtotime($data->tanggallahir_user)) ?></td>
                    <td><?= htmlspecialchars($data->alamat_user) ?></td>
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

<?php
require_once 'template/footer.php';
?>