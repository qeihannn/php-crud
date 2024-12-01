<?php

session_start(); 
include("../koneksi.php");


if(isset($_POST['simpan'])){

$nama = $_POST['nama'];
$email = $_POST['email'];


$sql ="INSERT INTO pelanggan
(nama, email)
VALUES ('$nama', '$email')";


$query = mysqli_query($db, $sql);


if ($query) {
    $_SESSION['notifikasi'] = "Data pelanggan berhasil ditambahkan!";
} else{
    $_SESSION['notifikasi'] = "Data pelanggan gagal ditambahkan!";
}

header('Location: index.php');
} else{
    
    die("Akses ditolak...");
}
?>