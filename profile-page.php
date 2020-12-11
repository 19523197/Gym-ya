<?php
session_start();
include 'php/koneksi.php';

$query = "SELECT * FROM user WHERE id = $_SESSION[id]";
$queryliked = "SELECT * FROM liked_artikel WHERE user_id = $_SESSION[id]";
$resultliked = mysqli_query($koneksi,$queryliked);
$querycommented = "SELECT * FROM komentar WHERE id_buatkomen = $_SESSION[id]";
$resultcommented = mysqli_query($koneksi,$querycommented);
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/profile.css">
        <title>
            Profile Details - GymYa
        </title>
    </head>
    <body>
    <div id="content-container">
        <div class="topnav">
                <a href="#"><img src="photo/logo.png" alt="" style="width:100%;height:100%;"></a>
                <a href="<?php if($_SESSION['contributor'] === '0'){ echo "user-home.php";}else{ echo "superuser-home.php";}?>">Home</a>
                
                <a href="about-us.php">About Us</a>
                <a class="active" href="#">Profile</a>
                <a href="php/logout.php">Logout</a>
                
            </div>
        <div class="container">
            <div class="container-img">
                
            </div>
        </div>
        <div class="text"> 
            <h1 class="profile">
                Detail Profil
            </h1>
            <table>
                <tr> 
                    <td style="width: 20%; vertical-align: top; border-right: 2px white; ">
                         <div class="formprofile">
                            <table style="background-color:white;height:auto;margin:auto;">
                            
                                <form>
                                        <tr>
                                            <th colspan="2" style="width: 20%;">
                                            <div class="profile"> 
                                                <h1 class="detailprof">Profil Anda</h1>
                                            </div>
                                            </th>
                                        <tr>
                                            <td>
                                            <p class="username"> Username </p>
                                            </td>
                                            <td>
                                            <p class="username"> : <?php echo $_SESSION['username']; ?> </p>
                                            </td>
                                        </tr>   
                                        
                                        <tr>
                                            <td>
                                                <p class="username"> Email </p>
                                            </td>
                                            <td>
                                                <p class="username"> : <?php echo $_SESSION['email'];?> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="username"> Password </p>
                                            </td>
                                            <td>
                                                <p class="username"> : <?php echo $_SESSION['password'];?> </p>
                                            </td>
                                        </tr>
                                </form>
                            </table>
                    </td>
                    <td style="width:40%;">
                        <table>
                            <tr>
                                <th><h3>ARTIKEL YANG DISUKAI</h3></th>
                            </tr>
                            <?php 
                                            while($rows=mysqli_fetch_assoc($resultliked)){
                                                $queryselectartikel = "SELECT * FROM artikel WHERE id = $rows[artikel_id]";
                                                $resultselect = mysqli_query($koneksi,$queryselectartikel);
                                                $rowsliked = mysqli_fetch_assoc($resultselect);

                                                echo '
                                                    <tr>
                                                    <td>

                                                    <div id="commented-artikel">

                                                        <div id="commented-artikel-header" style="background-image: url(photo/upload/'.$rowsliked['thumbnail'].'");">
                                                            
                                                        </div>
                                                        <div id="commented-artikel-isi">

                                                        <h3><a href="artikel-page.php?id='.$rows['artikel_id'].'">'.$rowsliked['judul'].'"</a></h3>

                                                        </div></td></tr>';
        

                                                
                                                }
                                            ?>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <h3>Gym-Ya&trade;</h3>
        </div>
    </div>
    </body>


</html>

<?php
/*<?php 
                                            while($rows=mysqli_fetch_assoc($resultcommented)){
                                                $queryselectartikel = "SELECT * FROM artikel WHERE id = $rows[id_artikel]";
                                                $resultselect = mysqli_query($koneksi,$queryselectartikel);
                                                $rowsliked = mysqli_fetch_assoc($resultselect);

                                                echo '
                                                <td rowspan="2" style="border-left: 1px solid black;">
                                                    <div id="commented-artikel">

                                                        <div id="commented-artikel-header">

                                                        </div>
                                                        <div id="commented-artikel-isi">

                                                        <h3><a href="artikel-page.php?id='.$rows['id_artikel'].'">'.$rowsliked['judul'].'</a></h3>

                                                        </div></td>';
        

                                                
                                                }
                                            ?>
                                            
                                            <td rowspan="4" style="border-left: 1px solid black;">
                                            <?php 
                                            while($rows=mysqli_fetch_assoc($resultliked)){
                                                $queryselectartikel = "SELECT * FROM artikel WHERE id = $rows[artikel_id]";
                                                $resultselect = mysqli_query($koneksi,$queryselectartikel);
                                                $rowsliked = mysqli_fetch_assoc($resultselect);

                                                echo '
                                                    <div id="commented-artikel">

                                                        <div id="commented-artikel-header">

                                                        </div>
                                                        <div id="commented-artikel-isi">

                                                        <h3><a href="artikel-page.php?id='.$rows['artikel_id'].'">'.$rowsliked['judul'].'</a></h3>

                                                        </div>';
        

                                                
                                                }
                                            ?>
                                            </td>
                                            */

?>