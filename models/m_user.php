<?php
//memanggil file koneksi yang ada pada folder controllers
include_once '../controllers/koneksi.php';

class user
{
     //membuat fungsi untuk menampilkan data dari tabel user yang ada pada data base
     function tampil_data()
     {
    //kita buat / instansiasi objek dari class atau file koneksi
    $conn = new koneksi();

    //perintah untuk menampilkan semua data dari tabel user
    $sql = "SELECT * FROM user";

    //select => tampilkan 
    // * => semua data
    // from => dari
    //user => merupakan tambel yang data nya akan ditampilkan
  
    //eksekutor untuk perintah di atas = $sql
    $query = mysqli_query($conn->koneksi, $sql);

    //untuk mengecek apakah ada datanya atau tidal
    if ($query->num_rows > 0) {
    while ($data = mysqli_fetch_object($query)){
        $hasil[] = $data;
    }
    return $hasil;
    } else {
        echo 'data pada tabel user kosong';
    }
     }

 function tampil_data2()
{
     $conn = new koneksi();

     $sql = "SELECT * FROM user ORDER BY nama_user ASC";

     $query = mysqli_query($conn->koneksi, $sql);

     if ($query->num_rows > 0) {
        while ($data = mysqli_fetch_object($query)){
            $result[] = $data;
        }
        return $result;
     } else {
        echo "tidak ada data";
     }
    }
    function tampil_data3()
{
     $conn = new koneksi();

     $sql = "SELECT * FROM user WHERE MONTH(tanggallahir_user) = 2 ORDER BY nama_user ASC";

     $query = mysqli_query($conn->koneksi, $sql);

     if ($query->num_rows > 0) {
        while ($data = mysqli_fetch_object($query)){
            $result[] = $data;
        }
        return $result;
     } else {
        echo "tidak ada data";
     }
    }
}
