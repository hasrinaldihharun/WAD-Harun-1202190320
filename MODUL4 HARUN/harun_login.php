<?php 
session_start();
include_once("harun_config.php");

if (isset($_POST['harun_login'])){
    login ($_POST);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <body style="background:seashell">
        <nav class="navbar navbar-expand-lg navbar-light" style= "background-color:lightskyblue;">
            <div class= "container">
                <a class="navbar-brand fw-bold" href="harun_index.php"> EAD Travel</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup"></div>
                <a class="nav-link active" style="color: grey" aria-current="page" href="harun_register.php"> Register</a>
                <a class="nav-link" style="color: black" href="harun_login.php">Login</a>    
                </div> 
            </div>
        </nav>

        
            <br><br><br><br>
        <nav class="container col-md-4 border shadow p-3 mb-5 bg-body rounded">
            <section>
                <div><br>
                    <h5 class="text-center fw-bold"id="Data buku"> Login </h5>
                    <br>
                <form style="width: 800px;" action='harun_index.php' method='POST' enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-9">Email</div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="email" placeholder="Masukkan Alamat Email" value="" name="email">
                        </div>
                        </div><br>
                    
                        <div class="form-group col-8">Kata Sandi</div>
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" id="pass" placeholder="Kata Sandi Anda" name="pass" value="">
                        </div>
                        </div><br>

                        <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name= "tag[]" value="remember me">
                            <label class="form-check-label" for="inlineCheckbox1">Remember Me</label>
                        </div><br><br>


                    <div class="row">
                    <div class="d-grid gap-2 col-5 mx-auto">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                    </div><br>

                    <div class="text-center">
                        <p>Anda Belum Punya Akun? <a href="harun_register.php">Register</a></p>
                    </div>
                </div>
                </form>
                </div>
            </section>
            </div>
        </nav>
        <br><br>

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
</body>
</html>