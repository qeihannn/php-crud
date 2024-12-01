<?php

include("../koneksi.php");

$buku_id = $_GET['buku_id'];

$query = $db->query("SELECT * FROM buku WHERE buku_id = '$buku_id'");
$buku = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Buku</title>
</head>
<body>
    <h3>Edit Data</h3>
    <form action="proses_edit.php" method="POST">
    <input type="hidden" name="buku_id" value="<?php echo $buku['buku_id']; ?>">
    <table border="0">
        <tr>
            <td>Judul Buku</td>
            <td>
                <input type="text" name="judulBuku" value="<?php echo $buku['judulBuku']; ?>" required>
</td>
</tr>
<tr>
            <td>Penulis</td>
            <td>
                <input type="text" name="penulis" value="<?php echo $buku['penulis']; ?>" required>
</td>
</tr>
<tr>
            <td>Harga</td>
            <td>
                <input type="text" name="harga" value="<?php echo $buku['harga']; ?>" required>
</td>
</tr>
</table>
<button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>
