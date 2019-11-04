<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abang Store ~ Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <!-- End Header -->

    <!-- Content -->
    <center><h3>Form Login</h3></center>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:20px;">
                <div class="card border-primary">
                    <div class="card-header">Silahkan Login Terlebih Dahulu</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Username</label> 
                                <input type="text" name="user" class="form-control" require>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="pass" class="form-control" require>
                            </div>
                                <button class="btn btn-primary btn-block:" name="login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['login'])) {
        $a = $_POST['user'];
        $b = $_POST['pass'];

        if ($a == "admin" && $b == "12345") {
            $_SESSION['login'] = Admin;
            echo "<script>alert('Anda Berhasil Login'); window.location.href='home.php'</script>";
        } else {
            echo "<script>alert('Username atau Password Anda Salah!');</script>";
        }
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