<?php
ob_start();
session_start();

require 'baglan.php';

if(isset($_POST['kayit'])){
	
	$username=$_POST['username']; 
	$password=$_POST['password']; 
	$password_again=$_POST['password_again']; 
	//echo "doğru yer";
	if(!$username){
		echo "lütfen kullanıcı adını giriniz";
		
	} elseif(!$password || !$password_again){
			echo "lütfen şifrenizi  giriniz";
	}elseif($password != $password_again){
			echo "lütfen şifreleri aynı  giriniz";
	}else{
		
		$sorgu=$db -> prepare('INSERT INTO users SET user_name = ?, user_password = ?');
		$ekle = $sorgu -> execute([
		$username,$password
		]);
		if($ekle){
			
			echo'<script type="text/javascript">alert("Başarılı Kayıt"); </script>';
			header('Refresh:2;login.php');
		}
		else{
			echo'<script type="text/javascript">alert("Yanlış Kayıt"); </script>';
			header('Refresh:2;login.php');
		}
	}
}

if(isset($_POST['giris'])){
	
	$username= $_POST['username']; 
	$password= $_POST['password']; 
	//echo "doğru yersss";
	
	if(!$username){
		echo "lütfen kullanıcı adını giriniz";
		
	} elseif(!$password){
			echo "lütfen şifrenizi  giriniz";
	}else{
		
		$kullanicisorsorgu = $db -> prepare('SELECT * FROM users WHERE user_name = ? || user_password = ?');
		$kullanicisorsorgu -> execute([
		$username,$password
		]);
		$say = $kullanicisorsorgu -> rowCount();
		if($say==1){
			$_SESSION['username'] = $username;
				echo'<script type="text/javascript">alert("Başarılı Giriş"); </script>';
			header('Refresh:2;uyeguncelle.php');
		}
		else{
				echo'<script type="text/javascript">alert("Yanlış Giriş"); </script>';
				header('Refresh:2;login.php');
		}
	}
}


if(isset($_POST['sayfakayit'])){
	date_default_timezone_set("Turkey");
	$sayfa_ad=$_POST['sayfa_ad']; 
	$sayfa_icerik=$_POST['sayfa_icerik']; 
	$sayfa_sira=$_POST['sayfa_sira']; 
	$sayfa_anasayfa=$_POST['sayfa_anasayfa']; 
	$sayfa_tarih = date('Y-m-d H:i');
		
		$sorgu=$db -> prepare('INSERT INTO sayfalar SET  sayfa_ad = ?, sayfa_icerik = ?, sayfa_sira = ?, sayfa_anasayfa = ?,sayfa_tarih = ?');
		$ekle = $sorgu -> execute([
		$sayfa_ad,$sayfa_icerik,$sayfa_sira,$sayfa_anasayfa,$sayfa_tarih 
		]);
		if($ekle){
			
			echo'<script type="text/javascript">alert("Kayıt Başarıyla tamamlandı"); </script>';
			header('Refresh:2;sayfayonet.php');
		}
		else{
			echo "yanlış var ";
		}

}

?>