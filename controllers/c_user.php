<?php

include_once '../models/m_user.php';

$user = new user();

try {
    // Mengecek apakah parameter 'aksi' ada di dalam $_GET
    if (!empty($_GET['aksi'])) {

        // Jika aksi bukan 'hapus', maka proses tambah atau update data
        if ($_GET['aksi'] != 'hapus') {
            // Pastikan semua variabel POST ada sebelum digunakan
            if (
                isset($_POST['id_user'], $_POST['username'], $_POST['email'], $_POST['password'], 
                      $_POST['nama_user'], $_POST['alamat_user'], $_POST['jenis_kelamin'], 
                      $_POST['tempatlahir_user'], $_POST['tanggallahir_user'])
            ) {
                $id = $_POST['id_user'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $nama = $_POST['nama_user'];
                $alamat = $_POST['alamat_user'];
                $jk = $_POST['jenis_kelamin'];
                $tempatlahir = $_POST['tempatlahir_user'];
                $tanggallahir = $_POST['tanggallahir_user'];

                // Cek apakah aksi adalah tambah atau update
                if ($_GET['aksi'] == 'tambah') {
                    $user->tambah_user($id, $username, $email, $password, $nama, $alamat, $jk, $tempatlahir, $tanggallahir);
                } elseif ($_GET['aksi'] == 'update') {
                    $user->ubah_user($id, $username, $email, $password, $nama, $alamat, $jk, $tempatlahir, $tanggallahir);
                }
            } else {
                throw new Exception("Semua data input harus diisi!");
            }
        } else {
            // Untuk aksi hapus
            if (!empty($_GET['id'])) { // Menggunakan GET untuk mengambil ID user
                $id = $_GET['id'];
                $user->hapus_user($id);
            } else {
                throw new Exception("ID User tidak ditemukan untuk dihapus.");
            }
        }
    } else {
        // Jika tidak ada aksi, tampilkan semua data
        $data_users = $user->tampil_data();
    }
} catch (Exception $e) {
    // Menampilkan pesan error ke browser
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>
