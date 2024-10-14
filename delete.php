<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];

    $sql = "DELET FROM koneksi WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ( $query ) {
        header('Location: toko_buku.php');
    } else {
        die("gagal menghapus");
    }
} else {
    die("akses ditemukan");
}


?>