<?php

include 'header.php';
require 'baglan.php';
?>
<?php
ob_start();
session_start();



if(isset($_POST[kayit])){
	
	$menu_ad=$_POST['menu_ad']; 
	$menu_link=$_POST['menu_link']; 
	$menu_ek=$_POST['menu_ek']; 
	//echo "doğru yer";
	if(!$menu_ad){
		echo "lütfen menu adını giriniz";
		
	} elseif(!$menu_link ){
			echo "lütfen menu linki  giriniz";
	}elseif(!menu_ek){
			echo "lütfen menu ek i  giriniz";
	}else{
		
		$sorgu=$db -> prepare('INSERT INTO menuler SET menu_ad = ?, menu_link = ?, menu_ek = ?');
		$ekle = $sorgu -> execute([
		$menu_ad,$menu_link,$menu_ek
		]);
		if($ekle){
			
			echo'<script type="text/javascript">alert("Başarılı Kayıt"); </script>';
			header('Refresh:2;sayfayonet.php');
		}
		else{
			echo'<script type="text/javascript">alert("Yanlış Kayıt"); </script>';
			header('Refresh:2;sayfayonet.php');
		}
	}
}
?>

<html>

<head>
<title> Menu kayıt</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"></head>
<body>
<div class="container">
	<div class="col-md-6"> 

<form action ="" method="post">

		<label> <B> Menu ad</B> </label>
<input class="form-control" type ="text" value="<?= $query['menu_ad']?>" name="menu_ad" >			


		<label> <B>Menu link </B></label>
<input class="form-control"  type ="text" value="<?= $query['menu_link']?>" name="menu_link" >			



			<label><B> Menu ek</B></label>
<input class="form-control"  type ="text"  value="<?= $query['menu_ek']?>" name="menu_ek">		


<br>
<button class="form-control btn btn-success" name="kayit" type="sumbit" > Kaydet</button>
</form>
</div>
</div>
</body>

</html>
<?php
include 'footer.php';
?>
