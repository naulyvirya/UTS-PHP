<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abang Store ~ Data Barang</title>
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
                    <div class="card-header">Data Barang</div>
                    <div class="card-body">
                        <form action="output.php" method="post">
                            <?php
                            if (isset($_POST['simpan'])) {
                                $nama = $_POST['nama'];
                                $alamat = $_POST['alamat'];
                                $jenkel = $_POST['jenkel'];
                                $tanggal = $_POST['tgl'];
                                $jml_barang = $_POST['jml'];

                                for ($i = 0; $i < $jml_barang; $i++) {
                                    ?>
                                <input type="hidden" name="nama" value="<?php echo $nama ?>">
                                <input type="hidden" name="alamat" value="<?php echo $alamat ?>">
                                <input type="hidden" name="jenkel" value="<?php echo $jenkel ?>">
                                <input type="hidden" name="tgl" value="<?php echo $tanggal ?>">
                                <input type="hidden" name="jml" value="<?php echo $jml_barang ?>">
                        
                            <div class="form group">
                                <center><label><b>Data Barang <?php echo $i + 1; ?></b></label></center>
                            </div>
                            <div class="form-group">
                              <label>Nama Barang</label>
                              <input type="text" name="namabarang[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label>Kode Barang</label>
                              <input type="text" name="kode[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label>Jenis Barang</label>
                              <select name="jenis[]" class="form-control" required>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                    <option value="Kebutuhan Pokok">Kebutuhan Pokok</option>
                                    <option value="Barang">Barang</option>
                                    <option value="Peralatan Dapur">Peralatan Dapur</option>
                                    <option value="Kebutuhan Sandang">Kebutuhan Sandang</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Harga</label>
                              <input type="number" name="harga[]" min="1" class="form-group" required>
                            </div>
                            <div class="form-group">
                              <label>Jumlah Barang</label>
                              <input type="number" name="jmlbarang[]" min="1" class="form-control" required>
                            </div>
                            <hr style="height:3px; background-color:blue;">
                                <?php 
                            }
                        } ?>
                            <button class="btn btn-success btn-block:" name="save">Simpan</button>
                            <button type="reset" class="btn btn-warning btn-block:">Reset</button>
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