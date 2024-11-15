<?php 
include "konek.php";
if (isset($_POST['btnsimpan'])) {
    $simpan = mysqli_query($konek, "INSERT INTO tb_sarpras(Nama, Rombel, Barang, Jumlah, TanggalPeminjaman, TanggalPengembalian) VALUES
    ('$_POST[Nama]','$_POST[Rombel]','$_POST[Barang]','$_POST[Jumlah]','$_POST[TanggalPeminjaman]','$$_POST[Tanggalpengembalian]')");

    if ($simpan){
        echo "<script> alert ('Berhasil Meminjam') </script>";
        echo "<script> window.location.href='input.php'";
    }else{
        echo "<script> alert ('Gagal Meminjam') </script>";
        echo "<script> window.location.href='input.php'";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>p</title>
    <link rel="stylesheet" href="infus.css">
</head>
<body> 
     <h3 class="text-center">Sarpras SMK AK Nusa Bangsa</h3>
     <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="menu.php">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a class="nav-link active" aria-current="page" href="input.php">Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pengembalian.php">Pengembalian</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
    <div class="container">
      
        <form  method="post" name="form1">
            <div class="col-md-mx-auto">
                <div class="mb-2">
                    <label for="Nama">Nama Lengkap</label>
                    <input type="text" required name="Nama" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="Nama">Kelas</label>
                    <input type="text" required name="Rombel" class="form-control">
                </div>
                <div cl ass="mb-2">
                    <label for="Nama">Barang</label>
                    <input type="text" required name="Barang" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="Nama">Jumlah</label>
                    <select name="Jumlah" id="nama" class="form-control">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                 </select>
                </div>
                <div class="mb-2">
                   
                </div>
                <div class="mb-2">
                    <label for="Nama">Tanggal peminjaman</label>
                    <input type="date" required name="Tanggal" class="form-control">
                </div>
                <button class="btn btn-primary" name="btnsimpan" type="submit">Simpan</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>