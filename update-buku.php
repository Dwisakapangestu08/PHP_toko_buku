<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id     = $_POST['id'];
$judul         = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE buku SET judul_buku = '$judul', pengarang = '$pengarang' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: toko_buku.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>