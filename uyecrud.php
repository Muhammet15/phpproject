<?php
require 'baglan.php';
?>
<?php
include 'header.php';
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
    <li><a class= "active"  href="uyecrud.php">uyekayit</a></li>
</ul>
<div class="container">
	<div class="col-md-6"> 
<form action ="kaydet.php" method="POST">
<div class="control-group">
		<label> <B> İsim Soyisim </B> </label>
<input class="form-control" type ="text" name="isim">			
</div>
<div class="control-group">
		<label> <B>Mail </B></label>
<input class="form-control"  type ="text" name="mail">			
</div>

<div class="control-group">
			<label><B> Telefon</B></label>
<input class="form-control"  type ="text" name="tel">		
</div>
<br>
<button href = "index.php" name="uyekayit" class="btn btn-primary btn-large btn-block"> Kayit ol</button>
</form>
</div>
<br>
<hr>
</div>
</body>
</html>
<?php
include 'footer.php';
?>
