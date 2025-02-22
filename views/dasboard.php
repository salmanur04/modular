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
    <center><h3>daftar user</h3></center>
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
            foreach ($user->tampil_data() as $data) {
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
                    <td>
                    <center>
                        <a href="edit.php?id=<?=
                        $data->id_user ?>"><button
                        type="button" class="btn btn-round
                        btn-primary">edit</button></a>
                        
                        <a onclick = "return confirm ('apakah yakin data akan dihapus?')"
                        href="../controllers/c_user.php?id=<?=
                        $data->id_user ?>&aksi=hapus"><button type="button" nama="hapus" class="btn btn-round
                        btn-danger">hapus</button></a>
            </center>
            </td>
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