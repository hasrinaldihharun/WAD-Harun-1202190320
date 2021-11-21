<?php
    include 'Harun_Koneksi.php';

    $id = $_GET['id'];
    mysqli_query($koneksi, "delete from buku_table where id_buku='$id'");
    header("location:Harun_Home.php?alert=delete_berhasil");
?>