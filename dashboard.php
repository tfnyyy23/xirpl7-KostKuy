<?php
 include './koneksi.php';
 error_reporting();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/css/dash_2.css">
    <title>Dashboard</title>
</head>
<body>
<div>
<nav class="vektor">
<img class="vektor2" src="assets/img/vektor2.svg" />
<img class="logo2" src="assets/img/logo.png" width="111dp" height="111px"/>
</nav>
</div>

<div class="menu-bar">
    <ul>
        <li><a href="#">My Profile</a></li>
        <li><a href="#">Tentang kami</a></li>
        <li><a href="#">Saran</a></li>
        <li><a href="#">Bantuan</a></li>
        <li><a href="#">Harga</a></li>
    </ul>
</div>

<form>
  <input class="search" type="text" placeholder="Cari..." required>	
  <input class="button" type="button" value="Cari">		
</form>


<div>
    <div class="box1">
    <img class="g1" src="assets/img/g1.png" ><br>
         <div class="text1">
            <h3>Jasmine Kost</h3>
            <p class="p1">Alamat: Jl. DI Panjaitan gang karang baru No.999/42, Kedungampel, Purwokerto Kulon, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53141</p>
            <h3 class="bi1">Rp.500.000/bln</h3>
         </div>
    </div>
</div>

<div>
    <div class="box2">
    <img class="g2" src="assets/img/g2.png" >
         <div class="text2">
            <h3>Alfa Kost Putri</h3>
            <p class="p2">Alamat: Kedungampel, Purwokerto Kulon, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53141</p>
            <h3 class="bi2">Rp.600.000/bln</h3>
         </div>
    </div>
</div>

<div>
    <div class="box3">
    <img class="g3" src="assets/img/g3.png" >
         <div class="text3">
            <h3>Endo's Kost</h3>
            <p class="p3">Alamat: H68X+87H, Kedungampel, Purwokerto Kulon, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53141</p>
            <h3 class="bi3">Rp.400.000/bln</h3>
         </div>
    </div>
</div>

<div>
    <div class="box4">
    <img class="g4" src="assets/img/g4.png" >
         <div class="text4">
            <h3>Kost Rizkipu</h3>
            <p class="p4">Alamat: Jl. DI Panjaitan, Sodagaran, Purwokerto Kulon, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53141</p>
            <h3 class="bi4">Rp.500.000/bln</h3>
         </div>
    </div>
</div>

<form action="pwtsel.php" method="post">
<button id="btn1">Purwokerto Selatan</button>
</form>

<form action="pwtbar.php" method="post">
<button id="btn2">Purwokerto Barat</button>
</form>

<form action="pwtut.php" method="post">
    <button id="btn3">Purwokerto Utara</button>
</form>

<form action="pwttim.php" method="post">
<button id="btn4">Purwokerto Timur</button>
</form>
    
</body>
</html>