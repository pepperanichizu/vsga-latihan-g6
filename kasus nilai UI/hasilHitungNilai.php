<?php include 'header.php'; ?>

<br>
<div class="container">
    <div class="card text-bg-light">
        <div class="card-header"><h2>Hasil Hitung Nilai</h2></div>
        <div class="card-body">
           <?php 
            $nilaiPraktek = $_POST['nilaiPraktek'];
            $nilaiPg = $_POST['nilaiPg'];
            $nilaiSikap = $_POST['nilaiSikap'];
            $nilaiKehadiran = $_POST['nilaiKehadiran'];

            $rerata = ($nilaiPraktek + $nilaiPg + $nilaiSikap + $nilaiKehadiran)/4;

            echo "Nilai Praktek : $nilaiPraktek <br>";
            echo "Nilai PG : $nilaiPg <br>";
            echo "Nilai Sikap : $nilaiSikap <br>";
            echo "Nilai Kehadiran: $nilaiKehadiran <br>";
            echo "Nilai rata-rata : $rerata <br>";
           ?>
        </div>
    </div>
</div>