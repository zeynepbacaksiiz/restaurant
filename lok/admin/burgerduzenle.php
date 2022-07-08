<?php require_once 'header.php'; 
error_reporting(0);
$duzenle=$baglanti->prepare("SELECT * FROM menü");
$duzenle->execute(array(
    'menu_id'=>$_GET['id']
));
$duzenlecek=$duzenle->fetch(PDO::FETCH_ASSOC);
?>

<div class="col-md-9 pl-4" style="padding-top:200px; ">
<form action="islem/islem.php" method="POST" enctype="multipart/form-data"  >
<h3 style="text-align:center">DÜZENLE</h3>
<?php 
if (@$_GET['duzenle']=="basarili") { ?>
<h6 style="color:green">(Yükleme işlemi başarılı)</h6>
<?php }

elseif(@$_GET['duzenlenmedi']=="basarisiz")
{ ?>
<h6 style="color:red">(Yükleme işlemi başarısız)</h6>
<?php }?>
  <div class="card-body" >
  
    <input type="hidden" name="menuid" value="<?php echo $duzenlecek['menu_id'] ?>">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Başlık:</label>
                    <input  name="baslik" type="text" class="form-control"  placeholder="Lütfen menü başlığını giriniz." value="<?php echo $duzenlecek['menu_baslik'] ?>">
                  </div>
                      <div class="form-group">
                    <label for="exampleInputPassword1">Fiyat:</label>
                    <input  name="fiyat" type="text" class="form-control"  placeholder="Lütfen fiyatını giriniz." value="<?php echo $duzenlecek['menu_fiyat'] ?>">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputPassword1">Açıklama:</label>
                    <input  name="aciklama" type="text" class="form-control"  placeholder="Lütfen menü hakkında bilgi giriniz." value="<?php echo $duzenlecek['menu_aciklama'] ?>">
                  </div>
                  <button name="burgerduzen" type="submit" class="btn btn-primary col-md-6" style="display:block; margin:auto;">Düzenle</button>
           </div>
            </form>  
</div>
<?php require_once 'footer.php'; ?>