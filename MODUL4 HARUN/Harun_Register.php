<?php

$conn = mysqli_connect("localhost","root","","wad_modul4");


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <title>Harun_Register</title>
</head>

<body style="background:#FEF8E7;">
    <nav class="navbar navbar-light" style="background-color: rgb(143, 184, 243);">
        <div class="container">
            <a class="navbar-brand"><b>EAD Travel</b></a>

            <div class="d-flex">
                <div style="margin-right:25px;">
                    <a href="" style="color:black;">Register</a>
                </div>
                <div style="margin-right:75px;">
                    <a href="Harun_Login.php" style="color:black;">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <?php
    if ( isset($_POST["register"])){

        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $pw1 = $_POST["pw"];
        $pw2 = $_POST["pw2"];
        $nohp = $_POST["nomorhp"];
        $cekmail = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_fetch_assoc($cekmail)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            Email dah tersedia.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
            return false;
        }
        if ($pw1 !== $pw2){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            Password tidak sama.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
            return false;
        }
        $query = "INSERT INTO users VALUES ('', '$nama', '$email', '$pw1', $nohp)";
        mysqli_query($conn, $query);
        echo "
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
        Register Telah Berhasil.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
    }
        
    ?>


    <div class="container pt-5 pb-5" style="width: 65rem;" >
        <div class="card">
            <div class="text-center mt-5">
                <h3>Register</h3>
                <hr style="margin-left:20px; margin-right:20px;">
            </div>
            <form action="" method="POST">
                <div class="mb-3" style="margin-left: 20px; margin-right:20px;">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                        placeholder="Masukkan Nama Lengkap" required>
                </div>

                <div class="mb-3" style="margin-left: 20px; margin-right:20px;">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Masukkan Alamat E-Mail" required>
                </div>

                <div class="mb-3" style="margin-left: 20px; margin-right:20px;">
                    <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                    <input type="text" name="nomorhp" class="form-control" id="exampleFormControlInput1"
                        placeholder="Masukkan Nomor Handphone" required>
                </div>

                <div class="mb-3" style="margin-left: 20px; margin-right:20px;">
                    <label for="exampleFormControlInput1" class="form-label">Kata Sandi Anda</label>
                    <input type="password" name="pw" class="form-control" id="exampleFormControlInput1"
                        placeholder="Kata Sandi Anda" required>
                </div>

                <div class="mb-3" style="margin-left: 20px; margin-right:20px;">
                    <label for="exampleFormControlInput1" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" name="pw2" class="form-control" id="exampleFormControlInput1"
                        placeholder="Konfirmasi Kata Sandi" required>
                </div>

                <div class="text-center mb-3">
                    <button type="submit" name="register" class="btn btn-primary btn-lg"
                        style="padding-left:30px;padding-right:30px;">Daftar</button>
                </div>

                <div class="text-center mb-3">
                    <p>Anda sudah punya akun? <a href="Harun_Login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <footer class="text-center" style="background-color:lightskyblue;">
        <br>
            <label> &copy 2021 copyright <a type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#credit"> Harun_1202190320 </a></label>
            <br>
        </footer>
        <div class="modal fade text-left" id="credit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Created by</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p> Nama: Hasrinaldi Hasniman Harun</p>
                    <p> Nim: 1202190320</p>
                </div>
                </div>
            </div>
            </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>