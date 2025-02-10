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
    

    function tambah_user($id, $username,$email,$password,$nama,$alamat,$jk,$tempatlahir, $tanggallahir){
      $conn = new koneksi();
      $sql = "INSERT INTO user VALUES ('$id', '$username','$email','$password','$nama','$alamat','$jk','$tempatlahir', '$tanggallahir')";
      $query = mysqli_query($conn->koneksi,$sql);
  
      if ($query) {
        echo "<script>alert('data berhasil ditambahkan'), window.location='../views/dasboard.php'</script>";
      } else {
        echo "<script>alert('data gagal ditambahkan'), window.location='../views/edit.php'</script>";
      }
      
    } 
    
    function tampil_data_byid($id){
      $conn = new koneksi();
      $sql = "SELECT *  FROM user WHERE id_user = $id";
    
      $query = mysqli_query($conn->koneksi,$sql);
    
      if ($query-> num_rows > 0) {
        while($data = mysqli_fetch_object($query)){
          $result[] = $data;
        }
        return $result;
      } else {
        echo "Tidak Ada Data";
      }
    }

    function ubah_user($id, $username, $email, $password, $nama, $alamat, $jk, $tempatlahir, $tanggallahir)
    {
        $conn = new koneksi();
        $sql = "UPDATE user SET username = '$username', email = '$email', password = '$password', nama_user = '$nama', alamat_user = '$alamat', jenis_kelamin = '$jk', tempatlahir_user = '$tempatlahir', tanggallahir_user = '$tanggallahir' WHERE id_user = '$id' ";
        // var_dump($sql);
        // exit;
        $query = mysqli_query($conn->koneksi, $sql);
  
        if ($query) {
            echo "<script>alert('Data Berhasil Di Ubah');window.location='../views/dasboard.php'</script>";
        } else {
            echo "<script>alert('Data Tidak Berhasil Di Ubah');window.location='../views/edit.php'</script>";
        }
    }
  

    function hapus_user($id)
    {
        $conn = new koneksi();
  
        $query = "DELETE FROM user WHERE id_user = $id";
  
        mysqli_query($conn->koneksi, $query);
  
        header("location:../views/dasboard.php");
  }
  }
    ?>
  