<?php
// koneksi database
include_once('koneksi.php');
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$daerah = $_POST['daerah'];
$telpon = $_POST['telpon'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$tipe = $_POST['tipe'];
$fakultas = $_POST['fakultas'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$ttl = $_POST['ttl'];
$foto = $_POST['foto'];
 
$query_update = "UPDATE registrasi set nama='$nama', daerah='$daerah', telpon='$telpon', email='$email', jk='$jk', tipe='$tipe', fakultas='$fakultas', prodi='$prodi', semester='$semester', ttl='$ttl', foto='$foto' where nim='$nim'";

// update data ke database
mysqli_query($connect, $query_update);
 

header("location:list.php");
 
?>