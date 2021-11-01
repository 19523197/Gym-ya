<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/Login.css">
	<script type="text/javascript" src="js/validasiLg.js"></script>
</head>
<body>
<div class="content-container">


	<div class="topnav">
	<a href="#"><img src="photo/logo.png" alt="" style="width:100%;height:100%;"></a>
  <a href="landing-page.php">Home</a>
  
  <a href="about-us.php">About Us</a>
  <a href="index.php">Profile</a>
  <a class="active" href="index.php">Login</a>
   

	</div>

	<div class="container">
        	
   

	<form name="myFormLg" action="php/login.php" method="POST">
		<div class="container-form">
			
		
			<table>
				<tr>
					<td>
					<div class="title">
						<h3><u>Login</u></h3>
					</div>
					</td>

				</tr>
				<tr>
					<td>Username : </td>
				</tr>

				<tr>
					<td><input type="text" name="username" id="username"></td>
				</tr>

				<tr>
					<td>Password : </td>
				</tr>

				<tr>
					<td><input type="password" name="password" id="password"></td>
				</tr>
			

				<tr>
            		<td><button type="submit" enabled="enabled">Login</button></td>
            	</tr>

            	<tr>
           			<td> <div class="kaki">Belum daftar? Silakan <a href="Register-page.php" id="Login">Daftar</a></div></tr>
        	
        	</table>
        </div>	
	</form>

	</div>

	<div class="footer">
			<h3>Gym-Ya&trade;</h3>
	</div>	
</div>

</body>

</html>