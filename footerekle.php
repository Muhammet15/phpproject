<?php

include 'header.php';
require 'baglan.php';
?>
<?php
ob_start();
session_start();
$id = $_GET['footer_id']; 
$query = $db->query("SELECT * FROM footer WHERE footer_id = '{$id}'")->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['duzenle'])){

$query = $db->prepare("UPDATE footer SET
footer_ad = :footer_ad,
footer_link = :footer_link
WHERE footer_id = :footer_id");
$update = $query->execute(array(
     "footer_ad" => $_POST['footer_ad'],
	 "footer_link" => $_POST['footer_link'],
     "footer_id" => $id 
));
if ( $update ){
     print "güncelleme başarılı!";
}
}	


?>

<form action =""	 method="POST">
<div class="control-group">
		<label> <B> footer_ad</B> </label>
<input class="form-control" value="<?= $query['footer_ad']?>" type ="text" name="footer_ad">			
</div>
<div class="control-group">
		<label> <B>footer_link</B></label>
<input class="form-control" value="<?= $query['footer_link']?>"  type ="text" name="footer_link">			
</div>

<br>
<button href = "footerekle.php" name="duzenle" class="btn btn-primary btn-large btn-block"> Düzenle </button>
</form>