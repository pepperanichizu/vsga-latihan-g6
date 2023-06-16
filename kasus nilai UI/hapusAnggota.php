<?php include 'koneksi.php';
    $idAnggota = $_GET['id_anggota'];
    $query = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_anggota='$idAnggota'");
    $hasil = mysqli_fetch_object($query);
?>