<?php require_once 'header.php'; 
error_reporting(0);
$duzenle=$baglanti->prepare("SELECT * FROM tablo where lokanta_id=:lokanta_id");
$duzenle->execute(array(
'lokanta_id'=>$_GET['id']
));
$duzenlecek=$duzenle->fetch(PDO::FETCH_ASSOC);
?>

<div class="col-md-9 pl-4" style="padding-top:200px; ">
<form action="islem/islem.php" method="POST" enctype="multipart/form-data"  >
<h3 style="text-align:center">DÜZENLE</h3>
<?php 
if(@$_GET['yuklenme']=="basarili"){?>
<h6 style="color:green">(Yüklenme başarılı)</h6>
<?php }
elseif(@$_GET['yuklenme']=="basarisiz") {?>
<h6 style="color:green">(Yüklenme başarısız)</h6>
<?php }?>


  <div class="card-body" >
     <input type="hidden" name="eskiresim" value="<?php echo $duzenlecek['sehir_resmi'] ?>">
    <input type="hidden" name="lokid" value="<?php echo $duzenlecek['lokanta_id'] ?>">
                  <div class="form-group">
                    <label for="exampleInputPassword1">ŞEHİR:</label>
                    <input  name="sehad" type="text" class="form-control"  placeholder="Lütfen şehirinizi giriniz." value="<?php echo $duzenlecek['sehir'] ?>">
                  </div>
                       <div class="form-group">
                    <label for="exampleInputEmail1">RESİM:</label>&nbsp;&nbsp;&nbsp;
                   <p> <img style="width: 150px" src="images/logo/<?php echo $duzenlecek['sehir_resmi']; ?>"></p>
                  </div>
         <div class="form-group">
                    <label for="exampleInputPassword1">RESİM:</label>
                    <input  name="dosya" type="file" class="form-control"  placeholder="Lütfen şehirinizi giriniz." value="<?php echo $duzenlecek['sehir_resim'] ?>">
                  </div>
                  <button name="duzenle" type="submit" class="btn btn-primary col-md-6" style="display:block; margin:auto;">Düzenle</button>
           </div>
            </form>  
</div>
<?php require_once 'footer.php'; ?>