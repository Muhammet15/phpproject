

function Validate() {
var CmbObject=document.getElementById("inputState");
var deger;
if (CmbObject.selectedIndex == 0)
{
       alert("Şehir Seçmediniz");
	   deger=false;
}
 if (document.getElementById("comment").value == "") {
            alert("Mesaj Kısmı boş geçilemez");
			deger= false;
}
 if (document.getElementById("inputPassword4").value == "") {
            alert("Şifre Kısmı boş geçilemez");
			deger= false;
}
 if (document.getElementById("inputEmail4").value == "") {
            alert("Mail Kısmı boş geçilemez");
			deger= false;
}
 if (document.getElementById("inputAddress").value == "") {
            alert("Adres Kısmı boş geçilemez");
			deger= false;
}
if( $('#gridCheck').is(':checked') != true ){
	alert("Robot Değilim Kısmı boş geçilemez - Robotsunuz!");
	deger= false;
}
if(deger!=false){
	deger =true;
}
return deger;
}






