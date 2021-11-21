<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <title>Tambah Buku</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand" href="Harun_Home.php">
            <img src="logo-ead.png" width="130" height="35" alt="">
        </a>
        <form class="form-inline">
           <a href="Harun_TambahBuku.php" class="btn btn-primary my-2 mx-2 my-sm-0">Tambah Buku</a>
        </form>
    </nav>

    <?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan!</h4>
					Masukan Foto dengan ketentuan yang tepat
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan!</h4>
					Ukuran Foto terlalu besar
				</div> 								
				<?php
			}
		}
        ?>
    
    <div class="container pt-5">
        <div class="shadow p-3 mb-5 bg-white rounded">
            <h2 style="text-align: center;">Tambah Data Buku</h2>

            <form action="Harun_TambahBuku2.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="font-weight-bold" for="judulbuku">Judul Buku</label>
                    <input type="text" class="form-control" id="judulbuku" name="judul_buku" value="" placeholder="Contoh: Pemrograman Web Bersama EAD">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="penulis">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" value="Harun_1202190320" readonly>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="tahun">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun" name="tahun_terbit" value="" placeholder="Contoh: 1990">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold" for="desc">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="deskripsi" rows="4" placeholder="Contoh: Buku ini menjelaskan tentang ..."></textarea>
                </div>

                <div class="form-group">
                    <label for="" class="font-weight-bold mr-3">Bahasa</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bahasa" id="inlineRadio1" value="Indonesia">
                        <label class="form-check-label" for="inlineRadio1">Indonesia</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bahasa" id="inlineRadio2" value="Lainnya">
                        <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="font-weight-bold mr-3">Tag</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox1" value="Pemrograman">
                        <label class="form-check-label" for="inlineCheckBox1">Pemrograman</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox2" value="Website">
                        <label class="form-check-label" for="inlineCheckBox2">Website</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox3" value="Java">
                        <label class="form-check-label" for="inlineCheckBox3">Java</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox4" value="OOP">
                        <label class="form-check-label" for="inlineCheckBox4">OOP</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox5" value="MVC">
                        <label class="form-check-label" for="inlineCheckBox5">MVC</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox6" value="Kalkulus">
                        <label class="form-check-label" for="inlineCheckBox6">Kalkulus</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox7" value="Lainnya">
                        <label class="form-check-label" for="inlineCheckBox7">Lainnya</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="cover" id="customFile">
                            <label class="custom-file-label text-left" for="customFile">.................. No File Selected.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary w-50">+TAMBAH</button>
                </div>
                
            </form>
        </div>
    </div>

    <div class="m-5">
            <div class="container text-center bg-light">
                <img src="logo-ead.png" width="130" height="35" alt="">
                <h3 class="font-weight-bold">Perpustakaan EAD</h3>
                <footer> 
                    &copy; Harun-1202190320
                </footer>
            </div>
        </div>

</body>
</html>