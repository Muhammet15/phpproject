<?php
include 'header.php';
?>
<ul style="align: center;">
  <li><a  href="index.php">Hakkımda</a></li>
  <li><a   href="ozgecmis.php">Özgeçmiş</a></li>
  <li><a class= "active" href="proje.php">Projelerim</a></li>
    <li><a  href="takim.php">Takımımız</a></li>
    <li><a   href="iletisim.php">İletişim</a></li>
	   <li><a  href="uyecrud.php">uyekayit</a></li>
</ul>
<div class="container" style="margin-top:30px">
  <div class="row" style="text-align: center;">
    <div class="col-12">
	<h1>Projelerim<h1>	
    </div>
    <div class="col-12">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./slider/2D.jpg" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
	   <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#mobil">
<h5>Unity2D Parkur Projesi<h5>
</button>	  
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./slider/2D.jpg" alt="Second slide">
	  <div class="carousel-caption d-none d-md-block">
	  <div id="dialog" title="Unity2D Parkur Projesi">
<p>Unity2D kullanarak yaptığım 18 levele sahip bir mobil oyundur.Level içersindeki engelleri aşarak belirli bir altın toplandığı zaman bir sonraki levele geçmesini sağlar.</p>
</div>
<button class="btn btn-primary" id="opener"><h5>Unity2D Parkur Projesi</h5></button>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./slider/flut.png" alt="Third slide">
	  <div class="carousel-caption d-none d-md-block">	  
	  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#flutter">
<h5>Flutter İle Sosyal Medya Uygulaması<h5>
</button>
  </div>
    </div>
	<div class="carousel-item">
      <img class="d-block w-100" src="./slider/flut.png" alt="Fourth slide">
	  <div class="carousel-caption d-none d-md-block">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tohma">
<h5>Python Makine Öğrenmesi<h5>
</button>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>
  <br><br><br>
<!-- The Modal Kayısı -->
<div class="modal" id="flutter">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Flutter ile sosyal medya uygulaması</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
         <p>Burada flutter ve firebase kullanılarak oluşturulmuş, kullanıcıların takipleşebildiği anasayfa keşfet profil ve fotoğraf çekme sayfalarının olduğu bir projedir.</p>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>
<!-- The Modal tohma -->
<div class="modal" id="tohma">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Python Makine Öğrenmesi(Iris)</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
         <p>Gözdeki körlük numaralarını makine öğrenmesi ile veriseti içerisinde sınıflandırma ve körlük derecesini bulan derin öğrenme algoritmasıdır.</p>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>
<!-- The Modal malatya -->
<div class="modal" id="mobil">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Mila on the Track</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
         <p>Unity2D kullanarak yaptığım 18 levele sahip bir mobil oyundur.Level içersindeki engelleri aşarak belirli bir altın toplandığı zaman bir sonraki levele geçmesini sağlar.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>
<p class="smalltext">Muhammet Ali Kayacan</p>
</div>
<?php
include 'footer.php';
?>
