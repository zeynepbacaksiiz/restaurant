<?php 
session_start();

require_once 'baglanti.php';

$kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_ad=:kullanici_ad");
$kullanicisor->execute(array(

    'kullanici_ad'=>$_SESSION['girisbelgesi'] //giriş yaptıysa
));
$var=$kullanicisor->rowCount();
if($var==0)//böyle bu kulalnıcı yok
{
    Header("Location:giris?durum=hata"); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <title>BURGER - ADMİN</title>
</head>

<body>

    <div class="container-fluid between ">
 <div class="col-md-4 pt-2" style="font-weight:500; color:black; position:absolute; right:0px; color:white;"><?php  
     
          $zaman1=strtotime('+2 hour'); ?>
          
          <?php
            echo date('d/m/Y H:i:s',$zaman1); 
      
     ?></div>
       <a href="index"> <img src="../resim/logo.png" style="display:block; margin:auto; width:200px; height:200px; padding-top:40px;"></a>
        <div class="container bg-white mt-4" style="height:100vh;">
       
        <div class="row">
        <div class="col-md-3" style="background-color:rgb(26, 25, 25); height:100vh">
        <div class="col-md-12 " style="padding-top:170px; " >
            <ul >
                <li><a href="restaurant"><i class="fa fa-cutlery" aria-hidden="true"></i>    Restaurantlar</a></li>
                <li><a href="burgerler"><i class="fa fa-free-code-camp" aria-hidden="true"></i>   Burgerler</a></li>
                <li><a href="rezervasyon"><i class="fa fa-address-book" aria-hidden="true"></i>  Rezervasyon</a></li>
                <li><a href=""><i class="fa fa-bar-chart" aria-hidden="true"></i>   Sosyal Medya</a></li>
                <li><a href="cikis"><i class="fa fa-sign-out" aria-hidden="true"></i>    Çıkış</a></li>

            </ul>

       </div>
       </div>