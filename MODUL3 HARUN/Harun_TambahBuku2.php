<?php
    include 'harun_koneksi.php';

    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $deskripsi = $_POST['deskripsi'];
    $bahasa = $_POST['bahasa'];
    $tag = implode(",", $_POST['tag']);

    $rand = rand();
    $ekstensi = array('png','jpg','jpeg');
    $filename = $_FILES['cover']['name'];
    $ukuran = $_FILES['cover']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext, $ekstensi)){
        header("location:Harun_TambahBuku.php?alert=gagal_ekstensi");
    }

    else {
        if ($ukuran < 1044070) {
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['cover']['tmp_name'], 'cover/'.$rand.'_'.$filename);
            mysqli_query($koneksi, "INSERT INTO buku_table VALUES ('', '$judul_buku', '$penulis', '$tahun_terbit', '$deskripsi', '$xx', '$tag', '$bahasa')");
            header("location:Harun_Home.php?alert=berhasil");
        }
        else {
            header("location:index.php?alert=gagal_ukuran");
        }
    }
?>