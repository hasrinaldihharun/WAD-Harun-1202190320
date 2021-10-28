<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Book</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" collapse navbar-collapse justify-content-center">
      <ul class="navbar-nav ">

        <li class="nav-item">
          <a class=" nav-link" href="MODUL2 HARUN HOME.php"> Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class=" nav-link" href="MODUL2 HARUN BOOK.php"> Booking <span class="sr-only">(current)</span></a>
        </li>

      </ul>
    </div>
  </nav>

  <nav class="container">
    <div class="mt-3">
      <nav class="bg-dark">
        <h6 style="text-align: center; color:white">Reserve your venue now!</h6>
      </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <div class="mt-5">

        <form action="MODUL2 HARUN MYBOOKING.php" method="get">
          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="inputNama">Name</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="harun_1202190320">
             </div>
            </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="inputNama"> Event Date </label>
                <input type="date" class="form-control" id="validationCustom01" name="CheckIn">
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="inputNama">Duration (hours)</label>
            <select class="custom-select" name=" ">
              <option selected> Choose... </option>
              <option>1 hours</option>
              <option>2 hours</option>
              <option>3 hours</option>
              <option>4 hours</option>
              <option>5 hours</option>
              <option>6 hours</option>
              <option>7 hours</option>
            </select>    
            </div>                    
          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
              <?php
				   			if (isset($_GET['pindah'])) {
				   				$pindah =$_GET['pindah'];
				   			}else{
				   				$pindah = '';
				   			}
				   		?>
              <div class="form-group">
                <label for="inputNama">Building Type</label>
                <?php if ($pindah == '') {?>
                <select class="custom-select" name="RoomType">
                  <option selected> Choose... </option>
                  <option>Nusantara Hall</option>
                  <option>Garuda Hall</option>
                  <option>Gedung Serba Guna</option>
                </select>
                <?php  }else{ ?>
                <input type="text" class="form-control" readonly="" name="RoomType"
                  value="<?php echo($_GET['pindah']) ?>">
                <?php } ?>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="inputNama">Phone Number</label>
              <input type="type" class="form-control" id="validationCustom01" placeholder="+62xx-xxxx-xxxx">
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="inputNama">Add Service(s)</label>
              <div class="form-check form-check">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                  value="Cathering" name="AddService[]" value="Cathering ">
                <label class="form-check-label" for="inlineCheckbox1">Cathering / $700 </label>
              </div>

              <div class="form-check form-check">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Decoration"
                  name="AddService[]" value="Decoration">
                  <label class="form-check-label" for="inlineCheckbox1">Decoration / $450</label>
              </div>

              <div class="form-check form-check">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Decoration"
                  name="AddService[]" value="Decoration">
                  <label class="form-check-label" for="inlineCheckbox1">Sound System / $250</label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
              <input type="submit" name="submit" value="Book"
                class="btn btn-primary btn-lg btn-block mt-1 ">
            </div>
          </div>
        </form>
      </div>
      </div>

      <div class="col-md-6" >
        <div class="mt-5">
          <img src="Nusantara.jpg" style="width: 110%; height: 350px">
        </div>
      </div>
    </div>
  </div>

      <div class="m-5">
        <div class="container text-center bg-light">
          <footer>
            Created by: Hasrinaldi Hasniman Harun_1202190320
          </p>
        </footer>
      </div>