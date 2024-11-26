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
    <title>Data Tabel User</title>
</head>

<body>
    <center><h3>Latihan Menampilkan Data dari tabel user dan tampilkan data User Huruf Terbesar ke Terkecil</h3></center>
    <center>
        <table border="1" cellspacing="0" cellpadding="5">
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
                return strcmp(strtolower($b->nama_user), strtolower($a->nama_user));
            });

            foreach ($data_users as $data) {
                $tanggal_sekarang = new DateTime();
                $tanggal_lahir = new DateTime($data->tanggallahir_user);
                $umur = $tanggal_sekarang->diff($tanggal_lahir)->y; 
            ?>
                <tr>
                    <th scope="row"><?= htmlspecialchars($no++) ?></th>
                    <td><?= htmlspecialchars($data->nama_user) ?></td>
                    <td><?= htmlspecialchars($umur) ?> tahun</td>
                    <td><?= htmlspecialchars($data->tempatlahir_user) . ", " . date("d F Y", strtotime($data->tanggallahir_user)) ?></td>
                    <td><?= htmlspecialchars($data->alamat_user) ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </center>
</body>
</html>

<?php
require_once 'template/footer.php';
?>