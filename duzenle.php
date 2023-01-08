<?php

include 'baglan.php';
include 'header.php';

?>

<?php

$id = $_GET['duzenle']; 
$query = $db->query("SELECT * FROM members WHERE member_id = '{$id}'")->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['duzenle'])){
$query = $db->prepare("UPDATE members SET
member_isim = :member_isim,
member_mail = :member_mail,
member_tel = :member_tel
WHERE member_id = :member_id");
$update = $query->execute(array(
     "member_isim" => $_POST['member_isim'],
     "member_mail" => $_POST['member_mail'],
	 "member_tel" => $_POST['member_tel'],
	 "member_id" => $id
));
if ( $update ){
			echo'<script type="text/javascript">alert("Güncelleme Başarıyla tamamlandı"); </script>';
			header('Refresh:2;uyecrud.php');
		}
		else{
			echo "yanlış var ";
		}
}



?>



<html>

<head>
<title> Uye güncelle</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"></head>
<body>
<div class="container">
	<div class="col-md-6"> 

<form action ="" method="post">

		<label> <B> İsim Soyisim </B> </label>
<input class="form-control" type ="text" value="<?= $query['member_isim']?>" name="member_isim" >			


		<label> <B>Mail </B></label>
<input class="form-control"  type ="text" value="<?= $query['member_mail']?>" name="member_mail" >			



			<label><B> Telefon</B></label>
<input class="form-control"  type ="text"  value="<?= $query['member_tel']?>" name="member_tel">		


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
