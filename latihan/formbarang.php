<!DOCTYPE html>
<html>
    <head>
        <title>Form Barang</title>
    </head>
    <body>
        <form action="billformbarang.php" method="post">
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="nama_barang"></td>
                </tr>
                <tr>
                    <td>Harga Satuan Barang</td>
                    <td>:</td>
                    <td><input type="text" name="harga_barang"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Hitung">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>