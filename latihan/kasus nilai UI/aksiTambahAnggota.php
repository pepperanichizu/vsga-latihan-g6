<?php include 'koneksi.php';
    $idAnggota = $_POST['idAnggota'];
    $namaAnggota = $_POST['namaAnggota'];
    $hpAnggota = $_POST['hpAnggota'];

    mysqli_query($koneksi, "INSERT INTO anggota VALUES('$idAnggota','$namaAnggota','$hpAnggota')");

    header("location:tampilAnggota.php");
?>