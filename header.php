<!DOCTYPE html>

<html lang="en">
<head>
  <title>Web Proje</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" type="image/png" href="./favicon.png"/>

<style>
.mySlides {display:none;}
</style>
  <script>
  $( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1500
      },
      hide: {
        effect: "explode",
        duration: 1500
      }
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
  } );
  </script>
  
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
.navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
    color: rgb(0, 0, 0);
}
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">


  <h1 class="baslik">Sunucu Tabanlı Programlama</h1>
  <p>2020 - 2021</p> 
 <input type="button" class="sag" onClick="location.href='uyecrud.php'" value="Üye Kayit" />
 <input type="button" class="sag" onClick="location.href='login.php'" value="Yonetici login" />
  
</div>
<style>
.sag
   { 
	  float: right;

      width: 300px;

      background-color:#b0e0e6;
   }
   
ul {
  list-style-type: none;
  margin: 0;
    
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
a:hover {
    color: #7e212e;
    text-decoration: Inherited;
}
li {
  float: left;
  border-right:10px dotted #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #4caf50;
}
    
li a:hover{
  background-color: #4CAF50;
}


.active {
  background-color: #4CAF50;
}
</style>
    
</head>
<body>
</br>
