<?php require_once 'header.php'; ?>

<div class="col-md-9 pl-4" style="padding-top:200px; ">
<form action="islem/islem.php" method="POST" enctype="multipart/form-data"  >
<h3 style="text-align:center">EKLE</h3>
<?php 

if (@$_GET['dogru']=="basarili") { ?>
<h6 style="color:green">(Yükleme işlemi başarılı)</h6>
<?php }

elseif(@$_GET['hata']=="basarisiz"){ ?>
<h6 style="color:red">(Yükleme işlemi başarısız)</h6>
<?php }?>
  <div class="card-body" >
                  <div class="form-group">
                    <label for="exampleInputPassword1">ŞEHİR:</label>
                    <input  name="sehad" type="text" class="form-control"  placeholder="Lütfen şehirinizi giriniz.">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">RESİM SEÇ:</label>
                    <input  name="dosya" type="file" class="form-control"  >
                  </div>
                  <button name="kaydet" type="submit" class="btn btn-primary col-md-6" style="display:block; margin:auto;">Ekle</button>
           </div>
            </form>  
</div>
<?php require_once 'footer.php'; ?>