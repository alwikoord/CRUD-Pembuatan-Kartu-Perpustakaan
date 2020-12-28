<?php

    if(isset($_POST['tambah_user'])){
        include_once('koneksi.php');
        $id_user = $_POST['id_user'];
        $nama_user = $_POST['nama_user'];
        $password = $_POST['password'];
        $foto = $_POST['foto'];
        

        $simpan = mysqli_query($connect, "INSERT INTO user VALUES('$id_user','$nama_user','$password','$foto')");
          
         

            if($simpan==true){
		
                echo "<script>alert('Alhamdulillah Data anda sudah masuk....!!!');history.go(-1);</script>";
                
            }else{
                
                echo "<script>alert('Astagfirullah Data anda belum masuk nih....!!!');history.go(-1);</script>";
                
            }
         
        }else{	
 
    }
?>
