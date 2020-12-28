<?php
// koneksi database
include_once('koneksi.php');
 
// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$nama_user = $_POST['nama_user'];
$password = $_POST['password'];
$foto = $_POST['foto'];
 
// update data ke database
mysqli_query($connect, "UPDATE user set nama_user='$nama_user', password='$password', foto='$foto' where id_user='$id_user'");
 
// mengalihkan halaman kembali ke index.php
header("location:list_user.php");
 
?>