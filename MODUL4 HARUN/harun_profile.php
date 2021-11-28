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
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hasrinaldi Hasniman Harun
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="harun_profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="harun_login.php">Logout</a></li>
                    </ul> 
                    </li>
                </ul>
                </div>
            </div>
        </nav> <br><br><br>
        <nav class="container col-md-8 border shadow p-3 mb-5 bg-body rounded">
                <section>
                    <div><br>
                        <h5 class="text-center fw-bold"id="Data buku"> Profile </h5>
                        <br>
                    <form style="width: 800px; margin: auto;" action='harun_index.php' method='POST' enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-5" >Email</div>
                            <div class="form-group  col-md-12">
                                <input type="email" class="form-control" id="nama" placeholder="" name="nama" value="hasrinaldihaznim22@gmail.com" readonly>
                            </div>
                            </div><br>
                        
                            <div class="form-group col-5">Nama</div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="email" placeholder="Masukkan Nama Lengkap" value="Hasrinaldi Hasniman Harun" name="email">
                            </div>
                            </div><br>

                            <div class="form-group col-5">Nomor Handphone</div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="noHP" placeholder="Masukkan Nomor Handphone" name="noHP" value="+62 882-1898-6735">
                            </div>
                            </div><br>

                            <tr></tr>
                        
                            <div class="form-group col-5">Kata Sandi</div>
                            <div class="form-group col-md-12">
                                <input type="password" class="form-control" id="pass" placeholder="Kata Sandi Anda" name="pass" value="">
                            </div>
                            </div><br>

                            <div class="form-group col-5">Konfirmasi Kata Sandi</div>
                            <div class="form-group col-md-12">
                                <input type="password" class="form-control" id="confPass" placeholder="Konfirmasi Kata Sandi Anda" name="confPass" value="">
                            </div>
                            </div><br>

                            <div class="form-group col-5">Warna Navbar</div>
                            <div class="form-group col-md-12">
                                <input type="password" class="form-control" id="confPass" placeholder="Kata Sandi Anda" name="confPass" value="">
                            </div>
                        
                        <br><br>

                        <div class="row">
                        <div class="d-grid gap-2 col-8 mx-auto">
                            <button class="btn btn-warning" type="submit">Cancel</button>
                        </div>
                        </div>
                        </div>
                    </div>
                    </form>
                    <div class="d-grid gap-2 col-8 mx-auto">
                        <button class="btn btn-primary" action="harun_index.php">Simpan</button>
                    </div>
                    </div>
                </section>
                </div>
            </nav>
</body>
</html>
