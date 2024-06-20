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
        <h2 class="text-center"> TAMBAH SISWA</h2>
        <br>
        <a href="tambah.php"><button class="btn btn-primary">TAMBAH DATA BARANG</button></a>
        <br><br>
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>ID</th>
                        <th>Nama Merek</th>
                        <th>Warna</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from produk");
                    while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $no++; ?>
                            </td>
                            <td>
                                <?php echo $d['id']; ?>
                            </td>
                            <td>
                                <?php echo $d['nama_merek']; ?>
                            </td>
                            <td>
                                <?php echo $d['warna']; ?>
                            </td>
                            <td>
                                <?php echo $d['jumlah']; ?>
                            </td>
                            <td>
                                <a href="edit.php?id=<?php echo $d['id']; ?>"><button class="btn btn-secondary"><i
                                            class="fa-solid fa-pen-to-square"></i></button></a>
                                <a href="delete.php?id=<?php echo $d['id']; ?>"><button class="btn btn-danger"><i
                                            class="fa-solid fa-trash-can"></i></button></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>