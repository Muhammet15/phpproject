<?php

include 'baglan.php';
include 'header.php';

?>
<?php

$id = $_GET['duzenle']; 
$query = $db->query("SELECT * FROM menuler WHERE menu_id = '{$id}'")->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['duzenle'])){
$query = $db->prepare("UPDATE menuler SET
menu_ad = :menu_ad,
menu_link = :menu_link,
menu_ek = :menu_ek
WHERE menu_id = :menu_id");
$update = $query->execute(array(
     "menu_ad" => $_POST['menu_ad'],
     "menu_link" => $_POST['menu_link'],
	 "menu_ek" => $_POST['menu_ek'],
	 "menu_id" => $id
));
if ( $update ){
			echo'<script type="text/javascript">alert("Güncelleme Başarıyla tamamlandı"); </script>';
			header('Refresh:2;sayfayonet.php');
		}
		else{
			echo "yanlış var ";
		}
}


?>

<html>

<head>
<title> Menu güncelle</title>
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
<button class="form-control btn btn-success" name="duzenle" type="sumbit" > Güncelle</button>
</form>
</div>
</div>
</body>

</html>



<?php
include 'footer.php';
?>