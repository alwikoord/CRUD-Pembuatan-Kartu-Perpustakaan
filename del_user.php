<?php 
include_once('koneksi.php');
$id_user = $_GET['id'];
mysqli_query($connect, "DELETE FROM user WHERE id_user='$id_user'");
 

header("location:list_user.php?pesan=hapus");
?>
