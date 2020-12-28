<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Perpustakan | UNIDA Gontor</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
</head>

<body>
  <div class="jumbotron hero">
      <br>
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
              <div class="row">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/perpus.png" alt="sing up image"></figure>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" action="login_user.php" name="login">
                            <div class="form-group">
                                <label for="nama_user"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama_user" id="your_name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="col-12">
                              <div class="row">
                              <div class="col-6">
                                  <input type="submit" name="login_user" class="form-submit" value="Login"/>
                              </div>
                              <div class="col-6">
                                  <input type="reset" class="form-submit"  value="reset"/>
                              </div>
                              </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
              </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <br>
      
  </div>


  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
      <img src="img/perpus.png" width="5%" alt="">
      <a class="navbar-brand" href="#">Perpustakaan | Unida Gontor</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buat.php">Buat Kartu</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Sign In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bootsrab/js/main.js"></script>

</body>

</html>
