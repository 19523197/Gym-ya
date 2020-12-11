<?php
session_start();
include 'koneksi.php';

$id_user = $_SESSION['id'];
$id_artikel = $_GET['id'];

$query = "SELECT * FROM artikel where id = $id_artikel";
$result = mysqli_query($koneksi,$query);
$rows = mysqli_fetch_assoc($result);
$jml_dislike = $rows['jml_dislike'] + 1;

$querycek = "SELECT * FROM disliked_artikel WHERE user_id = $id_user AND artikel_id = $id_artikel";
$resultcek = $result = mysqli_query($koneksi,$querycek);
$cek = mysqli_num_rows($resultcek);
if($cek == 0)
{
    $query2 = "UPDATE artikel SET jml_dislike = $jml_dislike WHERE id = $id_artikel";
    $result2 = mysqli_query($koneksi,$query2);

    $query3 = "INSERT INTO disliked_artikel (user_id, artikel_id) VALUES ('$id_user','$id_artikel')";
    $result3 = mysqli_query($koneksi,$query3);

    if($result3 === TRUE){
        header("location:../user-home.php");
    }
    else{
        $message = "Gagal";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo $koneksi->error;
    }
}
else{
    $message = "Anda sudah mendislike artikel ini";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("location:../user-home.php");
}








?>