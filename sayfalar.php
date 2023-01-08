<?php
include 'header.php';

?>
<?php

require 'baglan.php';

?>
<?php

if(isset($_GET['sil'])){
$query = $db->prepare("DELETE FROM sayfalar WHERE sayfa_id = :id");
$delete = $query->execute(array(
   'id' => $_GET['sil']
));
if($delete){
			
			echo'<script type="text/javascript">alert("Silme Başarıyla tamamlandı"); </script>';
			header('Refresh:2;sayfalar.php');
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
 
    <li><a   href="sayfaduzenle.php">sayfaduzenle</a></li>
	<li><a class= "active"  href="sayfalar.php">sayfalar</a></li>
	<li><a  href="sayfayonet.php">sayfaları yönet</a></li>
	

</ul>

<div class = "col-md-12"> 
<h1 class="page-head-line">Sayfaları Düzenle</h1>
<table class="table table-striped table-dark">
  <thead >
    <tr>
	  <th scope="col">Sayfa id</th>
      <th scope="col">Sayfa Adı</th>
      <th scope="col">Sayfa oluşturulma tarihi</th>
      <th scope="col">Sayfa Anasayfada gösterilsin mi</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $query = $db->query("SELECT * FROM sayfalar", PDO::FETCH_ASSOC);
	if ( $query->rowCount() ){
     foreach( $query as $row ){
          ?>

    <tr>
      <th scope="row"><?= $row['sayfa_id']?></th>
	  <td><?= $row['sayfa_ad']?></td>
      <td><?= $row['sayfa_tarih']?></td>
      <td><?php 
	  if($row['sayfa_anasayfa']==0)
	  {
		  echo "Hayır";
	  }elseif($row['sayfa_anasayfa']==1){
		  echo "Evet";
	  }?>
		  </td>
	  <td><a href="sayfaduzenle.php?sayfaduzenlee=<?=$row['sayfa_id']?>"><button class="btn btn-info btn">Düzenle</td>
	  <td><a href="sayfalar.php?sil=<?=$row['sayfa_id']?>"><button class="btn btn-danger btn">Sil</td>
    </tr>
 <?php   
 }
	}?>
	

  </tbody>
</table>

</body>
</html>




<?php
include 'footer.php';
?>
