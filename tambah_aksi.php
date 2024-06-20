<?php
include 'koneksi.php';

function tambahData()
{
    global $koneksi;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama_merek = $_POST['nama_merek'];
        $warna = $_POST['warna'];
        $jumlah = $_POST['jumlah'];

        $query = "INSERT INTO produk VALUES ('','$nama_merek','$warna','$jumlah')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
}

tambahData();
?>