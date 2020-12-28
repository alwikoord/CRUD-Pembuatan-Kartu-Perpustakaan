<?php 
    include_once('koneksi.php');
    $nim = $_GET['nim'];
    
    mysqli_query($connect, "DELETE FROM registrasi WHERE nim='$nim'");
    
    header("location:list.php?pesan=hapus");
?>
