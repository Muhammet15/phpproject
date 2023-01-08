<?php

include 'header.php';
include 'baglan.php';
?>
<?php
ob_start();
session_start();

$id = $_GET['sayfaduzenlee']; 
$query = $db->query("SELECT * FROM sayfalar WHERE sayfa_id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
echo $_POST['sayfa_ad'],$id;
if(isset($_POST['sayfaduzenlee'])){
	
	echo "girdi buraya";


$query = $db->prepare("UPDATE sayfalar SET
sayfa_ad = :sayfa_ad,
sayfa_anasayfa = :sayfa_anasayfa,
sayfa_icerik = :sayfa_icerik,
sayfa_sira = :sayfa_sira
WHERE sayfa_id = :sayfa_id");
$update = $query->execute(array(
     "sayfa_ad" => $_POST['sayfa_ad'],
	 "sayfa_anasayfa" => $_POST['sayfa_anasayfa'],
	 "sayfa_icerik" => $_POST['sayfa_icerik'],
	 "sayfa_sira" => $_POST['sayfa_sira'],
     "sayfa_id" => $id 
));	 
if ( $update ){
     echo'<script type="text/javascript">alert("Güncelleme Başarıyla tamamlandı"); </script>';
			header('Refresh:2;sayfalar.php');
}

else{
	print "olmadı!";
}

}



?>



<html>

<head>
<title> Sayfa güncelle</title>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"></head>
<body>
<ul style="align: center;">
 
    <li><a class= "active"  href="sayfaduzenle.php">sayfaduzenle</a></li>
	<li><a  href="sayfalar.php">sayfalar</a></li>
	<li><a  href="sayfayonet.php">sayfaları yönet</a></li>
	

</ul>
<div class="container">
	<div class="col-md-6"> 

<form action ="" method="POST" >
	


		<label> <B>Sayfa adı</B></label>
<input class="form-control"  type ="text" name="sayfa_ad" value="<?= $query['sayfa_ad']?>"  >			

			<label><B> Sayfa içerik</B></label>
			<textarea name="sayfa_icerik" class="ckeditor" type="text"><?= $query['sayfa_icerik']?></textarea>
                
			
			<label><B> Sayfa sıra</B></label>
<input class="form-control"  type ="text"  name="sayfa_sira" value="<?= $query['sayfa_sira']?>" >		

			

				<div class="form-group">
				<label><B>  Anasayfada göster </B></label>
				<select name="sayfa_anasayfa" class="form-control">
				<?php if ($query['sayfa_anasayfa']==0){?>
				
					<option value="0">Hayır</option>
					<option value="1" >Evet</option>
				<?php } elseif ($query['sayfa_anasayfa']==1){?>
				
					<option value="1" >Evet</option>
					<option value="0">Hayır</option>
				<?php }?>
				
				</select>
				</div>
				
<br>
<button class="form-control btn btn-success" name="sayfaduzenlee" type="sumbit" > Sayfayı Güncelle</button>
<br>
<br>
<a href="sayfalar.php" class="form-control btn btn-info"  type="sumbit" > Kayıtlı sayfaları göster</a>
</form>
</div>
</div>
</body>

</html>
<?php
include 'footer.php';
?>