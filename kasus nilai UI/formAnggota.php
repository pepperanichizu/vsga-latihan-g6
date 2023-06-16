<?php include 'header.php'; ?>

<br>
<div class="container">
    <div class="card text-bg-light">
        <div class="card-header"><h2>Form Anggota</h2></div>
        <div class="card-body">
            <form action="aksiTambahAnggota.php" method="post">
                <div class="mb-3">
                    <label for="idAnggota" class="form-label">ID Anggota</label>
                    <input type="number" name="idAnggota" class="form-control" id="idAnggota">                    
                <div class="mb-3">
                    <label for="namaAnggota" class="form-label">Nama Anggota</label>
                    <input type="text" name="namaAnggota" class="form-control" id="namaAnggota">
                </div>
                <div class="mb-3">
                    <label for="hpAnggota" class="form-label">No HP Anggota</label>
                    <input type="text" name="hpAnggota" class="form-control" id="hpAnggota">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </form>    
        </div>
    </div>
</div>