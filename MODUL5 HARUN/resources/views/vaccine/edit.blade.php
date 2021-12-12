<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title> Data Dokumen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
        <div class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " href="{{ route('home') }}">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active font-weight-bold" href="{{ route('vaccine.index') }}">VACCINE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('patient.index') }}">PATIENT</a>
              </li>
        </div>
  </nav>
  <br>
  <br>

  <div class="container">
    <center>
      <h1>edit Vaccine </h1>
      <br>
      <br>
    </center>
      <div class="row mt-3">
        <div class="col-md-12">
          <form action="{{route('vaccine.update',$vaccines->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('patch')
            <input type="hidden" id="id" name="id" value="{{ $vaccines->id }}" >
                <div class="form-group">
                  <label for="name">Vaccine Name </label>
                  <input type="text" class="form-control"  id="name" required name="name" value="{{ $vaccines->name }}" >
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <div class="input-group-prepend">
                  <div class="input-group-text">Rp</div>
                  <input type="text" class="form-control"  id="price" required name="price" value="{{ $vaccines->price }}" >
                  </div>
                </div>                
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control"  id="description" required name="desc" rows="5">{{ $vaccines->description }}</textarea>
                </div>                
                <div class="form-group">
                  <label for="images">Images</label>
                  <input type="file" class="form-control-file"  id="images" name="img">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
</div>

    
<footer class="footer mt-auto py-3 fixed-bottom ">
    <div class="container" style="text-align: center">
      <p class="text-muted">
        <a href="#" class="text-reset" data-toggle="modal" data-target="#Modal">Made with 💙 Hasrinaldi Hasniman Harun - 1202190320</a>
      </p>
    </div>
</footer>

<div class="modal fade" id="Modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Kesan Pesan Praktikum</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        Kesan : Menurut saya praktikum ini adalah praktikum yang paling sulit sejauh ini saya kuliah si jurusan Sistem Informasi Telkom University, namun karena adanya modul tiap minggu yang diberikan dan juga bantuan dari youtube dan para ahli, saya dapat mengerjakan tugas tugas praktikum yang diberikan walaupun beberapa modul kemarin ada yang seadanya
        <br>
        <br>
        Pesan : Untuk bang NRY atau bang Henry Augusta, abang keren dah asli, asprak yang paling santuy dan yang paling ramah ketika praktikum, baik itu audit dan debugging, sehat selalu bang semoga diberi kesuksesan
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>