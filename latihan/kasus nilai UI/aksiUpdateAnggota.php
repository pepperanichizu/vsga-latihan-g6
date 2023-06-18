<?php include 'koneksi.php';
    $idAnggota = $_POST['idAnggota'];
    $namaAnggota = $_POST['namaAnggota'];
    $hpAnggota = $_POST['hpAnggota'];

    mysqli_query($koneksi, "UPDATE anggota SET nama_anggota='$namaAnggota', hp_anggota='$hpAnggota' WHERE id_anggota='$idAnggota'");

    header("location:tampilAnggota.php");
?>