<?php



//inisialisasi kelas atau membuat class diusahakan nama kelas sama dengan nama file
class koneksi
{

// acces modifier atau modifier akses digunakan untuk menentukan tingkat aksebilitas atau visibilitas properti dan metode dalam sebuah kelas : public,private,protected
  
    private $server = "localhost";
    private $username ="root";
    private $pass="";
    private $database = "latihan_11rpl2";

    //berfungsi untuk mengembalikan nilai dari koneksi ke database jika koneksi nya berhasil
    public $koneksi;
    
    function __construct(){

       $this->koneksi = mysqli_connect($this->server, $this->username, $this->pass, $this->database);
  
       //buat memilih database yang akan kita gunakan
      mysqli_select_db($this->koneksi,$this->database);


      if($this->koneksi){
      //   echo "koneksi ke database". $this->database ."berhasil";

      //mengembalikan nilai koneksi jika koneksinya berhasil
      return $this->koneksi;
     } else{
       echo "koneksi ke database gagal !";
      }
    }


    // $conn = new koneksi();
}
?>