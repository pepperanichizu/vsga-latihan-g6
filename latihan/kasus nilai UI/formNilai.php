<?php include 'header.php'; ?>

<br>
<div class="container">
    <div class="card text-bg-light">
        <div class="card-header"><h2>Form Nilai</h2></div>
        <div class="card-body">
            <form action="hasilHitungNilai.php" method="post">
                <div class="mb-3">
                    <label for="nilaiPraktek" class="form-label">Nilai Praktek</label>
                    <input type="number" name="nilaiPraktek" class="form-control" id="nilaiPraktek">                    
                <div class="mb-3">
                    <label for="nilaiPg" class="form-label">Nilai PG</label>
                    <input type="number" name="nilaiPg" class="form-control" id="nilaiPg">
                </div>
                <div class="mb-3">
                    <label for="nilaiSikap" class="form-label">Nilai Sikap</label>
                    <input type="number" name="nilaiSikap" class="form-control" id="nilaiSikap">
                </div>
                <div class="mb-3">
                    <label for="nilaiKehadiran" class="form-label">Nilai Kehadiran</label>
                    <input type="number" name="nilaiKehadiran" class="form-control" id="nilaiKehadiran">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </form>    
        </div>
    </div>
</div>