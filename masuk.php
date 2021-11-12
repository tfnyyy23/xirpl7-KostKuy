<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/css/masuk.css">
    <title>Masuk || Kost Kuy</title>
</head>
<body>
<div class="button">
        <form action="daftar.php" method="post">
            <button class="btn1">Daftar</button>
        </form>
<div>

<div class="but2">
        <form action="index.html" method="post">
            <button class="btn2">Kembali</button>
        </form>
<div>

        <nav class="vektor">
        <img class="vektor2" src="assets/img/vektor2.svg" />
        <img class="logo2" src="assets/img/logo.png" width="125dp" height="125px"/>
        <img class="garis2" src="assets/img/rec2.svg" />
        <img class="gambar2" src="assets/img/gambar2.png"/>
        </nav>
    </div>
    <!--form-->
    <div class="title">
        <h1>Masuk Akun</h1>
    </div>
    <div class="box-login">
        <form action="" method="post">
<table>
    <tr>
    <div class="us1">
        <td>Username</td>
        <td>:</td>
        <td><input type = "text" placeholder="username anda" name = "username"></td> 
        </div>
    </tr> 
    <tr>
    <div class="us2">
        <td>Password</td>
        <td>:</td>
        <td><input type="password" placeholder="password anda" name = "pass"></td>
</div>
    </tr>
     <tr>
        <td></td>
        <td></td>
        <td><input type="submit" values="SIMPAN" name="simpan"></td>
    </tr>
</table>
        </form>
    </div>
</body>
</html>
<?php
    include './koneksi.php';
    error_reporting(0);
    
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $sql = "INSERT INTO Masuk(username, pass) VALUES ('.$username.', '.$password.')";

    if($koneksi ->query($sql) === TRUE){
        echo "<a href='index.html'></a><br>";
    }else{
        echo "Error:" .$sql . "<br>" . $koneksi->error;
    }
    $koneksi->close();

    ?>
