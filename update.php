<?php
	include_once('koneksi.php');
    $nim = $_GET['nim'];
    $data = mysqli_query($connect, "SELECT * from registrasi where nim='$nim'"); 
    $r = mysqli_fetch_array($data);
    session_start();
?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Update Registrasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <div class="container">
                <img src="img/perpus.png" width="10%" alt="">
                <a class="navbar-brand" href="#">Perpustakaan | Unida Gontor</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" data-toggle="dropdown">
                                <img src="img/user.png" alt="" class="user-avatar-md rounded-circle">
                            </a> 
                            
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo "".$_SESSION['nama_user']."";?></h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="index.html"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                 </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
       <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu Layanan
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="admin.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="list.php"><i class="fas fa-list-alt"></i>List</a>
                            </li>
                            <li class="nav-divider">
                                Fitur
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="buat_dsb.php"><i class="fas fa-address-card"></i>Buat Kartu</a>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="far fa-user"></i>User</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="buat_user.php">Tambah User</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="list_user.php">List User</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                <form action="update_proses.php" method="post">
            <h3 class="text-center title-login font-weight-bold">Edit Data Calon Pemustaka</h3>
            <h4 class="text-center title-login font-weight-bold">Kartu Tanda Anggota (KTA) Perpustakaan</h4>
            <br>
        <div class="form-group" >
            <input type="text" class="form-control" id="validationServerUsername" name="nama" placeholder="Masukkan Nama Anda" value="<?php echo $r['nama']; ?>" required>
        </div>

        <div class="form-group">
            <input type="number" class="form-control" id="validationServerUsername" readonly name="nim" placeholder="Masukkan NIM " value="<?php echo $r['nim']; ?>" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="validationServerUsername" name="daerah" placeholder="Daerah" value="<?php echo $r['daerah']; ?>" required>
        </div>
        
        <div class="form-group">
            <input type="number" class="form-control" id="validationServerUsername" name="telpon" placeholder="Nomer Telpon" value="<?php echo $r['telpon']; ?>" required>
        </div>

        <div class="form-group">
            <input type="email" class="form-control" id="validationServerUsername" name="email" placeholder="Masukkan Email Anda" value="<?php echo $r['email']; ?>" required>
        </div>

        <div class="form-group">
            <input type="date" class="form-control" id="validationServerUsername" name="ttl" placeholder="Tanggal Lahir" value="<?php echo $r['ttl']; ?>" required>
        </div>

        <div class="form-group" id="validationServerUsername">
             <select class="form-control" id="jk" name="jk" value="<?php echo $r['jk']; ?>" required>
             <option value="">Jenis Kelamin</option>
             <option>Laki-Laki</option>
             <option>Perempuan</option>
            </select>
        </div>

        <div class="form-group" id="validationServerUsername">
             <select class="form-control" id="tipe" name="tipe" value="<?php echo $r['tipe']; ?>" required>
             <option value="">Tipe Keanggotaan</option>
             <option>Mahasiswa / Mahasiswi</option>
             <option>PKU / Pascasarjana</option>
             <option>Dosen</option>
            </select>
        </div>

        <div class="form-group" id="validationServerUsername">
             <select class="form-control" id="fakultas" name="fakultas" value="<?php echo $r['fakultas']; ?>" required>
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
             <select class="form-control" id="prodi" name="prodi" value="<?php echo $r['prodi']; ?>" required>
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
             <select class="form-control" id="semester" value="<?php echo $r['semester']; ?>" name="semester">
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
            <input type="file" class="form-control-file" name="foto" id="exampleFormControlFile1" value="<?php echo $r['foto']; ?>" required>
         </div>
        

        <button type="submit" class="btn btn-primary btn-sm" name="update">Simpan</button>
        <a href="list.php" class="btn btn-warning btn-sm">Kembali</a>
        <br>
        <br>
        <br>
    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2020 Perpustakaan | UNIDA Gontor
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
</body>
 
</html>