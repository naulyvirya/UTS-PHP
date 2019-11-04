<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abang Store ~ Pembayaran</title>
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
    <?php 
    if (isset($_POST['save'])) {
        $bayar = $_POST['uang'];
        $total = $_POST['total'];
        $hasil = $bayar - $total;
        ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:20px;">
                <div class="card border-primary">
                    <div class="card-header">Data Pembayaran</div>
                    <div class="card-body">
                        <p>Uang yang Anda berikan Senilai Rp. <?php echo $bayar; ?></p>
                        <p>Kembalian Uang : Rp. <?php echo $hasil; ?></p>
                        <hr style="background-color:black">
                        <p>Apakah Anda Ingin Memesan Kembali?</p>
                        <a href="datadiri.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ya</a>
                        <a href="logout.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Tidak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

}
?>
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