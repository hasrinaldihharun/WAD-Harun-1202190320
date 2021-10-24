<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Home</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" collapse navbar-collapse justify-content-center">
      <ul class="navbar-nav ">

        <li class="nav-item active">
          <a class=" nav-link" href="MODUL2 HARUN HOME.php"> Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class=" nav-link" href="MODUL2 HARUN BOOK.php"> Booking <span class="sr-only">(current)</span></a>
        </li>

      </ul>
    </div>
  </nav>

  <nav class="container">
    <div class="mt-3">
      <h4 style="text-align: center;">WELCOME TO ESD VENUE RESERVATION</h4>
    </div>
  </nav>

  <nav class="container">
    <div class="mt-3">
      <nav class="bg-dark">
        <h6 style="text-align: center; color:white">Find your best deal for your event, here!</h6>
      </nav>
    </div>

    <?php 
        $img_src = [
          "Nusantara.jpg", 
          "Garuda.jpg", 
          "GedungSG.jpg"
        ];
        ?>
  </nav>

  <nav class="container">
    <nav class="row">
      <div class="d-flex justify-content-around">
        
      <div class="col-md-4">
        <div class="bg-white border" style="width: auto"> 
        <img src=<?=$img_src[0]?> class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title text-left">
              <b>Nusantara Hall</b></h5>
            <p class="card-text text-left"> $2000 /Hour </p>
            <p class="text-left">5000 Capacity</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-success"> Free Parking</li>
              <li class="list-group-item text-success"> Full AC</li>
              <li class="list-group-item text-success"> Cleaning Service</li>
              <li class="list-group-item text-success"> Covid-19 Health Protocol</li>
            </ul>
            <div class="card-footer">
           <a href="MODUL2 HARUN BOOK.php?room=Standard" class="btn btn-primary btn-block">Book Now</a>
            </div>
          </div>
        </div>
      </div>
        
      <div class="col-md-4">
        <div class="bg-white border" style="width: auto"> 
        <img src=<?=$img_src[1]?> class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title text-left">
              <b>Garuda Hall</b></h5>
            <p class="card-text text-left"> $1000 /Hour </p>
            <p class="text-left">2000 Capacity</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-success"> Free Parking</li>
              <li class="list-group-item text-success"> Full AC</li>
              <li class="list-group-item text-danger"> Cleaning Service</li>
              <li class="list-group-item text-success"> Covid-19 Health Protocol</li>
            </ul>
            <div class="card-footer">
           <a href="MODUL2 HARUN BOOK.php?room=Standard" class="btn btn-primary btn-block">Book Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="bg-white border" style="width: auto"> 
        <img src=<?=$img_src[2]?> class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title text-left">
              <b>Gedung Serba Guna</b></h5>
            <p class="card-text text-left"> $500 /Hour </p>
            <p class="text-left">500 Capacity</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-danger"> Free Parking</li>
              <li class="list-group-item text-danger"> Full AC</li>
              <li class="list-group-item text-danger"> Cleaning Service</li>
              <li class="list-group-item text-success"> Covid-19 Health Protocol</li>
            </ul>
            <div class="card-footer">
           <a href="MODUL2 HARUN BOOK.php?room=Standard" class="btn btn-primary btn-block">Book Now</a>
            </div>
          </div>
        </div>
        </div>
      </div>
    </nav>
  </nav>


      <div class="m-5">
        <div class="container text-center bg-light">
          <footer>
            Created by: Hasrinaldi Hasniman Harun_1202190320
          </p>
        </footer>
      </div>

</body>

</html>