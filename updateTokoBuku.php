<!-- <?php
include("toko_buku.php");

if("!isset")
?> -->

<?php 
  
  include('koneksi.php');
  
//   $id = $_GET['id'];
  
  $query = "SELECT * FROM buku WHERE judul_buku";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit buku</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              UPDATE
            </div>
            <div class="card-body">
              <form action="updateTokoBuku.php" method="POST">
                
                <div class="form-group">
                  <label></label>
                  <input type="text" name="id" value="<?php echo $row['id'] ?>" placeholder="id" class="form-control”>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" name="judul_buku" value="<?php echo $row['judul_buku'] ?>" placeholder="Masukkan Judul Buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>Pengarang</label>
                  <textarea class="form-control" name="pengarang" placeholder="Masukkan Nama Pengarang" rows="4"><?php echo $row['pengarang'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>