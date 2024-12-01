<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h3>Tambah Buku</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Judul buku </td>
                <td><input type="text" name="judulBuku" required></td>
            </tr>
            <tr>
                <td>penulis</td>
                <td><input type="text" name="penulis" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" required></td>
            </tr>
           </td>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>