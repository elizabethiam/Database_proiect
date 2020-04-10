
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hermes</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Elite Online Store</span>
    <span class="site-heading-lower">Hermes</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg  navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item  px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Home
              
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.php">About Hermes</a>
          </li>
           <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="watchView.php">History</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="watches.php">Watches
            <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.php">Store</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section clearfix">
    <div class="container">
    
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper"></span>
            <span class="section-heading-lower"></span>
          </h2>
          <p class="mb-3">
          </p>
          
        </div>
      </div>
    </div>
  </section>
<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-3 form-box">
            <div class="form-top">
                <div class="form-top-center">
                    <h3><i>Enter Login Details</i></h3>
                    
                </div>
                <div class="form-top-right">
                    <i class="fa fa-key"></i>
                </div>
            </div>
            <div class="form-bottom">
                <form role="form" action="login1.php" method="post" class="login-form">
                    <div class="form-group">
                        <label class="sr-only" for="form-username">Username</label>
                        <input type="text" name="form-username"  placeholder="Username..." class="form-username form-control" id="form-username" value="<?php if(isset($_COOKIE["form-username"])) { echo $_COOKIE["form-username"]; } ?>">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-password">Password</label>
                        <input type="password" name="form-password"  placeholder="Password..." class="form-password form-control" id="form-password" value="<?php if(isset($_COOKIE["form-password"])) { echo $_COOKIE["form-password"]; } ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-secondary"><i>Sign in!</i></button>
                   
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> <i>Remember me</i>
      </label>
                </form>
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-sm-6 col-sm-offset-3 social-login">
            <br>
            <form action="register.php" method="post" >
                <div class="form-bottom">
                    <button type="submit" class="btn btn-secondary" href="register.php"><i>Register</i></button>
                </div>
            </form>
            <br>
            <h3><i>...or login with:<i></h3>
            <div class="social-login-buttons">
                <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                    <i class="fa fa-facebook"></i> Facebook
                </a>
                <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                    <i class="fa fa-twitter"></i> Twitter
                </a>
                <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                    <i class="fa fa-google-plus"></i> Google Plus
                </a>
               
            </div>
        </div>
    </div>
    </div>
  </section>
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
