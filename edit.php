<?php
    include 'koneksi.php';
    $nim = $_GET['id'];
    $query = "SELECT * FROM biodata WHERE nim ='$nim'";
    $hasil = mysqli_query($conn,$query);
    $isi = mysqli_fetch_assoc($hasil);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-5">

        <form method='post' action='proses.php?id=edit&nim=<?php echo $isi['nim'];?>'>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="<?php echo $isi['username'];?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?php echo $isi['nama_lengkap'];?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" value="<?php echo $isi['alamat'];?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jurusan" value="<?php echo $isi['jurusan'];?>">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>