<?php include 'header.php'; ?>

<br>
<div class="container">
    <div class="card text-bg-light">
        <div class="card-header"><h2>Form Anggota</h2></div>
        <div class="card-body">
            <?php include 'koneksi.php';
                $idAnggota = $_GET['id_anggota'];
                $query = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_anggota='$idAnggota'");
                $hasil = mysqli_fetch_object($query);
            ?>
            <form action="aksiUpdateAnggota.php" method="post">
                <div class="mb-3">
                    <label for="idAnggota" class="form-label">ID Anggota</label>
                    <input type="number" name="idAnggota" class="form-control" id="idAnggota" value="<?php echo $hasil->id_anggota; ?>" readonly>                    
                <div class="mb-3">
                    <label for="namaAnggota" class="form-label">Nama Anggota</label>
                    <input type="text" name="namaAnggota" class="form-control" id="namaAnggota" value="<?php echo $hasil->nama_anggota; ?>">
                </div>
                <div class="mb-3">
                    <label for="hpAnggota" class="form-label">No HP Anggota</label>
                    <input type="text" name="hpAnggota" class="form-control" id="hpAnggota" value="<?php echo $hasil->hp_anggota; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>