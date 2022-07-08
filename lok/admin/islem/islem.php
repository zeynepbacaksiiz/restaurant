<?php
require_once '../baglanti.php';
session_start();







if(isset($_POST['duzenle']))
{
$katid=$_POST['lokid'];
if($_FILES['dosya'] ["size"]>0)
{
     $uploads_dir='../images/logo';
	@$tmp_name= $_FILES['dosya'] ["tmp_name"];
	@$name= $_FILES['dosya'] ["name"];


	$sayi=rand(1,1000000);
	$sayi2=rand(1,100000);
	$sayi3=rand(10000, 20000000);


	$sayilar=$sayi.$sayi2.$sayi3;
	$resimyolu=$sayilar.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
}
$duzenle=$baglanti->prepare("UPDATE tablo SET

sehir=:sehir,
sehir_resmi=:sehir_resmi

WHERE lokanta_id=$katid
");
$update=$duzenle->execute(array(
'sehir'=>$_POST['sehad'],
'sehir_resmi'=>$resimyolu
));
if($update)
{
    $resimsil=$_POST['eskiresim'];
    unlink("../images/logo/$resimsil");
	Header("Location:../duzenle?yuklenme=basarili");
}
else
{
	Header("Location:../duzenle?yuklenme=basarisiz");
}
}
else{
            
               $duzenle=$baglanti->prepare("UPDATE tablo SET 
		
            sehir=:sehir
      
         
 
        
                WHERE lokanta_id=$katid
        
                ");
        
            $update=$duzenle->execute(array(
		
                'sehir'=>$_POST['sehad']
            
               
        
        
            ));
            if ($update) {
			
                header("Location:../duzenle?yuklenme=basarili");
            }
            else{
                header("Location:../duzenle?yuklenme=basarisiz");
            }
        }
    


if(isset($_POST['sil']))

{
    $sil=$baglanti->prepare("DELETE from tablo where lokanta_id=:lokanta_id");
    $sil->execute(array(
        'lokanta_id'=>$_POST['id']
    ));
  if ($sil) {
		$resimsil=$_POST['eskiresim'];
        unlink("../images/logo/$resimsil");
		Header("Location:../restaurant?yuklenme=basarili");
	}
	else{
		Header("Location:../restaurant?yuklenme=hata");
	}
}



if(isset($_POST['kaydet']))
{
     $uploads_dir='../images/logo';
	@$tmp_name= $_FILES['dosya'] ["tmp_name"];
	@$name= $_FILES['dosya'] ["name"];


	$sayi=rand(1,1000000);
	$sayi2=rand(1,100000);
	$sayi3=rand(10000, 20000000);


	$sayilar=$sayi.$sayi2.$sayi3;
	$resimyolu=$sayilar.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

     $kaydet=$baglanti->prepare("INSERT INTO  tablo set
    sehir=:sehir,
    sehir_resmi=:sehir_resmi
    
    ");
    $insert=$kaydet->execute(array(
'sehir'=>$_POST['sehad'],
'sehir_resmi'=>$resimyolu


    ));
    if($insert)
    {
       header("Location:../ekle?dogru=basarili");
    }
    else {
     header("Location:../ekle?hata=basarisiz");
    }

}





if (isset($_POST['girisyap'])) {
    $kul=htmlspecialchars($_POST['kul']);
    $sifre=htmlspecialchars($_POST['sifre']);
    $sıfreguclu=md5($sifre);
    
    
    $kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_ad=:kullanici_ad and kullanici_sifre=:kullanici_sifre");
    $kullanicisor->execute(array(
    
        'kullanici_ad'=>$kul,
        'kullanici_sifre'=>$sıfreguclu
    ));
    $var=$kullanicisor->rowCount();
if($var>0)
{
    echo $_SESSION['girisbelgesi']=$kul;
    header("Location:../index?durum=hosgeldin");
}

else
{
    header("Location:../giris?durum=hata");
}
}


if(isset($_POST['burgerkaydet']))
{
$urunler=$baglanti->prepare("INSERT  INTO menü set
menu_baslik=:menu_baslik,
menu_fiyat=:menu_fiyat,
menu_aciklama=:menu_aciklama

");
$insert=$urunler->execute(array(
'menu_baslik'=>$_POST['baslik'],
'menu_fiyat'=>$_POST['fiyat'],
'menu_aciklama'=>$_POST['aciklama']
));
if($insert)
{
    header("Location:../burgerekle?durum=basarili");
}
else{
    header("Location:../burgerekle?durum=basarisiz");
}
}

if(isset($_POST['silburger']))
{
    $silburger=$baglanti->prepare("DELETE from menü ");
    $silburger->execute(array(
    'menu_id'=>$_POST['id']
   ));
   if($silburger)
   {
       header("Location:../burgerler?sildi==basarili");
   }
   else
   {
       header("Location:../burgerler?silmedi==basarisiz");
   }
}


if(isset($_POST['burgerduzen']))
{
    $burger=$_POST['menuid'];
$duzenle=$baglanti->prepare("UPDATE menü SET 
menu_baslik=:menu_baslik,
menu_fiyat=:menu_fiyat,
menu_aciklama=:menu_aciklama

WHERE menu_id=$burger


");
$update=$duzenle->execute(array(

'menu_baslik'=>$_POST['baslik'],
'menu_fiyat'=>$_POST['fiyat'],
'menu_aciklama'=>$_POST['aciklama']



));
if($update)
   {
       header("Location:../burgerduzenle?duzenle==basarili");
   }
   else
   {
       header("Location:../burgerduzenle?duzenlenmedi==basarisiz");
   }
}
?>