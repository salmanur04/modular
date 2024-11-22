<?php
// implementasi dari konsep modular

// kita boleh menggunakan include atau require
// include
// include_once

// require
// require_once

require_once 'template/header.php';
require_once 'template/navbar.php';
?>

<!-- awal dari isi body -->
<h1>ini halaman B</h1>
<!-- akhir dari isi body -->

<?php require_once 'template/footer.php'; ?>
