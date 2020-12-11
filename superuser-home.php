<?php
include "php/koneksi.php";
    // mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:../index.php");
}

$query = "SELECT * FROM artikel";
$result = mysqli_query($koneksi,$query);

$querytrending = "SELECT * FROM artikel ORDER BY 'jml_like' DESC LIMIT 3";
$resulttrending = mysqli_query($koneksi,$querytrending);

    ?>

<html>
    <head>
        <link rel="stylesheet" href="css/superuser-home.css">
    </head>
    <body>
        <div id="content-container">


            <div class="topnav">
            <a href="#"><img src="photo/logo.png" alt="" style="width:100%;height:100%;"></a>
                <a class="active" href="superuser-home.php">Home</a>
                 
               
                <a href="about-us.php">About Us</a>
                <a href="profile-page.php">profile</a>
                <a href="php/logout.php">Logout</a>
                
            </div>

            
              
        <div id="right">

        
            

            <div id="profile-container">
                <header>
                    <img src="photo/profile-picture.jpg" alt="" id="profile-picture">
                    <div id="profile-name">
                    <h1><?php echo $_SESSION['username'];?></h1>
                        <h3><?php echo $_SESSION['email'];?></h3>
                    </div>
                    
                    
                </header>
                <div id="profile-action">
                    <a href="new-artikel.php"><button>Buat Artikel</button></a>
                </div>
            </div>

            <div id="trend-container">

                <div id="trend-header">
                <h1>Trending</h1>
                </div>
            <?php

            while($rowstrending=mysqli_fetch_assoc($resulttrending)){
            
            echo '<div id="trend-isi">

            <h3>
            <a href="artikel-page.php?id='.$rowstrending['id'].'">
            '.$rowstrending['judul'].'
            </a>
            </h3>

            </div>';
            }

            ?>
            </div>

        </div>



            <div id="center">
            
                
                

            <?php
                    while($rows=mysqli_fetch_assoc($result))
                    {
                        $image = $rows['thumbnail'];
                        $image_src = "photo/upload/".$image;
                        echo '<div id="new-artikel-container">
                        <table>
                            <tr>
                                <th style="width: 25%; text-align: start; padding-left: 5px;" colspan="3"><h1><a href="artikel-page.php?id='.$rows['id'].'">'.$rows['judul'].' </a></h1></th>
                                
                            </tr>
                            <tr>
                                <th style="width: auto"><div id="category-upperbody"><h4>'.$rows['kategori'].'</h4></div></th>
                                <th style="width: 20%;text-align: end;"><p><form method="POST" action="php/likeartikel.php?id='.$rows['id'].'"><input type="image" src="photo/like.jpeg" style="width: 12%; height:12%" alt=""></div>'.$rows['jml_like'].'</p></form></th>
                                <th style="width: 20%;"><p><form method="POST" action="php/dislikeartikel.php?id='.$rows['id'].'"><input type="image" src="photo/dislike.jpeg" style="width: 12%; height:12%" alt=""></div>'.$rows['jml_dislike'].'</p></form><th>
                            </tr>
                            <tr>
                                <td colspan="3" ><img src="'.$image_src.'" alt="" id="new-artikel-thumbnail"></td>
                            </tr>
                            
                        </table>
                    </div>';    
                    }
                ?>
                
                
            

        </div>   
    </body>
</html>

