<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <title>Detail Buku</title>
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

    <div class="container pt-5">
        <?php
        include 'Harun_Koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select id_buku, judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa from buku_table where id_buku='$id'");
        $d = mysqli_fetch_array($data);

        $dataTag = explode(",",$d['tag']);
        ?>
        <div class="shadow p-3 mb-5 bg-white rounded">
            <h3 class="text-center">Detail Buku</h3>
            <center>
                <img src="cover/<?=$d['gambar'];?>" width="533" height="800" alt="">
            </center>
            <hr>
            <div class="form-group mx-3">
                <label class="font-weight-bold">Judul :</label>
                <p><?=$d['judul_buku'];?></p>
            </div>

            <div class="form-group mx-3">
                <label class="font-weight-bold">Penulis :</label>
                <p><?=$d['penulis_buku'];?></p>
            </div>

            <div class="form-group mx-3">
                <label class="font-weight-bold">Tahun Terbit :</label>
                <p><?=$d['tahun_terbit'];?></p>
            </div>

            <div class="form-group mx-3">
                <label class="font-weight-bold">Deskripsi :</label>
                <p><?=$d['deskripsi'];?></p>
            </div>

            <div class="form-group mx-3">
                <label class="font-weight-bold">Bahasa :</label>
                <p><?=$d['bahasa'];?></p>
            </div>

            <div class="form-group mx-3">
                <label class="font-weight-bold">Tag :</label>
                <p><?=$d['tag'];?></p>
            </div>

            <div class="form-row mx-3">
                <div class="col">
                    <a href="#" type="button" data-toggle="modal" data-target="#myModal<?=$d['id_buku'];?>" class="btn btn-primary btn-block">Sunting</a>
                </div>

                <div class="col">
                    <a href="#" type="button" data-toggle="modal" data-target="#myModalHapus<?=$d['id_buku'];?>" class="btn btn-danger btn-block">Hapus</a>
                </div>
            </div>

        </div>

        <div class="modal fade bd-example-modal-lg" id="myModal<?=$d['id_buku'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Sunting</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action = "AksiUpdateBuku.php">
                            <div class="form-group">
                                <label for="judulbuku" class="font-weight-bold">Judul Buku</label>
                                <input type="hidden" name="id_buku" value="<?php echo $d['id_buku']; ?>">
                                <input type="text" class="form-control" id="judulbuku" name="judul_buku" value="<?=$d['judul_buku'];?>">
                            </div>
                            <div class="form-group">
                                <label for="penulis" class="font-weight-bold">Penulis</label>
                                <input type="text" class="form-control" id="penulis" name="penulis_buku" value="<?=$d['penulis_buku'];?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="tahun" class="font-weight-bold">Tahun Terbit</label>
                                <input type="number" class="form-control" id="tahun" name="tahun_terbit" value="<?=$d['tahun_terbit'];?>">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="desc">Deskripsi</label>
                                <textarea class="form-control" id="desc" name="deskripsi" rows="4"><?=$d['deskripsi'];?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="font-weight-bold mx-2">Bahasa</label>
                                <div class="form-check form-check-inline mx-2">
                                    <input class="form-check-input" type="radio" name="bahasa" id="inlineRadio1" value="Indonesia" <?php if ($d['bahasa'] == 'Indonesia') echo "checked='checked'"; ?>>
                                    <label class="form-check-label" for="inlineRadio1">Indonesia</label>
                                </div>
                                <div class="form-check form-check-inline mx-2">
                                    <input class="form-check-input" type="radio" name="bahasa" id="inlineRadio2" value="Lainnya" <?php if ($d['bahasa'] == 'Lainnya') echo "checked='checked'"; ?>>
                                    <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="font-weight-bold mr-3">Tag</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox1" value="Pemrograman" <?php if (in_array("Pemrograman", $dataTag)) echo "checked"; ?>>
                                    <label class="form-check-label" for="inlineCheckBox1">Pemrograman</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox2" value="Website" <?php if (in_array("Website", $dataTag)) echo "checked"; ?>>
                                    <label class="form-check-label" for="inlineCheckBox2">Website</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox3" value="Java" <?php if (in_array("Java", $dataTag)) echo "checked"; ?>>
                                    <label class="form-check-label" for="inlineCheckBox3">Java</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox4" value="OOP" <?php if (in_array("OOP", $dataTag)) echo "checked"; ?>>
                                    <label class="form-check-label" for="inlineCheckBox4">OOP</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox5" value="MVC" <?php if (in_array("MVC", $dataTag)) echo "checked"; ?>>
                                    <label class="form-check-label" for="inlineCheckBox5">MVC</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox6" value="Kalkulus" <?php if (in_array("Kalkulus", $dataTag)) echo "checked"; ?>>
                                    <label class="form-check-label" for="inlineCheckBox6">Kalkulus</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="tag[]" id="inlineCheckBox7" value="Lainnya" <?php if (in_array("Lainnya", $dataTag)) echo "checked"; ?>>
                                    <label class="form-check-label" for="inlineCheckBox7">Lainnya</label>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>                        
                    </div>
                    </form>
                </div>
            </div>
            
        </div>

        <div class="modal fade bd-example-modal-lg" id="myModalHapus<?=$d['id_buku'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p class="font-weight-bold">Apakah anda yakin ingin menghapus buku ini?</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Batal</button>
                        <a href="Harun_DeleteBuku.php?id=<?php echo $d['id_buku']; ?>" class="btn btn-danger btn-block">Hapus</a>
                    </div>
                    
                </div>
            </div>
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
        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>