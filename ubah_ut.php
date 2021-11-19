<?php 

include "koneksi.php";
error_reporting (E_ALL ^ E_NOTICE);

$id = isset($_GET['id_kost']) ? $_GET['id_kost'] : '';
//$id = $_GET['id_kost'];

if( isset($_POST["submit"])){
    $nama_kost = $_POST["nama_kost"];
    $alamat_kost = $_POST["alamat_kost"];
    $harga = $_POST["harga"];

    mysqli_query($koneksi, "UPDATE pwtut SET nama_kost='$nama_kost', alamat_kost='$alamat_kost', harga='$harga' where id_kost='$id'");

    if( mysqli_affected_rows($koneksi) > 0){
        echo "<script>alert('Data Berhasil Diubah');
        document.location.href = 'pwtut.php';</script>";
    } else{
        echo "<script>alert('Data Gagal Diubah')</script>";
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
     <title>Edit Data Kost</title>
</head>
<body style="background: url(assets/img/17_-_Ornament_Pattern.jpg); background-size: cover; background-attachment: fixed;">
    <h1 class="h2" align="center">Edit Data Kost</h1><br><br>
    <form action="" method="post">
    <table align="center">
    <?php 
    $id = $_GET['id_kost'];
    $result = mysqli_query($koneksi, "select * from pwtut where id_kost='$id'");
    while($row = mysqli_fetch_assoc($result)):?>
    <tr>
         <td><label class="txt1" for="nama_kost" class="form-label mt-4">Nama Kost</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="nama_kost" name="nama_kost" value="<?php echo $row['nama_kost']; ?>"  required></td>
    </tr>
    <tr>
         <td><label class="txt1" for="alamat_kost" class="form-label mt-4">Alamat Kost</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="alamat_kost" name="alamat_kost" value="<?php echo $row['alamat_kost']; ?>"  required></td>
    </tr>
    <tr>
         <td><label class="txt1" for="harga" class="form-label mt-4">Harga Kost</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="harga" name="harga" value="<?php echo $row['harga']; ?>"></td>
    </tr>
    <tr>
         <td><label class="txt1" for="gambar" class="form-label mt-4">Gambar Kost</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="gambar" name="gambar" value="<?php echo $row['gambar']; ?>"  required disabled></td>
    </tr>
    <tr>
         <td><button type="submit" class="btn btn-success mt-3 pr-3 pl-3" style="margin-left: 15rem;" name="submit">Simpan</button></td>
    </tr>
</table>
<?php endwhile; ?>
</form>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
