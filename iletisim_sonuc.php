<?php
include 'header.php';

$mail = $_POST['mail'];
$sifre = $_POST["sifre"]; 
$adres = $_POST["adres"]; 
$mesaj = $_POST["mesaj"];
$sehir = $_POST["sehir"];
?>

<div class="container" style="margin-top:30px">
  <div class="row" style="text-align: center;">
    <div class="col-12">
	<h1>İletişim Sonuç<h1>
	</br>
    </div>
    <div class="col-12">

<table class="table table-bordered">
  <tbody>
    <tr>
      <th scope="row">Mail Adresiniz</th>
      <td colspan="3"><?php echo $mail; ?></td>
    </tr>
    <tr>
      <th scope="row">Şifreniz</th>
      <td colspan="3"> <?php echo $sifre; ?> </td>
    </tr>
    <tr>
      <th scope="row">Adresiniz</th>
      <td colspan="3"> <?php echo $adres; ?> </td>
    </tr>
	<tr>
      <th scope="row">Mesajınız</th>
      <td colspan="3"> <?php echo $mesaj; ?> </td>
    </tr>
	<tr>
      <th scope="row">Şehriniz</th>
      <td colspan="3"> <?php echo $sehir; ?> </td>
    </tr>
  </tbody>
</table>



    </div>
  </div>
</div>

<?php
include 'footer.php';
?>
