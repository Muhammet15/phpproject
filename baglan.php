<?php

try{
	
	$db = new PDO("mysql:host=localhost; dbname=sunucu; charset=utf8",'root','');
	//echo "veritabanı bağlantısı başarılı";
}
catch (Exeption $e)
{
	
	echo $e ->getMessage();
}
?>