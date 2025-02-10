<?php
include_once '../controllers/c_user.php';
require_once 'template/header.php';
require_once 'template/navbar.php';
?>

<!-- awal dari isi body -->

<center><h3>Latihan Menampilkan data dari tabel user dan tampilkan data user yang memiliki umur dari 21 sampai 30 tahun</h3></center>
<center>
<p><a href="latihan4.php">Ke Latihan 4</a></p>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($user->tampil_data2() as $data) {
            $tanggal_sekarang = new DateTime();
            $tanggal_lahir = new DateTime($data->tanggallahir_user);
            $umur = $tanggal_sekarang->diff($tanggal_lahir)->y; // Menghitung umur berdasarkan tahun

            // Menampilkan data user yang memiliki umur 21 sampai 30 tahun
            if ($umur >= 21 && $umur <= 30) {
        ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($data->nama_user) ?></td>
                    <td><?= htmlspecialchars($umur) ?></td>
                    <td><?= htmlspecialchars($data->tempatlahir_user) . ", " . date("d F Y", strtotime($data->tanggallahir_user)) ?></td>
                    <td><?= htmlspecialchars($data->alamat_user) ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

<!-- akhir dari isi body -->

<?php
require_once 'template/footer.php';
?>
