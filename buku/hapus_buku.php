<?php
session_start();
include("../koneksi.php");

if (isset($_GET['buku_id'])) {

    $buku_id = $_GET['buku_id'];

    $sql = "DELETE FROM buku WHERE buku_id = $buku_id";
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