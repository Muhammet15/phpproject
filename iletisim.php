<?php
include 'header.php';
?>
<ul style="align: center;">
  <li><a  href="index.php">Hakkımda</a></li>
  <li><a   href="ozgecmis.php">Özgeçmiş</a></li>
  <li><a href="proje.php">Projelerim</a></li>
    <li><a href="takim.php">Takımımız</a></li>
    <li><a  class= "active" href="iletisim.php">İletişim</a></li>
	   <li><a   href="uyecrud.php">uyekayit</a></li>

</ul>
<script src="./validation.js"></script>


<div class="container" style="margin-top:30px">
  <div class="row"">
    <div class="col-12">
	<h1>İletişim</h1>
	
	<form action="iletisim_sonuc.php" method="POST" name="giris" id="form">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email<strong class="yildizfont" data-toggle="tooltip" data-placement="top" title="Doldurulması Zorunlu Alan">*</strong></label>
      <input type="email" class="form-control" name="mail" id="inputEmail4" placeholder="E-mail adresiniz">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Şifre<strong class="yildizfont" data-toggle="tooltip" data-placement="top" title="Doldurulması Zorunlu Alan">*</strong></label>
      <input type="password" name="sifre" class="form-control" id="inputPassword4" placeholder="Şifreniz">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Adres<strong class="yildizfont" data-toggle="tooltip" data-placement="top" title="Doldurulması Zorunlu Alan">*</strong></label>

    <input type="textarea" name="adres" class="form-control" id="inputAddress" placeholder="Kastamonu Üniversitesi">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Mesajınız">Mesajınız:<strong class="yildizfont" data-toggle="tooltip" data-placement="top" title="Doldurulması Zorunlu Alan">*</strong></label>
       <textarea name="mesaj" class="form-control" rows="5" id="comment"></textarea>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Sehir<strong class="yildizfont" data-toggle="tooltip" data-placement="top" title="Doldurulması Zorunlu Alan">*</strong></label>
      <select name="sehir" id="inputState" class="form-control">
        <option selected>Seçiniz...</option>
        <option>İzmir</option>
		<option>İstanbul</option>
		<option>Ankara</option>
		<option>Kastamonu</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Robot Değilim<strong class="yildizfont"data-toggle="tooltip" data-placement="top" title="Doldurulması Zorunlu Alan">*</strong>
      </label>
    </div>
  </div>
  <div class="col-3">
  <marquee><strong class="yildizfont" data-toggle="tooltip" data-placement="top" title="Doldurulması Zorunlu Alan">*</strong><strong class="kayanyazi">Doldurulması Zorunlu Alan</marquee></p></div>
  <button type="submit" id="submit" name="submit" class="btn btn-success">Gönder</button>
  <script type="text/javascript">
  $('#form').submit(function () {
	     var valid = Validate();
		 if(valid==false){
			return false; 
		 }
		 else if(valid==true){
			 alert("Sorun yok Yönlendiriliyorsunuz");
			 
            var mail  = $('input[name=mail]').val();
            var sifre = $('input[name=sifre]').val();
			var mesaj = $('input[name=mesaj]').val();
			var sehir = $('input[name=sehir]').val();
            var adres = $('input[name=adres]').val();
			$.ajax({
			method: "POST",
			url: "iletisim_sonuc.php",
			data: { mail: mail, sifre: sifre, mesaj:mesaj, sehir:sehir, adres: adres }
			})
			.done(function() {
			});
		 }
    });
</script>
  <button type="button" class="btn btn-danger" id="clear">Temizle</button>
    <script type="text/javascript">
  $('#clear').click(function () {
	 $("#comment").val('');
	$("#inputPassword4").val('');
	$("#inputEmail4").val('');
	$("#inputAddress").val('');
	$('input:checkbox').removeAttr('checked');
	$("#inputState").val('Seçiniz...');
	alert("Form elemanları Temizlendi");
    });
</script>
  <script>
$(document).ready(function(){
  $("input").focus(function(){
    $(this).css("background-color","#e5e5ff");
  });
  $("input").blur(function(){
    $(this).css("background-color", "#ffffff");
  });
});
</script>
</form>	
  </div>
  </div>
</div>





<?php
include 'footer.php';
?>
