<?php
include 'koneksi.php';
session_start();

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];
$tanggalbuat = date("Y-m-d");


$id_pembuat = $_SESSION['id'];


$file = $_FILES['image']['name'];
$target_dir = "../photo/upload/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
    // Insert record
    $queryinsert = "INSERT INTO artikel (judul,isi,kategori,jml_like,jml_dislike,tgl_buat,id_pembuat,thumbnail)
                VALUES ('$judul','$isi','$kategori','0','0','$tanggalbuat','$id_pembuat','".$file."')";
    $q = $koneksi->query($queryinsert);
    if($q === TRUE){
        $message = "Berhasil Membuat artikel baru";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location:../new-artikel.php");
    }
    else{
        $message = "Gagal daftar";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo $koneksi->error;
    }
 
    // Upload file
    move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$file);

}








?>