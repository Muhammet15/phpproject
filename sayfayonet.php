<?php
include 'header.php';

?>
<?php

require 'baglan.php';

?>
<?php

if(isset($_GET['sil'])){
$query = $db->prepare("DELETE FROM menuler WHERE menu_id = :id");
$delete = $query->execute(array(
   'id' => $_GET['sil']
));
if($delete){
			
			echo'<script type="text/javascript">alert("Silme Başarıyla tamamlandı"); </script>';
			header('Refresh:2;sayfayonet.php');
		}
		else{
			echo "yanlış var ";
		}
}
?>

<html>

<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"></head>
<body>


<nav>
<ul class="menu">
	<?php  
	$query = $db->query("SELECT * FROM menuler", PDO::FETCH_ASSOC);
	if ( $query->rowCount() ){
     foreach( $query as $row ){
	 ?>
	<li> <a  href ="<?= $row['menu_link']?>">  <?= $row['menu_ad']?></a></li>
	 <?php } }?>
</ul>
</nav>


<div class = "col-md-12"> 
<h1 class="page-head-line">Menüleri Düzenle</h1>
<br>
<br>
 <a href="menuekle.php"   class="btn btn-primary btn-large btn-block"> Menu ekle</a>
<br>
<br>
<table class="table table-striped table-dark">
  <thead >
    <tr>
      <th scope="col">id</th>
      <th scope="col">Menü adları</th>
      <th scope="col">Menü linkleri</th>
      <th scope="col">Menü açıklamaları</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $query = $db->query("SELECT * FROM menuler", PDO::FETCH_ASSOC);
	if ( $query->rowCount() ){
     foreach( $query as $row ){
          ?>

    <tr>
      <th scope="row"><?= $row['menu_id']?></th>
      <td><?= $row['menu_ad']?></td>
      <td><?= $row['menu_link']?></td>
      <td><?= $row['menu_ek']?></td>
	  <td><a href="menuduzenle.php?duzenle=<?=$row['menu_id']?>"><button class="btn btn-info btn">Düzenle</td>
	  <td><a href="sayfayonet.php?sil=<?=$row['menu_id']?>"><button class="btn btn-danger btn">Sil</td>
    </tr>
 <?php   
 }
	}?>
	

  </tbody>
</table>
<br>
<hr>

<center><h1>Sayfaları Yönet</h1></center>
<br>

<div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Sayfa Eklemek için tıklayın</h1>
                    <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                   <a href="sayfaekle.php"  class="btn btn-primary btn-large btn-block"> Sayfa ekle</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p></div>
            </div>
            <!-- Content Row-->
			
			
  <?php $query = $db->query("SELECT * FROM sayfalar where sayfa_anasayfa='1' order by sayfa_id desc ", PDO::FETCH_ASSOC);
	if ( $query->rowCount() ){
     foreach( $query as $row ){?>
          
			
                <div class="column-1 col-md-12" class="box">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title"><?= $row['sayfa_ad']?></h2>
                            <p><?php echo substr($row['sayfa_icerik'],0,200);?></p>
                        </div>
                        <div class="card-footer"><a href="sayfa-detay.php?sayfa_id=<?=$row['sayfa_id']?>" class="btn btn-primary btn-sm" >Sayfa içeriğine bak</a></div>
                    </div>
                </div>
           
    
	<?php   }}?>
            
        </div>
</body>

<br>
 <a href="footerekle.php?footer_id=1" class="btn btn-info btn-large btn-block"> Footer düzenle</a>
</html>




<?php
include 'footer.php';
?>
