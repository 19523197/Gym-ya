<?php
    include 'php/koneksi.php';
    session_start();
?>

<html>
    <head>
        <link rel="stylesheet" href="css/new-artikel.css">
    </head>
    <body>
    <div id="content-container">

    
        <div class="topnav">
                <a href="#"><img src="photo/logo.png" alt="" style="width:100%;height:100%;"></a>
                <a href="user-home.php">Home</a>                
                <a href="#aboutus">About Us</a>
                <a href="superuser-home.php">Profile</a>
                <a href="php/logout.php">Logout</a>
                
            </div>
              

    <div class="container">
            <div id="new-artikel">

                <h1>Buat Artikel</h1>
                <form action="php/input-artikel.php" method="POST" enctype='multipart/form-data'>
                <div id="form-control">
                   <br><label for="">Judul</label></br>
                    <input type="text" name="judul" id="">
                </div>

                <div id="form-control">
                    <label for="">Category</label>
                    <select name="kategori" id="">
                        <option value="Cardio">Cardio</option>
                        <option value="Workout">Workout</option>
                        <option value="Tips dan Trik">Tips and Trick</option>
                    </select>
                </div>

                <div id="form-control">
                    <label for="">Isi</label>
                    <textarea name="isi" id="" cols="80%" rows="10"></textarea>
                </div>

                <div id="form-control">
                    <label for="">Thumbnail</label>
                    <br><input type="file" name="image"accept="image/png, image/jpeg"></br>
                </div>

               <input type="submit" value="Buat">
               </form>
            </div>
    </div>
    </div>
    <div class="footer">
            <h3>Gym-Ya&trade;</h3>
    </div>  
    </body>
</html>

<!--
<table>
                <form action="">
            
                <tr>
                    <td><h1>Buat artikel</h1></td>
                </tr>
            <div id= "form-control">
                <tr>
                   <td><label for="">Judul</label></td> 
                </tr>

                <tr>
                   <td> <input type="text" name="" id=""></td>
                </tr>
               <tr>
            </div>
            <div id= "form-control">
                    <td><label for="">Category</label></td>
                </tr>
                <tr>
                    <td><select name="" id="">
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                    </select></td>
                </tr>
            </div>
                <tr>
                    <td><label for="">Isi</label></td>
                </tr>
                
                <tr>
                    <td><textarea name="" id="" cols="82" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><label for="">Thumbnail</label></td>
                </tr>
                <tr>
                    <td><input type="image"></td>
                </tr>
            
                <tr>
                    <td><input type="submit" value="Buat"></td>
                </tr>
            
                </form>
                </table>