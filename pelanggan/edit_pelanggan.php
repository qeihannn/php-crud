<?php

include("../koneksi.php");

$pelanggan_id = $_GET['pelanggan_id'];

$query = $db->query("SELECT * FROM pelanggan WHERE pelanggan_id = '$pelanggan_id'");
$pelanggan = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit pelanggan</title>
</head>
<body>
    <h3>Edit Data</h3>
    <form action="proses_edit.php" method="POST">
    <input type="hidden" name="pelanggan_id" value="<?php echo $pelanggan['pelanggan_id']; ?>">
    <table border="0">
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" value="<?php echo $pelanggan['nama']; ?>" required>
</td>
</tr>
<tr>
            <td>Email</td>
            <td>
                <input type="text" name="email" value="<?php echo $pelanggan['email']; ?>" required>
</td>
</tr>
</table>
<button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>
