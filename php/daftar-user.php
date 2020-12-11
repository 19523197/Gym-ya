<?php
include 'koneksi.php';

$user = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$contributor = $_POST['contributor'];

$sql = "INSERT INTO user (username, email, password, contributor) Values ('$user', '$email', '$password', '$contributor')";
$q = $koneksi->query($sql);

if($q === TRUE){
    $message = "Berhasil daftar";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:../Login-page.php");
}
else{
    $message = "Gagal daftar";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo $koneksi->error;
}
?>