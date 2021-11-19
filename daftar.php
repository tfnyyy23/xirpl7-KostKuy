<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/daftar.css">
    <link rel="icon" href="assets/img/logo.png">
    <title>Daftar || Kost Kuy</title>
</head>
<body>
<div class="button">
        <form action="masuk.php" method="post">
            <button class="btn1">Masuk</button>
        </form>
<div>

<div class="but2">
        <form action="index.html" method="post">
            <button class="btn2">Kembali</button>
        </form>
<div>

<div>

        <nav class="vektor">
        <img class="vektor2" src="assets/img/vektor2.svg" />
        <img class="logo2" src="assets/img/logo.png" width="125dp" height="125px"/>
        <img class="garis2" src="assets/img/rec2.svg" />
        <img class="gambar2" src="assets/img/gambar2.png"/>
        </nav>
    </div>

    <div class="title">
    <h1>Daftar Akun</h1>
    </div>

    <div class="box-login">
<form action="dashboard.php" method="post">
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type = "text" name = "nama"></td> 
    </tr> 
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" name = "email"></td>
    </tr>
    <tr>
        <td>Password Email</td>
        <td>:</td>
        <td><input type = "password" name = "pass_em"></td> 
    </tr> 
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input type="radio" class="custom-control-input" id="customRadio1" name="laki-laki">
        <label class="custom-control-label" for="customRadio1">Laki-laki</label>
        <input type="radio" class="custom-control-input" id="" name="perempuan">
        <label class="custom-control-label" for="customRadio2">Perempuan</label></td>


    <tr>
        <td>No Telf</td>
        <td>:</td>
        <td><input type="number" name = "no_telf"></td>
    </tr>
     <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name = "username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type = "password" name = "buat_pass"></td> 
    </tr> 
    <tr>
        <td>Konfirmasi Password</td>
        <td>:</td>
        <td><input type="password" name = "konfir_pass"></td>
    </tr>
     <tr>
        <td></td>
        <td></td>
        <td><input type="submit" values="SIMPAN" name="simpan"></td>
        </form>
    </tr>
</table>
</form>
</div>
</body>
</html>


<?php
    include './koneksi.php';
    error_reporting(0);
    
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $passemail = $_POST['pass_em'];
    $jk = $_POST['jk'];
    $notelf = $_POST['no_telf'];
    $username = $_POST['username'];
    $pass = $_POST['buat_pass'];
    $konfir_pass = $_POST['konfir_pass'];

    $sql = "INSERT INTO daftar(nama, email, pass_em, jk, no_telf, username, buat_pass, konfir_pass) 
    VALUES ('.$nama.', '.$email.', '.$passemail.', '.$jk.', '.$notelf.', '.$username.', '.$pass.', '.$konfir_pass.')";

    if($koneksi ->query($sql) === TRUE){
        echo "<a href='index.html'></a><br>";
    }else{
        echo "Error:" .$sql . "<br>" . $koneksi->error;
    }
    $koneksi->close();

    ?>
