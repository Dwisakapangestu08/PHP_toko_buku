<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4 class="my-3">List Buku</h4>
        <button class="btn btn-primary mb-3"><a href="menambahkan_buku.php" class="text-white text-decoration-none">Tambah Buku</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $query = "SELECT * FROM buku";
                $result = mysqli_query($connection, $query);
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['judul_buku'] ?></td>
                        <td><?= $data['pengarang'] ?></td>
                        <td><?= $data['penerbit'] ?></td>
                        <td>
                            <a href="updateTokoBuku.php?id=<?php $data['id']; ?>">Edit</a>
                            <a href="delete.php?id=<?php $data['id']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>