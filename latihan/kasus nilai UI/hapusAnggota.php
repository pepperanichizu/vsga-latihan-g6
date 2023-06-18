<?php include 'koneksi.php';
    $idAnggota = $_GET['idAnggota'];

    $query = mysqli_query($koneksi, "DELETE FROM anggota WHERE id_anggota='$idAnggota'");

    header("location:tampilAnggota.php?");
?>