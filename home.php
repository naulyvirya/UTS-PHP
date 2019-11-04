<?php
session_start();
if ($_SESSION['login']) {
  ?>
<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abang Store</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">Naulyv</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="datadiri.php">Produk</a>
      </li>
    </ul>
    
      <nav class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo $username; ?></a>
      <b><?php echo $_SESSION['login']; ?></b> <button class="btn btn-outline-info"><a href="logout.php">Logout</a></button>
    </nav>
  </div>
</nav>
    <!-- End Header -->

    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:20px;">
                <div class="jumbotron">
                  <h1 class="display-4">Halo Semua!</h1>
                  <p class="lead">Selamat datang di Abang Store</p>
                  <hr class="my-4">
                  <p>Disini kami menjual semua kebutuhan kalian mulai dari makanan, minuman, semua deh.</p>
                  <a class="btn btn-primary btn-lg" href="datadiri.php" role="button">Mulai Memesan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <footer>
      <center>&copy; 2019 Abang Store</center>
    </footer>
    <!-- End Footer -->

    <!-- JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- End JS -->
</body>
</html>

<?php

} else {
  echo "<script> alert('Silahkan Login Terlebih Dahulu');"
    . "window.location.href='login.php'</script>";
}