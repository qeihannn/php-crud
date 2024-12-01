<?php
session_start();
include("../koneksi.php");

if (isset($_GET['pelanggan_id'])) {

    $pelanggan_id = $_GET['pelanggan_id'];

    $sql = "DELETE FROM pelanggan WHERE pelanggan_id = $pelanggan_id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data gagal dihapus!";
    }

    header('Location: index.php');
} else {

    die("Akses ditolak");
}
?>