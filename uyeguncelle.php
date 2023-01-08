<?php

require 'baglan.php';

?>
<?php
include 'header.php';

?>
<?php

if(isset($_GET['sil'])){
$query = $db->prepare("DELETE FROM members WHERE member_id = :id");
$delete = $query->execute(array(
   'id' => $_GET['sil']
));
if($delete){
			
			echo'<script type="text/javascript">alert("Silme Başarıyla tamamlandı"); </script>';
			header('Refresh:2;uyeguncelle.php');
		}
		else{
			echo "yanlış var ";
		}
}
?>

<html>

<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"></head>
<body>
<ul style="align: center;">
  <li><a  href="index.php">Hakkımda</a></li>
  <li><a  href="ozgecmis.php">Özgeçmiş</a></li>
  <li><a href="proje.php">Projelerim</a></li>
    <li><a href="takim.php">Takımımız</a></li>
    <li><a href="iletisim.php">İletişim</a></li>
    <li><a  href="uyecrud.php">uyekayit</a></li>
	<li><a class= "active"  href="uyeguncelle.php">uyecrudd</a></li>
	<li><a   href="sayfayonet.php">Sayfayı yönet</a></li>
</ul>
<div class = "col-md-6"> 
<table class="table table-striped table-dark">
  <thead >
    <tr>
      <th scope="col">id</th>
      <th scope="col">İsim</th>
      <th scope="col">Mail</th>
      <th scope="col">Telefon</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $query = $db->query("SELECT * FROM members", PDO::FETCH_ASSOC);
	if ( $query->rowCount() ){
     foreach( $query as $row ){
          ?>
    <tr>
      <th scope="row"><?= $row['member_id']?></th>
      <td><?= $row['member_isim']?></td>
      <td><?= $row['member_mail']?></td>
      <td><?= $row['member_tel']?></td>
	  <td><a href="duzenle.php?duzenle=<?=$row['member_id']?>"><button class="btn btn-info btn">Düzenle</td>
	  <td><a href="uyeguncelle.php?sil=<?=$row['member_id']?>"><button class="btn btn-danger btn">Sil</td>
    </tr>
 <?php   
 }
	}?>
  </tbody>
</table>
</div>

<?php
include 'footer.php';
?>
