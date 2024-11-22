<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Tambah User</h1>

    <form action="form_action.php" method="post">
        <label for="username">Username :</label>
        <input type="text" name="usernmae" placeholder="Username" id="username" required>
        <br>
        <br>
        <label for="email">Email :</label>
        <input type="email" name="email" placeholder="Email" id="email" required>
        <br>
        <br>
        <label for="password">Password :</label>
        <input type="passsword" name="password" placeholder="Password" id="password" required>
        <br>
        <br>
        <label for="nama_user">Nama User :</label>
        <input type="text" name="nama_user" placeholder="Nama User" id="nama_user" required>
        <br>
        <br>
        <label for="alamat_user">Alamat User :</label>
        <input type="text" name="alamat_user" placeholder="Alamat User" id="alamat_user" required>
        <br>
        <br>
        <label for="jenis_kelamin">Laki-laki</label>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">perempuan</option>
        </select>
        <br>
        <br>
        <label for="tempatlahir_user">Tempat Lahir :</label>
        <input type="text" name="tempatlahir_user" placeholder="Tempat Lahir" id="tempatlahir_user" required>
        <br>
        <br>
        <label for="tanggallahir_user">Tanggal Lahir :</label>
        <input type="date" name="tanggallahir_user" placeholder="Tanggal Lahir" id="tanggallahir_user" required>
        <br>
        <br>
        <button type="submit" name="kirim">Kirim</button>
    </form>


</body>

</html>
