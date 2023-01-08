<?php

include 'header.php';
require 'baglan.php';
?>


<html>

<head>
<title> Sayfa kayıt</title>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"></head>
<body>
<div class="container">
	<div class="col-md-6"> 
<form action ="islem.php" method="post">
		<label> <B>Sayfa adı</B></label>
<input class="form-control"  type ="text" value="<?= $query['sayfa_ad']?>" name="sayfa_ad" >			
			<label><B> Sayfa içerik</B></label>
			<textarea name="sayfa_icerik" class="ckeditor"></textarea>
                
			<br>
			<label><B> Sayfa sıra</B></label>
<input class="form-control"  type ="text"  value="<?= $query['sayfa_sira']?>" name="sayfa_sira">		
				<div class="form-group">
				<label><B>  Anasayfada göster </B></label>
					<select name="sayfa_anasayfa" class="form-control">
						<option value="0">Hayır</option>
						<option value="1" >Evet</option>		
						</select>
				</div>				
<br>
<button class="form-control btn btn-success" name="sayfakayit" type="sumbit" > Sayfa kaydet</button>
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
