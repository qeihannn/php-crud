<?php 

session_start(); 
include("../koneksi.php");


if (isset($_POST['simpan'])) {

    $pelanggan_id = $_POST['pelanggan_id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

  
    $sql = "UPDATE pelanggan SET
        nama='$nama',
        email='$email'
        WHERE pelanggan_id=$pelanggan_id";

        $query = mysqli_query($db, $sql);
   
        if ($query) {
            $_SESSION['nontifikasi'] = "data pelanggan berhasil diperbarui!";
        } else {
            $_SESSION['nontifikasi'] = "Data pelanggan gagal diperbarui!";
        }


        header('Location: index.php');
    } else {
        die("akses ditolak...");
    }
    ?>