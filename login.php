<!DOCTYPE html>
<html>
<head>
<title> Yönetici Giriş  </title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>

	<div class="login">
		<div class= "login-screen">
			<div class ="app-title">
				<h1> Yönetici Giriş </h1>
			</div>
		<form action = "islem.php" method="post">	
			<div class="login-form">
				<div class="control-group">
					<input type="text" name ="username" class="login-field" placeholder="kullanıcı adı" id="login-name">
					<label class="login-field-iconv fui-user" for="login-name"></label>
				</div>	
				<div class="control-group">
					<input type = "password" name ="password" class="login-field" placeholder= "Sifre" id="login-pass">
					<label class="login-field-iconv fui-user" for="login-pass"></label>
				</div>
				<button href = "login.php" name = "giris" class="btn btn-primary btn-large btn-block"> Giriş yap</button>

			</div>
		</form>
	 <a href="kayit.php" <button name = "kayit" class="btn btn-primary btn-large btn-block"> Kayit ol</button></a>
		</div>
	</div>
</body>	

</html>
