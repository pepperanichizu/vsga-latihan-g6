<?php 
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $jumlah = $_POST['jumlah'];
    $total = $harga_barang * $jumlah;

    echo "<h2>Nota Barang</h2>";

    echo "Nama Barang : $nama_barang <br>";
    echo "Harga Barang : Rp $harga_barang <br>";
    if ($total >= 100000) {
        $diskon = $total * 0.25;
        echo "Diskon : Rp " . number_format($diskon) . "<br>";
        $total = $total - $diskon;
    }
    elseif($total >= 50000) {
        $diskon = $total * 0.5;
        echo "Diskon : Rp " . number_format($diskon) . "<br>";
        $total = $total - $diskon;
    }
    else {
        echo "Diskon : 0 <br>";
    }

    echo "Jumlah : $jumlah <br>";
    echo "Total : Rp " . number_format($total) . "<br>"
?>