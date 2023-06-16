<?php 
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenisKelamin = $_POST['jenisKelamin'];

echo "<h2>Hasil Form</h2> <br>";
echo "Nama : $nama <br>";
echo "Umur : $umur <br>";
echo "Jenis Kelamin : $jenisKelamin <br>";
echo "Hobi : ";
if (isset($_POST['hobi'])) {
    $i=0;
    foreach ($_POST['hobi'] as $hobi) {
        echo $_POST['hobi'];
        $i++;
    }
}
?>