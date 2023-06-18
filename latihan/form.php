<!DOCTYPE html>
<html>
  <head>
    <title>Belajar Membuat Form</title>
  </head>
  <body>
    <h2>Belajar Membuat Form</h2>
    <form
      action="hasilform.php"
      method="post"
    >
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input
                  type="text"
                  name="nama"
                  placeholder="Masukkan Nama"
                />
            </td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td>
                <input
                  type="text"
                  name="umur"
                  placeholder="Masukkan Umur"
                />
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenisKelamin" value="Pria" />Pria
                <br />
                <input type="radio" name="jenisKelamin" value="Wanita" />Wanita
                <br />
            </td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
                <input type="checkbox" name="hobi" value="membaca" />Membaca<br />
                <input type="checkbox" name="hobi" value="menulis" />Menulis<br />
                <input type="checkbox" name="hobi" value="menggambar" />Menggambar<br />
                <input type="checkbox" name="hobi" value="mendengarkanMusik" />Mendengarkan Musik<br />
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="kirim" />
            </td>
        </tr>
    </table>
    </form>
  </body>
</html>
