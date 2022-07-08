<?php require_once 'header.php'; ?>

<div class="col-md-9 pl-4" >
<table class="table " style="height:30vh">
  <thead>
    <tr>
        <th scope="col">Başlık</th>
      <th scope="col">Fiyat</th>
        <th scope="col">Açıklama</th>
      <th scope="col">Düzenle</th>
      <th scope="col">Sil</th>
    </tr>
  </thead>
  <tbody>
    
   
    <?php 
    $urunler=$baglanti->prepare("SELECT * FROM menü");
    $urunler->execute();
    while($uruncek=$urunler->fetch(PDO::FETCH_ASSOC)) {?>
     <tr>
      <td><?php echo $uruncek['menu_baslik'] ?></td>
      <td><?php echo $uruncek['menu_fiyat'] ?></td>
        <td><?php echo $uruncek['menu_aciklama'] ?></td>
  <td>  <a href="burgerduzenle?id=<?php echo $uruncek['menu_id'] ?>">  <button type="submit" class="btn btn-primary">DÜZENLE</button></a></td>
  <form action="islem/islem" method="post">
         <input type="hidden" type="submit" name="id" value=""> 
         
         <td><button name="silburger" type="submit" class="btn btn-danger">Sil</button></td>
             </form>
   <?php } ?>
  </tbody>

</table>
<a href="burgerekle">  <button type="submit" name="gonder"  class="btn btn-success mt-4" style="float:right">YENİ RESTAURANT EKLE</button></a>
</div>
<?php require_once 'footer.php'; ?>