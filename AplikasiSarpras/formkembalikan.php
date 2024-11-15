<?php
include "konek.php";

// Fetch data based on ID from the database
$tampil = mysqli_query($konek, "SELECT * FROM tb_sarpras WHERE ID = '$_GET[ID]'");
$data = mysqli_fetch_array($tampil);
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
    <title>Pengembalian</title>
</head>
<body>
    <form method="POST" name="pengembalian">
        <div class="col-md-6 mx-auto">
            <h2 class="text-center">Pengembalian</h2>
            <div class="col-md mx-auto"></div>
            <div class="mb-2">
                <label for="Pengembalian">Tanggal Pengembalian</label>
                <input type="date" required name="TanggalPengembalian" class="form-control">
            </div>
            <div class="d-grid gap-2 col-md-6 mx-auto">
                <button class="btn btn-primary" name="btkembalikan" type="submit">Simpan</button>
                <a href="pengembalian.php">
                    <div class="d-grid gap-2 col-md-6 mx-auto">
                        <button class="btn btn-danger" type="button">Batal</button>
                    </div>
                </a>
            </div>
        </div>
    </form>
</body>
</html>

<?php
include "konek.php";

if (isset($_POST['btkembalikan'])) {
    $TanggalPengembalian = $_POST['TanggalPengembalian']; // Get the input data
    $ID = $_GET['ID']; 

    
    $ubah = mysqli_query($konek, "UPDATE tb_sarpras SET `TanggalPengembalian` = '$TanggalPengembalian' WHERE ID = '$ID'");

    if ($ubah) {
        echo "<script> alert('Pengembalian berhasil');
        document.location='pengembalian.php';
        </script>";
    } else {
        echo "<script> alert('Pengembalian Gagal');
        document.location='pengembalian.php';
        </script>";
    }
}
?>
