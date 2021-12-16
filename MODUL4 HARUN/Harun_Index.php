<?php
session_start();
$conn = mysqli_connect("localhost","root","","wad_modul4");

$email = $SESSION["email"];
$query = "SELECT * FROM users WHERE email = '$email'";

$select = mysqli_query($conn, $query);

$display = mysqli_fetch_assoc($select);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link url="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link url="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <title>Harun_Index</title>
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
                        <a class="dropdown-item" href="Harun_Profile.php">Profile</a>
                        <a class="dropdown-item" href="Harun_Logout.php">Logout</a>
                    </div>
                </li>

            </div>
        </div>
    </nav>


    <div class="container pt-2 pb-5" style="width: 65rem;">
        <div class="card">
            <div class="text-center pt-5 pb-5" style="background-color: #42f58a">
                <h3>EAD Travel</h3>
            </div>

            <div class="card-group mt-2">
                <div class="card">
                    <img src="liverpool.jpg" class="card-img-top" alt="..." style="height:200px">
                    <div class="card-body">
                        <h5 class="card-title">Liverpool, Inggris</h5>
                        <p class="card-text">Liverpool adalah sebuah kota dan distrik metropolitan di Merseyside, Inggris. Liverpool terletak di sebelah tebing timur Muara 
                        Sungai Mersey di bagian barat laut Inggris. di kota ini pun, terdapat Stadion Anfield. Anfield adalah nama stadion yang terletak di kota Liverpool Inggris, 
                        yang memiliki kapasitas tempat duduk sebanyak 54,074, membuat stadion ini menjadi stadion terbesar ketujuh di Inggris. Stadion ini merupakan kandang bagi 
                        klub sepak bola Liverpool F.C. sejak klub didirikan pada tahun 1892. Stadion ini awalnya merupakan kandang dari klub Everton F.C. dari tahun 1884 hingga 
                        1892 sebelum Everton pindah ke stadion Goodison Park setelah berselisih dengan pemilik klub.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Rp. 19.999.999</b></li>
                            <li class="list-group-item text-center">
                                <a data-bs-toggle="modal" href="#tempat1" class="btn btn-primary btn-block">Pesan Tiket</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <img src="tokyo.jpg" class="card-img-top" alt="..." style="height:200px">
                    <div class="card-body">
                        <h5 class="card-title">Tokyo, Jepang</h5>
                        <p class="card-text">Tokyo adalah salah satu dari 47 prefektur Jepang yang menjadi ibu kota Jepang sejak 1869. Hingga 2018, Tokyo Raya menempati peringkat 
                        pertama sebagai wilayah metropolitan terpadat di dunia. Sejumlah museum terletak di Taman Ueno: Museum Nasional Tokyo, Museum Nasional Alam dan Sains, Museum 
                        Shitamachi, dan Museum Nasional Seni Barat. Ada juga karya seni dan patung di beberapa tempat di taman. Ada juga kebun binatang di taman, dan taman adalah 
                        tujuan populer untuk melihat bunga sakura.</p>
                        <br>
                        <br>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Rp. 14.999.999</b></li>
                            <li class="list-group-item text-center">
                                <a data-bs-toggle="modal" href="#tempat2" class="btn btn-primary btn-block">Pesan Tiket</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <img src="raja.jpg" class="card-img-top" alt="..." style="height:200px">
                    <div class="card-body">
                        <h5 class="card-title">Raja Ampat, Papua Barat</h5>
                        <p class="card-text">Raja Ampat adalah salah satu tempat di provinsi Papua Barat, Indonesia. tempat ini terletak di Waisai. tempat ini memiliki 610 
                        pulau, termasuk kepulauan Raja Ampat. Empat di antaranya, yakni Pulau Misool, Salawati, Batanta dan Waigeo, merupakan pulau-pulau besar. Dari seluruh pulau 
                        hanya 35 pulau yang berpenghuni sedangkan pulau lainnya tidak berpenghuni dan sebagian besar belum memiliki nama.
                        </p>
                        <br>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Rp. 4.999.999</b></li>
                            <li class="list-group-item text-center">
                                <a data-bs-toggle="modal" href="#tempat3" class="btn btn-primary btn-block">Pesan Tiket</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



        </div>
    </div>



    <div class="Liverpool">
      <div class="modal fade" id="tempat1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="form">
                <form action="Harun_Bookings.php" method="POST">
                  <div class="modal-body">
                    <div class="form-group my-2">
                      <input type="text" value="<?php echo $display["id"]; ?>" hidden name="id" id="id">
                      <input type="text" value="Anfield" hidden name="namatempat" id="namatempat">
                      <input type="text" value="Liverpool" hidden name="lokasi" id="lokasi">
                      <input type="text" value="19999999" hidden name="harga" id="harga">
                        <label class="title" for="tgl">Tanggal Perjalanan</label>
                        <input name="tgl" id="tgl"  class="form-control" type="date">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button name="submit" id="submit" type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </div>
    <div class="Tokyo">
      <div class="modal fade" id="tempat2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="form">
                <form action="Harun_Bookings.php" method="POST">
                  <div class="modal-body">
                    <div class="form-group my-2">
                      <input type="text" value="<?php echo $display["id"]; ?>" hidden name="id" id="id">
                      <input type="text" value="Kabukicho" hidden name="namatempat" id="namatempat">
                      <input type="text" value="Tokyo" hidden name="lokasi" id="lokasi">
                      <input type="text" value="14999999" hidden name="harga" id="harga">
                        <label class="title" for="tgl">Tanggal Perjalanan</label>
                        <input name="tgl" id="tgl"  class="form-control" type="date">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button name="submit" id="submit" type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </div>
    <div class="Raja Ampat">
      <div class="modal fade" id="tempat3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="form">
                <form action="Harun_Bookings.php" method="POST">
                  <div class="modal-body">
                    <div class="form-group my-2">
                      <input type="text" value="<?php echo $display["id"]; ?>" hidden name="id" id="id">
                      <input type="text" value="Raja Ampat" hidden name="namatempat" id="namatempat">
                      <input type="text" value="Papua Barat" hidden name="lokasi" id="lokasi">
                      <input type="text" value="4999999" hidden name="harga" id="harga">
                        <label class="title" for="tgl">Tanggal Perjalanan</label>
                        <input name="tgl" id="tgl"  class="form-control" type="date">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button name="submit" id="submit" type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
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