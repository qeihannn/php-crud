<?php

session_start(); 
include("../koneksi.php");

if(isset($_POST['simpan'])){
$judulBuku = $_POST['judulBuku'];
$penulis = $_POST['penulis'];
$harga = $_POST['harga'];
$sql ="INSERT INTO buku
(judulBuku, penulis, harga)
VALUES ('$judulBuku', '$penulis', '$harga')";
$query = mysqli_query($db, $sql);

if ($query) {
    $_SESSION['notifikasi'] = "Data buku berhasil ditambahkan!";
} else{
    $_SESSION['notifikasi'] = "Data buku gagal ditambahkan!";
}
header('Location: index.php');
} else{
    die("Akses ditolak...");
}
?>