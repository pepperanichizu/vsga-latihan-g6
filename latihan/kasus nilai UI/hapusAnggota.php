<?php include 'koneksi.php';
    $idAnggota = $_GET['id_anggota'];

    $query = mysqli_query($koneksi, "DELETE FROM anggota WHERE id_anggota='$idAnggota'");

    header("location:tampilAnggota.php?");
?>