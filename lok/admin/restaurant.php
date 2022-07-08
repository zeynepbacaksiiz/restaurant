<?php require_once 'header.php'; ?>

<div class="col-md-9 pl-4" >
<table class="table " style="height:30vh">
  <thead>
    <tr>
        <th scope="col">Şehir</th>
      <th scope="col">Resim</th>
      <th scope="col">Düzenle</th>
      <th scope="col">Sil</th>
    </tr>
  </thead>
  <tbody>
      <?php
           $urunsor=$baglanti->prepare("SELECT * FROM tablo");
            $urunsor->execute();
             while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {?>
    <tr>
      <td><img style="width:100px; height:100px"  src="images/logo/<?php echo $uruncek['sehir_resmi'] ?>"></td>
      <td><?php echo $uruncek['sehir'] ?></td>
  
  <td>  <a href="duzenle?id=<?php echo $uruncek['lokanta_id']?>">  <button type="submit" class="btn btn-primary">DÜZENLE</button></a></td>
  <form action="islem/islem" method="post">
         <input type="hidden" type="submit" name="id" value="<?php echo $uruncek['lokanta_id']?>"> 
           <input type="hidden" type="submit" name="eskiresim"  value="<?php echo $uruncek['sehir_resmi']?>">
         <td><button name="sil" type="submit" class="btn btn-danger">Sil</button></td>
             </form>
   <?php } ?>
  </tbody>

</table>
<a href="ekle.php">  <button type="submit" name="gonder"  class="btn btn-success mt-4" style="float:right">YENİ RESTAURANT EKLE</button></a>
</div>
<?php require_once 'footer.php'; ?>