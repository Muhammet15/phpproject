<!DOCTYPE html>

<?php

require 'baglan.php';

?>
<html>
<head>
<title> Yeni Yönetici Kaydet  </title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>

	<div class="login">
		<div class= "login-screen">
			<div class ="app-title">
				<h1>Yeni Yönetici Kaydet </h1>
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
				<div class="control-group">
					<input type = "password" name ="password_again" class="login-field" placeholder= "Tekrar Sifre" id="login-pass">
					<label class="login-field-iconv fui-user" for="login-pass"></label>
				</div>
				
				<button href = "kayit.php" name="kayit" class="btn btn-primary btn-large btn-block"> Kayit ol</button>
			</div>
		</form>
		 <a href="login.php" <button  class="btn btn-primary btn-large btn-block"> Giriş yap</button></a>
		</div>
		
	</div>
	
	
	
	
</body>	

</html>


