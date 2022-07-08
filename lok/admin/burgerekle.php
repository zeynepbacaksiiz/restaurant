<?php require_once 'header.php'; ?>

<div class="col-md-9 pl-4" style="padding-top:200px; ">
<form action="islem/islem.php" method="POST" enctype="multipart/form-data"  >
<h3 style="text-align:center">BURGER EKLE</h3>
<?php
if(@$_GET['durum']=="basarili")
{?>
<h6 style="color:green">(Yükleme işlemi başarılı)</h6>
<?php } 
elseif(@$_GET['durum']=="basarisiz") { ?>
<h6 style="color:green">(Yükleme işlemi başarılı)</h6>
<?php } ?>

  <div class="card-body" >
                  <div class="form-group">
                    <label for="exampleInputPassword1">Başlık:</label>
                    <input  name="baslik" type="text" class="form-control"  placeholder="Lütfen menü başlığını giriniz.">
                  </div>
                      <div class="form-group">
                    <label for="exampleInputPassword1">Fiyat:</label>
                    <input  name="fiyat" type="double" class="form-control"  placeholder="Lütfen fiyatını giriniz.">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputPassword1">Açıklama:</label>
                    <input  name="aciklama" type="text" class="form-control"  placeholder="Lütfen menü hakkında bilgi giriniz.">
                  </div>
                  <button name="burgerkaydet" type="submit" class="btn btn-primary col-md-6" style="display:block; margin:auto;">Ekle</button>
           </div>
            </form>  
</div>
<?php require_once 'footer.php'; ?>