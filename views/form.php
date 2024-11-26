<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>

<body>
<center>
    <h2>Tambah User</h2>
    <form action="../controllers/c_user.php?aksi=tambah" method="post">
      <table>
        <tr>
        <td><label for="username">Username:</label></td>
        <input type="text" id="username" name="id_user" hidden>
        <td><input type="text" name="username" id="username" required></td>
        </tr>
        <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="email" name="email" id="email" required></td>
        </tr>
        <tr>
        <td><label for="password">Password:</label></td>
        <td><input type="password" name="password" id="password" required></td>
        </tr>
        <tr>
        <td><label for="nama_user">Nama:</label></td>
        <td><input type="text" name="nama_user" id="nama_user" required></td>
        </tr>
        <tr>
        <td><label for="alamat_user">Alamat:</label></td>
        <td><input type="text" name="alamat_user" id="alamat_user" required></td>
        </tr>
        <tr>
        <td><label for="jenis_kelamin">Jenis Kelamin:</label></td>
        <td><select name="jenis_kelamin" id="jenis_kelamin">
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
        </select></td>
        </tr>
        <tr>
        <td><label for="tempatlahir_user">Tempat Lahir:</label></td>
        <td><input type="text" name="tempatlahir_user" id="tempatlahir_user" required></td>
        </tr>
        <tr>
        <td><label for="tanggallahir_user">Tanggal Lahir:</label></td>
        <td><input type="date" name="tanggallahir_user" id="tanggallahir_user" required></td>
        </tr>
        <tr>
          <td><button type="submit" name="tambah">Submit</button></td>
      </tr>
        </table>
    </form>
  </center>
</body>

</html>
