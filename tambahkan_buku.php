<?php

include("koneksi.php");

//cek apakah tombol daftar sudah di klik atau belum?
if (isset($_POST['submit'])) {
    //ambil dari data
    $judul = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    //buat query
    $sql = 'INSERT INTO buku (judul_buku, pengarang, penerbit) VALUES ("' . $judul . '", "' . $pengarang . '", "' . $penerbit . '")';
    $query = mysqli_query($connection, $sql);

    //apakah query simpan berhasil
    if ($query) {
        //kalo berhasil alihkan ke halaman toko_buku.php dengan status sukses
        header('location: toko_buku.php');
    } else {
        //kalo gagal alihkan ke halaman toko_buku.php dengan status gagal
        header('location: toko_buku.php');
    }
} else {
    die("akses dilarang");
}
