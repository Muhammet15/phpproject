<?php
include 'header.php';

?>
<?php

require 'baglan.php';

?>
<?php

?>

<html>

<head>

<ul style="align: center;">
 
    <li><a   href="sayfayonet.php">Sayfaları Yönet</a></li>
	<li><a class= "active"  href="sayfa-detay.php">sayfa detay</a></li>


</ul>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"></head>

<body>
<center><h1>Sayfa Detay</h1></center>
<br>
<div class="container px-4 px-lg-5">		
  <?php 
  $id = $_GET['sayfa_id']; 
  $query = $db->query("SELECT * FROM sayfalar WHERE sayfa_id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
  ?>
                <div class="column-1 col-md-12" class="box">
                    <div class="card h-100">
                        <div class="card-body">  
							<h2 class="card-title"><?= $query['sayfa_ad']?></h2>						
                            <p class="card-text"><?= $query['sayfa_icerik']?></p>
                        </div>      
                    </div>
                </div>
        </div>
</body>
</html>
<?php
include 'footer.php';
?>
