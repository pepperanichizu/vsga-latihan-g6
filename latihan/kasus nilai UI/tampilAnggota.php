<?php include 'header.php'; ?>

<br>
<div class="container">
    <div class="card text-bg-light">
        <div class="card-header"><h2>Data Anggota</h2></div>
        <div class="card-body">
            <table class="table">
                <a role="button" class="btn btn-primary" href="formAnggota.php">Tambah Data</a>
                <br />
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Anggota</th>
                        <th scope="col">Nama Anggota</th>
                        <th scope="col">No HP Anggota</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <?php include "koneksi.php";
                    $query = mysqli_query($koneksi, "SELECT * FROM anggota") or die(mysqli_error($koneksi)); 
                ?>
                <tbody>
                    <?php
                    $no=1;
                    foreach($query as $row){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no ?></th>
                            <td><?php echo $row['id_anggota'] ?></td>
                            <td><?php echo $row['nama_anggota'] ?></td>
                            <td><?php echo $row['hp_anggota'] ?></td>
                            <td>
                                <a href="hapusAnggota.php?id_anggota=<?php echo $row['id_anggota']; ?>" onclick="return alert('Apakah yakin ingin menghapus?')" role="button" class="btn btn-danger">Hapus</a>
                                <a href="editAnggota.php?id_anggota=<?php echo $row['id_anggota']; ?>" role="button" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>