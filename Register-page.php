<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" href="css/Register.css">
	<script type="text/javascript" src="jss/validasi.js"></script>
</head>
<body>
	
<div class="topnav">
<a href="#"><img src="photo/logo.png" alt="" style="width:100%;height:100%;"></a>
  	<a href="landing-page.php">Home</a>
  	
  	<a href="about-us.php">About Us</a>
  	<a href="index.php">Profile</a>
  	<a class="active" href="index.php">Login</a>
   		
</div>

<div class="container">
        	
    

	<form name="myForm" action="php/daftar-user.php" method="POST" onSubmit="return validasi()">
		<div class="container-form">
			<div class="title">
			<h3><u>Daftar Gym-Ya</u></h3>
			</div>
		
			<table>
				<tr>
					<td>Username : </td>
				</tr>

				<tr>
					<td><input type="text" name="username" id="username"></td>
				</tr>

				<tr>
					<td>Email : </td>
				</tr>

				<tr>
					<td><input type="text" name="email" id="email"></td>
				</tr>

				<tr>
					<td>Password : </td>
				</tr>

				<tr>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td>Daftar Sebagai Contributor  
						<input id='testNameHidden' type='hidden' value='0' name='contributor'>
						<input id='testName' type='checkbox' value='1' name="contributor">
					</td>
				</tr>

			<tr>

            <td><input type="submit" enabled="enabled" onclick="document.location='login.html'" value="Daftar"></td>
			</tr>
		</form>

        	<tr>
		<td><div class="kaki">Sudah daftar? Silakan <a href="index.php" id="Login" >Login</a></div></td>
          	</tr>
       		</table>
        </div>

			
		</form>
	</div>

		<div class="footer">
			<h3>Gym-Ya&trade;</h3>
		</div>

</body>

</html>