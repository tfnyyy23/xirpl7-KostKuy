<?php

include "koneksi.php";
error_reporting(0);
 $id = $_GET['id_kost'];
 mysqli_query($koneksi, "DELETE FROM pwtut WHERE id_kost = $id");

 if( mysqli_affected_rows($koneksi) > 0){
	echo "<script>alert('Data berhasil dihapus');
	document.location.href = 'pwtut.php';</script>";
} else{
	echo "<script>alert('Data gagal dihapus')</script>";
}
 
 ?>