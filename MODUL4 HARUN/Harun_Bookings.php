<?php
session_start();
$conn = mysqli_connect("localhost","root","","wad_modul4");

$email = $_SESSION["email"];
$query = "SELECT * FROM users WHERE email = '$email'";

$select = mysqli_query($conn, $query);
$display = mysqli_fetch_assoc($select);
if (isset($_POST["submit"])){
    
    $id = $_POST["id"];
    $tempat = $_POST["namatempat"];
    $lokasi = $_POST["lokasi"];
    $harga = $_POST["harga"];
    $tanggal = $_POST["tgl"];
    
    $queryInsert = "INSERT INTO bookings (id, user_id, nama_tempat, lokasi, harga, tanggal) VALUES ('','$id','$tempat','$lokasi','$harga','$tanggal')";
    $tambah = mysqli_query($conn, $queryInsert);
    
    
    
    
    

    $user = $display['id'];
    $queryBooking = "SELECT * FROM bookings WHERE user_id = '$user'";

    $selectBooking = mysqli_query($conn, $queryBooking);
    $ambil = mysqli_fetch_assoc($selectBooking);

    
    
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <title>Harun_Bookings</title>
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
                        <a class="dropdown-item" href="Logout.php">Logout</a>
                    
                    </div>
                </li>

            </div>
        </div>
    </nav>


    <div class="container pt-3 pb-2" style="width: 65rem;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Tempat</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Tanggal Perjalanan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $baris = 1;
                    $hitung = mysqli_num_rows($selectBooking);
                    for ($x = 0; $x <= $hitung; $x++) {?>
                        <tr>
                            <td><?php echo $baris;?></td>
                            <td><?php echo $ambil["nama_tempat"];?></td>
                            <td><?php echo $ambil["lokasi"];?></td>
                            <td><?php echo $ambil["tanggal"];?></td>
                            <td><?php echo $ambil["harga"];?></td>
                            <td><?php echo "Hapus";?></td>
                        </tr>

                        
                    <?php $baris ++;}
                    
                ?>
            </tbody>
        </table>
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