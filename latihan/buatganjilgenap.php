<?php 
$angka = $_POST['angka'];
if ($angka%2 == 0) {
    echo "Angka $angka adalah bilangan genap";
} else {
    echo "Angka $angka adalah bilangan ganjil";
}

?>