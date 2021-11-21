<?php
    include 'Harun_Koneksi.php';

    $id = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $deskripsi = $_POST['deskripsi'];
    $bahasa = $_POST['bahasa'];
    $tag = implode(',', $_POST['tag']);
    
    $query = mysqli_query($koneksi, "UPDATE buku_table SET judul_buku='$judul_buku', penulis_buku='$penulis_buku', tahun_terbit='$tahun_terbit', deskripsi='$deskripsi', bahasa='$bahasa', tag='$tag' WHERE id_buku='$id'");
    if ($query) {
        header("location:Harun_DetailBuku.php?id=$id");
    }    
?>