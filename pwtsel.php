<?php
include 'koneksi.php';
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
    <title>Kost Purwokerto Selatan</title>
</head>
<body style="background: url(assets/img/background-pattern-dark.jpg); background-size: cover; background-attachment: fixed;">
<h1 align="center" class="h1">Daftar Kost<br>Purwokerto Selatan</h1>
<div class="container"><br>
        <br><div>
            <div class="box1">
            <img class="g1" src="assets/img/kost_melati.jpg" >
                <div class="text1">
                    <h3>Melati Kost</h3>
                    <p class="p1">Jl. M. Yamin 1, Karang Pucung RT 03 RW 04, Purwokerto Selatan, Kabupaten Banyumas, Provinsi Jawa Tengah</p>
                    <h3 class="bi1">Rp.500.000/bln</h3>
                </div>
            </div>
        </div>
        <div>
            <div class="box2">
            <img class="g2" src="assets/img/kost-putri-aries-1295174258_large.jpg" >
                <div class="text2">
                    <h3>Aries Kost</h3>
                    <p class="p2">Jl. HOS Notosuwiryo No. 3, Purwokerto Selatan, Kabupaten Banyumas, Provinsi Jawa Tengah</p>
                    <h3 class="bi2">Rp.650.000/bln</h3>
                </div>
            </div>
        </div>
        <div class="box3">
            <img class="g3" src="assets/img/jasmine-kost.jpg" >
                <div class="text2">
                    <h3>Jasmine Kost</h3>
                    <p class="p3">Jl. DI Panjaitan, Kedungampel, Purwokerto Kulon,Kec. Purwokerto Selatan, Kabupaten Banyumas, Provinsi Jawa Tengah</p>
                    <h3 class="bi2">Rp.600.000/bln</h3>
                </div>
            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><a href="tambah_sel.php" type="button" class="btn btn-success ms-3 md-3">Tambah Data Kost</a>
<form action="pwtsel.php" method="post">
<table>
    <tr>
        <td><button type="submit" class="mt-3 ms-4 btn btn-success" >Cari Data</button></td>
        <td><input class="ms-3 mt-3 form-control" type="text" name="cari" size="30" placeholder="Masukkan nama kost yang dicari..."></td>
    </tr>
</table>
</form><br>
<?php 
if(isset($_POST['cari'])){
	$cari = $_POST['cari'];
	echo '<br><b class="ms-3">Hasil pencarian : '.$cari.'</b><br>';
}
?>

<!-- Awal Card Tabel -->
<div class="card mt-3">
            <div class="card-header bg-success text-white">
                Daftar Kost Purwokerto Selatan
            </div> 
            <div class="card-body">
                <table class="table table-bordered table-striped">

                    <tr>
                        <th><center>No.</center></th>
                        <th><center>Nama Kost</center></th>
                        <th><center>Alamat Kost</center></th>
                        <th><center>Harga Kost</center></th>
                        <th><center>Gambar Kost<center></th>
                        <th><center>Pengaturan</center></th>
                    </tr>
                    
                    <?php 
    if(isset($_POST['cari'])){
		$cari = $_POST['cari'];
		$data = mysqli_query($koneksi, "select * from pwtsel where nama_kost like '%".$cari."%'");				
	}else{
		$data = mysqli_query($koneksi, "select * from pwtsel");		
	}
    while($row = mysqli_fetch_assoc($data)):?>
    <tbody>
    <tr>
        <td rowspan="8" width="100px"><?php echo $row['id_kost'];?></td>
        <td><?php echo $row['nama_kost'];?></td>
        <td><?php echo $row['alamat_kost'];?></td>
        <td><?php echo $row['harga'];?></td>
        <td><img src="img/<?php echo $row['gambar'];?>" alt="" width="10"></td>
        <td><a type="button" class="btn btn-warning" href="ubah_sel.php?id_kost=<?php echo $row['id_kost']; ?>">Edit</a>
        <a type="button" class="btn btn-danger" href="hapus_sel.php?id_kost=<?php echo $row['id_kost']; ?>">Hapus</a>
        </td>
    </tr>
    </tbody>
    <?php endwhile;?>
    </table>
            </div>
        </div>
    <!-- Akhir Card Tabel -->


     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>