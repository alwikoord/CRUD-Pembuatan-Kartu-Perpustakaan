<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registrasi | Pembuatan Kartu</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
</head>

<body>
<div class="jumbotron hero">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-push-7 phone-preview">
                <img src="img/perpus.png" width="100%" alt="">
            </div>
            <div class="col-md-6 col-md-pull-3 get-it">

        <div class="outter-form-login">
    
            <form action="buat_proses.php" method="post">
            <h3 class="text-center title-login font-weight-bold">Registrasi Pembuatan</h3>
            <h4 class="text-center title-login font-weight-bold">Kartu Tanda Anggota (KTA) Perpustakaan</h4>
            <br>
        <div class="form-group" >
            <input type="text" class="form-control" id="validationServerUsername" name="nama" placeholder="Masukkan Nama Anda" required>
        </div>

        <div class="form-group">
            <input type="number" class="form-control" id="validationServerUsername" name="nim" placeholder="Masukkan NIM " required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="validationServerUsername" name="daerah" placeholder="Daerah" required>
        </div>
        
        <div class="form-group">
            <input type="number" class="form-control" id="validationServerUsername" name="telpon" placeholder="Nomer Telpon" required>
        </div>

        <div class="form-group">
            <input type="email" class="form-control" id="validationServerUsername" name="email" placeholder="Masukkan Email Anda" required>
        </div>

        <div class="form-group">
            <input type="date" class="form-control" id="validationServerUsername" name="ttl" placeholder="" required>
        </div>

        <div class="form-group" id="validationServerUsername">
             <select class="form-control" id="jk" name="jk" required>
             <option value="">Jenis Kelamin</option>
             <option>Laki-Laki</option>
             <option>Perempuan</option>
            </select>
        </div>

        <div class="form-group" id="validationServerUsername">
             <select class="form-control" id="tipe" name="tipe" required>
             <option value="">Tipe Keanggotaan</option>
             <option>Mahasiswa / Mahasiswi</option>
             <option>PKU / Pascasarjana</option>
             <option>Dosen</option>
            </select>
        </div>

        <div class="form-group" id="validationServerUsername">
             <select class="form-control" id="fakultas" name="fakultas" required>
             <option value="">Fakultas</option>
             <option>Tarbiyyah</option>
             <option>Ushuluddin</option>
             <option>Syariah</option>
             <option>Ekonomi Dan Manajemen</option>
             <option>Humaniora</option>
             <option>Sains Dan Teknologi</option>
             <option>Ilmu Kesehatan</option>
            </select>
        </div>    

        <div class="form-group" id="validationServerUsername">
             <select class="form-control" id="prodi" name="prodi" required>
             <option value="">Program Studi</option>
             <option>Pendidikan Agama Islam</option>
             <option>Pendidikan Bahasa Arab</option>
             <option>Studi Agama-Agama</option>
             <option>Aqidah Filsafat</option>
             <option>Ilmu Qur'an Dan Tafsir</option>
             <option>Perbandingan Madzhab</option>
             <option>Hukum Ekonomi Syari'ah</option>
             <option>Ekonomi Islam</option>
             <option>Manajemen</option>
             <option>Hubungan Internasional</option>
             <option>Ilmu Komunikasi</option>
             <option>Teknik Informatika</option>
             <option>Teknologi Industri Pertanian</option>
             <option>Agroteknologi</option>
             <option>Farmasi</option>
             <option>Gizi</option>
             <option>Kesehatan Dan Keselamatan Kerja</option>
            </select>
        </div>    
       
        <div class="form-group" id="validationServerUsername">
             <select class="form-control" id="semester" name="semester">
             <option value="">Semester</option>
             <option>2</option>
             <option>4</option>
             <option>6</option>
             <option>8</option>
             <option>8+</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlFile1">Masukkan Foto Anda</label>
            <input type="file" class="form-control-file" name="foto" id="exampleFormControlFile1" required>
         </div>
        

        <button type="submit" class="btn btn-primary btn-sm" name="tambah">Daftar</button>
        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
        <br>
        <br>
        <br>
    </form>
</div>
</div>
            </div>
        </div>
    </div>
</div>

  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
    <div class="container">
      <img src="img/perpus.png" width="5%" alt="">
      <a class="navbar-brand" href="#">Perpustakaan | Unida Gontor</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Buat Kartu
                <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Sign In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <section>
    
    
    
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src=""></script>
  
</body>

</html>
