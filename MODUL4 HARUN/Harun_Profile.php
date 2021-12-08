<?php
session_start();
$conn = mysqli_connect("localhost","root","","wad_modul4");

$email = $_SESSION["email"];
$query = "SELECT * FROM users WHERE email = '$email'";

$select = mysqli_query($conn, $query);

$display = mysqli_fetch_assoc($select);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <title>Harun_Profile</title>
</head>

<body style="background:#FEF8E7;">
    <nav class="navbar navbar-expand-lg navbar-light justify-content-between"
        style="background-color: rgb(143, 184, 243);">
        <div class="container">
            <a class="navbar-brand" href="Harun_Index.php"> <b> EAD Travel </b> </a>
            <div class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">
                        <i class="bi bi-cart-check-fill"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $display["nama"] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="Logout.php">Logout</a>
                    </div>
                </li>

            </div>
        </div>
    </nav>


    <div class="container pt-5 pb-5" style="width: 200rem;">
        <div class="card">
            <div class="text-center pt-5">
                <h3>Profile</h3>
            </div>
            <form action="" method="POST">
                <div class="form-group row" style="margin-left:20px; margin-right:20px;">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                            value=<?php echo $display["email"] ?>>
                    </div>
                </div>
                <div class="form-group row" style="margin-left:20px; margin-right:20px;">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNama" placeholder="Hasrinaldi Hasniman Harun">
                    </div>
                </div>
                <div class="form-group row" style="margin-left:20px; margin-right:20px;">
                    <label for="nama" class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputHP" placeholder="088218986735">
                    </div>
                </div>

                <hr style="margin-left:20px; margin-right:20px">
                <div class="form-group row" style="margin-left:20px; margin-right:20px;">
                    <label for="nama" class="col-sm-2 col-form-label">Kata Sandi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSandi" placeholder="Kata Sandi">
                    </div>
                </div>
                <div class="form-group row" style="margin-left:20px; margin-right:20px;">
                    <label for="nama" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSandi" placeholder="Konfirmasi Kata Sandi">
                    </div>
                </div>

                <div class="form-group row" style="margin-left:20px; margin-right:20px;">
                    <label for="nama" class="col-sm-2 col-form-label">Warna Navbar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSandi" placeholder="Blue Sandi">
                    </div>
                </div>

                <div class="text-center d-grid gap-2 d-md-block pb-5">
                    <button type="submit" class="btn btn-primary" type="button">Simpan</button>
                    <button type="submit" class="btn btn-warning" type="button">Cancel</button>
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