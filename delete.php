<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM produk WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>