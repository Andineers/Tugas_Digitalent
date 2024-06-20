<?php
include 'koneksi.php';

// Mengambil data barang berdasarkan ID
$id = $_GET['id'];
$query = "SELECT * FROM produk WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

// Memproses aksi edit data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_merek = $_POST['nama_merek'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    $query = "UPDATE produk SET nama_merek = '$nama_merek', warna = '$warna', jumlah = '$jumlah' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>CRUD PHP dan MySQLi</title>
</head>

<body>
    <script src="https://kit.fontawesome.com/a745086211.js" crossorigin="anonymous"></script>
    <div class="container">
        <h2 class="text-center">CRUD EDIT DATA BARANG</h2>
        <br>
        <a href="index.php"><button class="btn btn-secondary">KEMBALI</button></a>
        <br>
        <br>
        <h3>EDIT DATA BARANG</h3>
        <form method="post" action="edit.php?id=<?php echo $id; ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Merek :</label>
                <input type="text" name="nama_merek" class="form-control" id="exampleFormControlInput1"
                    value="<?php echo $data['nama_merek']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Warna : </label>
                <input type="text" name="warna" class="form-control" id="exampleFormControlInput1"
                    value="<?php echo $data['warna']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jumlah : </label>
                <input type="number" name="jumlah" class="form-control" id="exampleFormControlInput1"
                    value="<?php echo $data['jumlah']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">EDIT DATA</button>
        </form>
    </div>
</body>

</html>