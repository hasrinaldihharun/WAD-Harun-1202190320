<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <title>Home</title>
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
            if($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			    }
            else if ($_GET['alert']=="delete_berhasil"){
                ?>
                <div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i>Success</h4>
					Data Berhasil Terhapus
				</div> 
                <?php
                }
        }
    ?>

    <?php
        include 'Harun_Koneksi.php';
        $data = mysqli_query($koneksi,"select id_buku, judul_buku, deskripsi, gambar from buku_table");
        if (mysqli_num_rows($data)>0) {
            ?>
            <div class="container pt-5 d-flex flex-row">
            <?php while ($d = mysqli_fetch_array($data)) {
            ?>
            <div class="card mx-3 my-5">
                    <img class="card-img-top" src="cover/<?=$d['gambar'];?>" alt="Cover Buku" >
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold"><?=$d['judul_buku']?></h5>
                        <p class="card-text"><?=$d['deskripsi']?></p>
                        <a href="Harun_DetailBuku.php?id=<?php echo $d['id_buku']; ?>" class="btn btn-primary">Tampilkan Lebih Lanjut</a>
                    </div>
            </div>
        <?php
        }
        ?>
        </div> 
        <?php
    }
        else {
            ?>
            <div class="container-fluid pt-5">
                <h3 class="text-center mt-5 mb-3">Belum ada Buku</h3>
                <hr class="mt-2 text-center">
                <h5 class="text-center mt-3 mb-5">Silahkan Menambahkan Buku</h5>
            </div> 
    <?php
        }
        ?>

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