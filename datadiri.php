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
    <title>Abang Store ~ Data Pribadi</title>
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
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:20px;">
                <div class="card border-primary">
                    <div class="card-header">Data Pribadi</div>
                    <div class="card-body">
                        <form action="produk.php" method="post">
                            <div class="form-group">
                              <label>Nama</label>
                              <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label>Alamat</label>
                              <textarea name="alamat" class="form-control" cols="10" rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <input type="radio" name="jenkel" value="Laki-laki" checked class="form-group" >Laki-laki
                              <input type="radio" name="jenkel" value="Perempuan" class="form-group" >Perempuan
                            </div>
                            <div class="form-group">
                              <label>Tanggal</label>
                              <input type="date" name="tgl" class="form-group" required>
                            </div>
                            <div class="form-group">
                              <label>Jumlah</label>
                              <input type="number" name="jml" min="1" class="form-control" required>
                            </div>
                            <button class="btn btn-outline-primary btn-block:" name="simpan">Simpan</button>
                        </form>
                    </div>
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