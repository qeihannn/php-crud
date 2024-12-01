<?php 

session_start(); 
include("../koneksi.php");


if (isset($_POST['simpan'])) {
    $buku_id = $_POST['buku_id'];
    $judulBuku = $_POST['judulBuku'];
    $penulis = $_POST['penulis'];
    $harga = $_POST['harga'];

    
    $sql = "UPDATE buku SET
        judulBuku='$judulBuku',
        penulis='$penulis',
        harga='$harga'
        WHERE buku_id=$buku_id";

        $query = mysqli_query($db, $sql);
        
        if ($query) {
            $_SESSION['nontifikasi'] = "data buku berhasil diperbarui!";
        } else {
            $_SESSION['nontifikasi'] = "Data buku gagal diperbarui!";
        }

        
        header('Location: index.php');
    } else {
        die("akses ditolak...");
    }
    ?>