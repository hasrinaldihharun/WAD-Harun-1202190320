<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <body style="background:seashell">
        <nav class="navbar navbar-expand-lg navbar-light" style= "background-color:lightskyblue;">
            <div class= "container">
                <a class="navbar-brand fw-bold" href="harun_index.php"> EAD Travel</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup"></div>
                <?php
                include 'harun_config.php';
                $select = "SELECT * FROM users";
                $selects = mysqli_query($conn, $select);
                $row = mysqli_num_rows($selects);

                if ($row > 0) {
                    ?>
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
                    <?php } 

            else{ ?>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup"></div>
                <a class="nav-link active" style="color: black" aria-current="page" href="harun_register.php"> Register</a>
                <a class="nav-link active" style="color: black" href="harun_login.php">Login</a>
                <?php } ?>
            </div>
            </div>
        </nav>

        <?php
        if ($row > 0) {
            ?>
            <nav>
            <div class="alert alert-success" role="alert">
                Berhasil Login
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </nav>
            <?php } 

            else{ ?>
            <nav>
                <div class="alert alert-danger" role="alert">
                    Gagal Login
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </nav>
                <?php } ?>

        <nav class="container">
            <div class="row">
            <div class="container-fluid content-container col-md-9" style="background-color: rgb(136, 206, 179);">
                <div class="row">
                    <div class="col text-center">
                        <br><br>
                        <h3 class="fw-bold">EAD Travel</h3>
                        <br><br>
                    </div>
                </div>
            </div>
            </div><br><br>
        
            <div class="row" action='harun_bookings.php' method='POST'>
            <div class="col-md-4">
                <div class="bg-white border" style="width: auto"> 
                <img src="liverpool.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-left">
                    <b>Liverpool, Inggris</b></h5>
                    <p class="card-text text-left">Liverpool adalah sebuah kota dan distrik metropolitan di Merseyside, Inggris. Liverpool terletak di sebelah tebing timur Muara 
                        Sungai Mersey di bagian barat laut Inggris. di kota ini pun, terdapat Stadion Anfield. Anfield adalah nama stadion yang terletak di kota Liverpool Inggris, 
                        yang memiliki kapasitas tempat duduk sebanyak 54,074, membuat stadion ini menjadi stadion terbesar ketujuh di Inggris. Stadion ini merupakan kandang bagi 
                        klub sepak bola Liverpool F.C. sejak klub didirikan pada tahun 1892. Stadion ini awalnya merupakan kandang dari klub Everton F.C. dari tahun 1884 hingga 
                        1892 sebelum Everton pindah ke stadion Goodison Park setelah berselisih dengan pemilik klub.
                    </p>
                    <p class="text-left fw-bold">Rp. 19.999.999,</p>
                    <div class="card-footer d-grid gap-2">
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tanggal">Pesan Tiket</button>
                    </div>
                </div>
            </div>
            </div> 

            <div class="col-md-4">
            <div class="bg-white border" style="width: auto">
                <img src="tokyo.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-left">
                    <b>Tokyo, Jepang</b></h5>
                    <p class="card-text text-left">Tokyo adalah salah satu dari 47 prefektur Jepang yang menjadi ibu kota Jepang sejak 1869. Hingga 2018, Tokyo Raya menempati peringkat 
                        pertama sebagai wilayah metropolitan terpadat di dunia. Sejumlah museum terletak di Taman Ueno: Museum Nasional Tokyo, Museum Nasional Alam dan Sains, Museum 
                        Shitamachi, dan Museum Nasional Seni Barat. Ada juga karya seni dan patung di beberapa tempat di taman. Ada juga kebun binatang di taman, dan taman adalah 
                        tujuan populer untuk melihat bunga sakura.</p>
                    <p class="text-left fw-bold">Rp. 14.999.999</p>
                    <div class="card-footer d-grid gap-2">                    
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tanggal">Pesan Tiket</button>
                    </div>
                </div>
            </div>
            </div>  

            <div class="col-md-4">
            <div class="bg-white border" style="width: auto">
                <img src="raja.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-left">
                    <b>Raja Ampat, Papua Barat</b></h5>
                    <p class="card-text text-left">Raja Ampat adalah salah satu tempat di provinsi Papua Barat, Indonesia. tempat ini terletak di Waisai. tempat ini memiliki 610 
                        pulau, termasuk kepulauan Raja Ampat. Empat di antaranya, yakni Pulau Misool, Salawati, Batanta dan Waigeo, merupakan pulau-pulau besar. Dari seluruh pulau 
                        hanya 35 pulau yang berpenghuni sedangkan pulau lainnya tidak berpenghuni dan sebagian besar belum memiliki nama.</p>
                    <p class="text-left fw-bold">Rp. 4.999.999</p>
                    <div class="card-footer d-grid gap-2">
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tanggal">Pesan Tiket</button>
                    </div>
                </div>
            </div>
            </div>

            <div class="modal fade" id="tanggal" tabindex="-1" aria-labelledby="tanggal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-body">
                    <div class = "container">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="inputNama"> Tanggal Perjalanan </label>
                            <input type="date" class="form-control" id="checkin" name="CheckIn">
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Tambahkan</button>
                    </div>
                </div>
                </div>
            </div>
        
        </nav>
        <br><br><br><br>
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
                    <p> Nama : Harinaldi Hasniman Harun</p>
                    <p> Nim : 1202190320</p>
                </div>
                </div>
            </div>
            </div>
                
</body>
</html>