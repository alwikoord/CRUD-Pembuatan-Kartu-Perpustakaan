<?php

    if(isset($_POST['tambah'])){
        include_once('koneksi.php');

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

        $simpan = mysqli_query($connect, "INSERT INTO registrasi VALUES ('$nama','$nim','$daerah','$telpon','$email','$jk','$tipe','$fakultas','$prodi','$semester','$ttl','$foto')");
          
         

            if($simpan==true){
		
                echo "<script>alert('Alhamdulillah Data anda sudah masuk....!!!');history.go(-1);</script>";
                
            }else{
                
                echo "<script>alert('Astagfirullah Data anda belum masuk nih....!!!');history.go(-1);</script>";
                
            }
         
        }else{	
 
    }
?>
