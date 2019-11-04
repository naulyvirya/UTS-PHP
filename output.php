<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abang Store ~ Detail Pembelian</title>
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

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10" style="padding:20px;">
                <center><h2>Detail Pembelian Barang</h2></center>
                <div class="card border-primary">
                <div class="card-header">Data Pembeli</div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                <form action="bayar.php" method="post">
                <?php
                if (isset($_POST['save'])) {
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alamat'];
                    $jenkel = $_POST['jenkel'];
                    $jml_barang = $_POST['jml'];
                    $tanggal = $_POST['tgl'];
                    $namabrg = $_POST['namabarang'];
                    $kode = $_POST['kode'];
                    $jenis = $_POST['jenis'];
                    $harga = $_POST['harga'];
                    $jumlah = $_POST['jmlbarang'];
                    ?>

                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Jumlah</th>
                        <th>Tanggal Pembelian</th>
                        <th></th>
                    </tr>

                    <tr>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $alamat; ?></td>
                        <td><?php echo $jenkel; ?></td>
                        <td><?php echo $jml_barang; ?></td>
                        <td><?php echo $tanggal; ?></td>
                        <th></th>
                    </tr>

                    <tr>
                    <th colspan="7"><center>Daftar Barang yang Dibeli</center></th>    
                    </tr>

                    <tr>
                        <th>Nama Barang</th>
                        <th>Kode Barang</th>
                        <th>Jenis Barang</th>
                        <th>Harga Barang(Rp)</th>
                        <th>Jumlah Barang</th>
                        <th>Total Harga(Rp)</th>
                    </tr>

                <?php
                foreach ($namabrg as $key => $value) {
                    ?>
                    <tr>
                            <td><?php echo $namabrg[$key]; ?></td>
                            <td><?php echo $kode[$key]; ?></td>
                            <td><?php echo $jenis[$key]; ?></td>
                            <td><?php echo $harga[$key]; ?></td>
                            <td><?php echo $jumlah[$key]; ?></td>
                            <td><?php echo $total1 = $harga[$key] * $jumlah[$key]; ?></td>
                            <?php $subtotal = $subtotal + $total1 ?>
                            
                        </tr>
                    <?php 
                } ?>

                <tr>
                    <th colspan="7"><center>Total Pembayaran</center></th>    
                    </tr>

                <tr>
                    <th>Sub Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <td>Rp. <?php echo $subtotal; ?></td>
                </tr> 
        
                <?php
                if ($subtotal >= 150000 && $subtotal < 250000) {
                    $diskon = $subtotal * (5 / 100);
                    ?>

                <tr>
                    
                    <td><strong>Diskon (5%)</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <?php $dc = $diskon; ?>
                    <td>Rp. <?php echo $dc; ?></td>
                </tr>
                    
                <?php

            } elseif ($subtotal >= 250000 && $subtotal < 500000) {
                $diskon = $subtotal * (10 / 100);
                ?>

                <tr>
                    <td><strong>Diskon (10%)</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <?php $dc = $diskon ?>
                    <td>Rp. <?php echo $dc; ?></td>
                </tr>

                <?php

            } elseif ($subtotal >= 500000) {
                $diskon = $subtotal * (20 / 100);
                ?>

                <tr>
                    <td><strong>Diskon (20%)</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <?php $dc = $diskon ?>
                    <td>Rp. <?php echo $dc; ?></td>
                </tr>
            <?php 
        } else {
            ?>  <tr>
                    <td><strong>Diskon (-)</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Rp. <?php echo $subtotal; ?></td>
                </tr>
            <?php 
        } ?> 

                <tr>
                    <td><strong>Total Pembayaran</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <?php $total = $subtotal - $diskon ?>
                    <td>Rp. <?php echo $total; ?></td>
                </tr>
                
                <tr>
                    <th colspan="7"><b><center>Pembayaran</center></b></th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                    </table>
                        <div class="form-group">
                            <input type="hidden" name="total" value="<?php echo $total; ?>">
                            <label>Masukkan Jumlah Uang</label>
                            <input type="number" name="uang" min="<?php echo $total; ?>" class="form-control">
                        </div>
                            <button type="submit" class="btn btn-primary btn-block:" name="save">Bayar</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>    
    </div>
    <?php

}
?>
</body>
</html>