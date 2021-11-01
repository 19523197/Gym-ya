<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/about-us.css">
        <title>
            About Us - GymYa
        </title>
    </head>
<body>
    <div class="topnav">
            <a href="#"><img src="photo/logo.png" alt="" style="width:100%;height:100%;"></a>
                <a href="<?php if($_SESSION['contributor'] === '0'){ echo "user-home.php";}else{ echo "superuser-home.php";}?>">Home</a>          
                
                <a class="active" href="#">About Us</a>
                <a href="profile-page.php">Profile</a>
                <a href="php/logout.php">Logout</a>
                
            </div>
    <div class="container">
        <div class="container-img">
            
        </div>
    </div>

<div class="text">
    <h1 class="about">
        Tentang Kami
    </h1>
    <p class="about"> Kami adalah tiga Mahasiswa Informatika UII yang ditugaskan untuk membuat aplikasi yang bernama Gym-Ya. Tujuan dibuatnya Gym-Ya adalah menyediakan informasi seputar olahraga dan kebugaran seperti teknik, tips dan trik, dan informasi makanan sehat dan bergizi untuk pendamping olahraga. Harapan dari aplikasi Gym-Ya ini adalah bermanfaat untuk masyarakat luas yang ingin berolahraga tetapi tidak memiliki waktu maupun menguasai teknik yang benar. Selain itu, Gym-Ya juga bertujuan untuk pemenuhan tugas besar mata kuliah Pengembangan Aplikasi Berbasis Web.
    </p>
    <p class="about" > Made by Kelompok C10 </p>
</div>
</div>
<div class="footer">
    <h3>Gym-Ya&trade;</h3>
</div>
</body>

</html>