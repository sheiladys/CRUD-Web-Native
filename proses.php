<?php

include 'koneksi.php';

if ($_GET['id'] == 'tambah') {
    $nim = $_POST['nim'];
    $uname = $_POST['username'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jur = $_POST['jurusan'];


    $query = "INSERT INTO biodata VALUES('$nim','$uname','$nama','$alamat','$jur')";
    $hasil = mysqli_query($conn,$query);

    echo '<script>alert("Data berhasil disimpan");window.location="data.php"</script>';


} 

if ($_GET['id'] == 'edit') {
    $nim = $_GET['nim'];
    $uname = $_POST['username'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jur = $_POST['jurusan'];

    $query = "UPDATE biodata SET username='$uname', nama_lengkap='$nama', alamat='$alamat', jurusan='$jur' WHERE nim='$nim'";
    $hasil = mysqli_query($conn,$query);

    echo '<script>alert("Data berhasil diedit");window.location="data.php"</script>';
}

if ($_GET['id'] == 'hapus') {
    $nim = $_GET['nim'];

    $query = "DELETE FROM biodata WHERE nim='$nim'";
    $hasil = mysqli_query($conn,$query);

    echo '<script>alert("Data berhasil dihapus");window.location="data.php"</script>';

}

?>