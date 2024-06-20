<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Pendaftaran Mahasiswa Baru</title>
</head>

<body>
    <script src="https://kit.fontawesome.com/a745086211.js" crossorigin="anonymous"></script>
    <div class="container">
        <h2 class="text-center">CRUD TAMBAH DATA BARANG</h2>
        <br>
        <a href="index.php"><button class="btn btn-secondary">KEMBALI</button></a>
        <br>
        <br>
        <h3>TAMBAH DATA BARANG</h3>
        <form method="post" action="tambah_aksi.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Merek :</label>
                <input type="text" name="nama_merek" class="form-control" id="exampleFormControlInput1"
                    placeholder="EpsonL3110">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Warna : </label>
                <input type="text" name="warna" class="form-control" id="exampleFormControlInput1"
                    placeholder="Biru, Merah, Kuning">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jumlah : </label>
                <input type="number" name="jumlah" class="form-control" id="exampleFormControlInput1"
                    placeholder="1 , 2 , 3">
            </div>
            <button type="submit" class="btn btn-primary">TAMBAH DATA</button>
        </form>
    </div>
</body>

</html>