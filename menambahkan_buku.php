<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menambahkan buku</title>
</head>

<body>
    <header>
        <h3>Data buku</h3>
        </heaer>
        <form action="tambahkan_buku.php" method="POST">
            <fieldset>
                <p>
                    <label for="judul_buku">Judul buku</label>
                    <input type="text" name="judul_buku" placeholder="Judul buku" />
                </p>
                <p>
                    <label for="pengarang">Pengarang</label>
                    <input type="text" name="pengarang" placeholder="Pengarang" />
                </p>
                <p>
                    <label for="penerbit">Penerbit</label>
                    <input type="text" name="penerbit" placeholder="Penerbit" />
                </p>
                <p>
                    <input type="submit" name="submit" />
                </p>
            </fieldset>
        </form>
</body>

</html>