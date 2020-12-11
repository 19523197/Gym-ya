<?php
include 'koneksi.php';
session_start();

$idartikel = $_GET['id'];
$idbk = $_SESSION['id'];
$komentar = $_POST['komentar'];
$tanggalbuat = date("Y-m-d");

$query = "INSERT INTO komentar (isi_komen,tgl_buatkomen,id_buatkomen,id_artikel) VALUES ('$komentar','$tanggalbuat','$idbk','$idartikel')";
$q = $koneksi->query($query);
if($q === TRUE){
    $message = "Berhasil Membuat Komentar";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:../artikel-page.php?id=".$idartikel."");
}
else{
    $message = "Gagal Membuat Komentar";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo $koneksi->error;
}

?>