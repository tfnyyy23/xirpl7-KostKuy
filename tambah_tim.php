<?php 

include "./koneksi.php";
error_reporting(0);

if( isset($_POST["submit"])){
    $nama_kost = $_POST["nama_kost"];
    $alamat_kost = $_POST["alamat_kost"];
    $harga = $_POST["harga"];
    $filename = $_FILES['gambar']['name'];

    $xx =$filename;

    move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/'.$filename);

    mysqli_query($koneksi, "INSERT INTO pwttim VALUES('', '$nama_kost','$alamat_kost','$harga','$xx')");

    if( mysqli_affected_rows($koneksi) > 0){
        echo "<script>alert('Berhasil Menambahkan Data');
        document.location.href = 'pwttim.php';</script>";
    } else{
        echo "<script>alert('Gagal Menambahkan Data');
        document.location.href = 'pwttim.php';</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="assets/css/pwt.css">
     <title>Tambah Data Kost</title>
</head>
<body style="background: url(assets/img/17_-_Ornament_Pattern.jpg); background-size: cover; background-attachment: fixed;">
    <h1 align="center" class="h2">Tambah Data Kost</h1><br><br>

    <form action="" method="post" enctype="multipart/form-data">
    <table align="center">
    <tr>
         <td><label class="txt1" for="nama_kost" class="form-label mt-4"><b>Nama Kost</b></label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="nama_kost" name="nama_kost" aria-describedby="emailHelp" placeholder="Masukkan nama kost anda disini" required></td>
    </tr>
    <tr>
         <td><label class="txt1" for="alamat_kost" class="form-label mt-4"><b>Alamat kost</b></label>
         <input type="textarea" size="60" class="form-control mt-2 ms-3" id="alamat_kost" name="alamat_kost" aria-describedby="emailHelp" placeholder="Masukkan alamat kost anda disini" required></td>
    </tr>
    <tr>
         <td><label class="txt1" for="harga" class="form-label mt-4"><b>Harga Kost</b></label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="harga" name="harga" aria-describedby="emailHelp" placeholder="Masukkan harga kost anda disini" required></td>
    </tr>
    <tr>
         <td><label class="txt1" for="gambar" class="form-label mt-4"><b>Gambar Kost</b></label>
         <input type="file" size="60" class="form-control mt-2 ms-3" id="gambar" name="gambar" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><button type="submit" class="btn btn-success mt-3 pr-3 pl-3" style="margin-left: 15rem;" name="submit">Simpan</button></td>
    </tr>
</table>
</form>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

