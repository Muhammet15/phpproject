<?php

ob_start();
session_start();

require 'baglan.php';

if(isset($_POST[uyekayit])){
	
	$isim=$_POST['isim']; 
	$mail=$_POST['mail']; 
	$tel=$_POST['tel']; 
	//echo "doğru yer";
	if(!$isim){
		
			echo'<script type="text/javascript">alert("isim giriniz"); </script>';
			header('Refresh:2;uyecrud.php');
		
	} elseif(!$mail ){
		
			echo'<script type="text/javascript">alert("mail giriniz"); </script>';
			header('Refresh:2;uyecrud.php');
	}elseif(!$tel){
			
			echo'<script type="text/javascript">alert("tel giriniz"); </script>';
			header('Refresh:2;uyecrud.php');
	}else{
		
		$sorgu=$db -> prepare('INSERT INTO members SET  member_isim = ?, member_mail = ?, member_tel = ?');
		$ekle = $sorgu -> execute([
		$isim,$mail,$tel
		]);
		if($ekle){
			
			echo'<script type="text/javascript">alert("Kayıt Başarıyla tamamlandı"); </script>';
			header('Refresh:2;index.php');
		}
		else{
			echo "yanlış var ";
		}
	}
}

?>