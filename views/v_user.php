<?php
include_once '../controllers/c_user.php';

require_once 'template/header.php';
require_once 'template/navbar.php';
?>

<?php
foreach ($user->tampil_data()as $data) {
?>
<p><?= $data['nama_user'] ?> 
    <?=$data['jenis_kelamin'] ?>
    <?=$data['alamat_user'] ?></p>
<?php } ?>


<?php require_once 'template/footer.php'; ?> 
