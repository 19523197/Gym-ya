<?php
include 'php/koneksi.php';
session_start();


//Buat ambil data artikel
$id = $_GET['id'];
$query = "SELECT * FROM artikel where id = $id";
$result = mysqli_query($koneksi,$query);
$rows = mysqli_fetch_assoc($result);

//Buat ambil foto di directory
$image = $rows['thumbnail'];
$image_src = "photo/upload/".$image;

//Buat ambil nama username yang buat artikel
$query2 = "SELECT * FROM user where id = $rows[id_pembuat]";
$result2 = mysqli_query($koneksi,$query2);
$rows2 = mysqli_fetch_assoc($result2);

//Buat ambil data komentar artikel
$query3 = "SELECT * FROM komentar where id_artikel = $id";
$result3 = mysqli_query($koneksi,$query3);

$querytrending = "SELECT * FROM artikel ORDER BY 'jml_like' DESC LIMIT 3";
$resulttrending = mysqli_query($koneksi,$querytrending);


?>

<html>
    <head>
        <link rel="stylesheet" href="css/artikel-page.css">
    </head>
    <body>
        <div id="content-container">


            <div class="topnav">
            <a href="#"><img src="photo/logo.png" alt="" style="width:100%;height:100%;"></a>
                <a href="<?php if($_SESSION['contributor'] == 1){
                    echo "superuser-home.php";
                }else{
                    echo "user-home.php";}?>">Home</a>
                 
                
                <a href="about-us.php">About Us</a>
                <a href="superuser-home.php">Profile</a>
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
                    <?php 
                    if($_SESSION['contributor'] == 1){
                        echo '<a href="new-artikel.php"><button>Buat Artikel</button></a>';
                    };
                    ?>
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
            
                
                <div id="new-artikel-container">
                    <table>
                        <tr>
                            <td style="width: 100%; text-align: start; padding-left: 5px;"><h1><?php echo $rows["judul"];?></h1></td>
                        </tr>

                        <tr>
                            <td><p id="artikel-author">By: <?php echo $rows2["username"]; ?></p></td>

                        </tr>

                        <tr>                            
                            <td style="width: auto;"><div id="category-upperbody"><h4><?php echo $rows["kategori"]?></h4></div></td>
                            <td  style="width: 30%;text-align: end;"><p><form method="POST" action="php/likeartikel.php?id=<?php echo $id;?>"><input type="image" src="photo/like.jpeg" style="width: 35%; height:50%" alt=""><span><?php echo $rows['jml_like'];?></span></p></form></td>
                            <td style="width: 30%;text-align: end;"><p><form method="POST" action="php/dislikeartikel.php?id=<?php echo $id;?>"><input type="image" src="photo/dislike.jpeg" style="width: 35%; height:50%" alt=""><span><?php echo $rows['jml_dislike'];?></span></p></form></td>
                        </tr>

                        <tr>
                         <td colspan="4" ><img src='<?php echo $image_src;?>' alt="" id="new-artikel-thumbnail"></td>
                         </tr>

                        <tr>

                            <td colspan="4" id="new-artikel-isi" style="width: 60%;"><p><?php echo $rows["isi"];?></p></td>
                            
                        </tr>                        
                    </table>
                </div>
            <div id="comment-container">
                    <h2>Komentar</h2>


            <form action="php/input-komentar.php?id=<?php echo $id;?>" id="usrform" method="POST">
            <div id="comment-unit">
                    <header>
                     <div class="comment-profile-name">

                        <h3><?php echo $rows2["username"];?></h3>
                        <h4><?php echo $rows2["email"];?></h4>

                    </div>
                    </header>
            <div id="comment-inner">
            <textarea id="comment-buat-isi" name="komentar" form="usrform" placeholder="Comment disini"></textarea>
            <input type="submit" value="Kirim">

        </div>
            </div>            
    
            </form>


        
            
            <?php
                    while($rows3=mysqli_fetch_assoc($result3))
                    {
                        //Cuman buat ambil data username
                        $query4 = "SELECT * FROM user where id = $rows3[id_buatkomen]";
                        $result4 = mysqli_query($koneksi,$query4);
                        $rows4 = mysqli_fetch_assoc($result4);
                        echo '<div id="comment-unit">
                        <header>
                            <div class="comment-profile-name">
                                <h3>'.$rows4['username'].'</h3>
                                <h4>'.$rows4['email'].'</h4>
            
                            </div>
                        </header>
                        <div id="comment-inner">
                            <p>'.$rows3['isi_komen'].'</p>
                            <span class="comment-date">'.$rows3['tgl_buatkomen'].'</span>
                        </div>
                    <div>';    
                    }
                    
                ?>
        
                    
    </div>
    </div>
</div>

           

    </body>
</html>

