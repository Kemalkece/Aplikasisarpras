<?php
//pnggil koneksi database
include "konek.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Data Member</title>
    <link rel="stylesheet" href="back.css">
</head>
<body>
     <h3 class="text-center">Data Peminjaman</h3>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <table align="table responsive" class="table table-striped table-bordered table-hover">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Lengkap</th>
                <th class="text-center">Kelas</th>
                <th class="text-center">Barang</th>
                <th class="text-center">Jumlah</th>
                <th class="text-center">Tanggal Peminjaman</th>
                <th class="text-center">Tanggal Pengembalian</th>
                <th class="text-center">Keterangan</th>
            </tr>
            <?php
            $no = 1;
            $tampil = mysqli_query($konek, "SELECT * FROM tb_sarpras");
            while ($data = mysqli_fetch_array($tampil)) :
                ?>

            <tr>
                <td class="text-center"><?= $no++?></td>
                <td class="text-center"><?= $data['Nama'] ?></td>
                <td class="text-center"><?= $data['Rombel'] ?></td>
                <td class="text-center"><?= $data['Barang'] ?></td>
                <td class="text-center"><?= $data['Jumlah'] ?></td>
                <td class="text-center"><?= $data['TanggalPeminjaman'] ?></td>
                <td class="text-center"><?= $data['TanggalPengembalian'] ?></td>
                <td class="text-center">
                    <a href="formkembalikan.php?ID=<?= $data['ID'] ?>"><button class="btn btn-primary">Kembalikan</button></a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
    </div>
</body>
</html>