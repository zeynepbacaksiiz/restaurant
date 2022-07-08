<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <title>BURGER | GİRİŞ YAP</title>
    <link rel="icon" href="images/logo/zb.png" type="image/x-icon" />
</head>
<style>
    .bolum1 {
        height: 100vh;
    }
</style>

<body>
    <section class="bolum1" style=" background: linear-gradient(95deg, rgb(65, 1, 1), rgb(26, 25, 25));padding-top:20%">
        <div class="col-md-5  pt-4 pb-4" style=" max-width:340px; height:auto; margin-left: auto;margin-right: auto; background-color:rgb(0, 0, 0);">
            <h5 style="text-align:center; color:green">burgerim.com</h5>
            <?php 
 if(@$_GET['durum']=="hata")
 {?>
<p style="color:red; text-align:center;" class="login-box-msg"><b>Kullanıcı adı ya da şifre hatalı</b></p>
<?php }
 elseif(@$_GET['durum']=="gulegule")
 {?>
<p style="color:red; text-align:center;" class="login-box-msg"><b>Görüşmek üzere</b></p>
<?php }
else
{ ?>
<p style=" text-align:center;" class="login-box-msg"><b>Lütfen giriş bilgilerini giriniz</b></p>
<?php }?>
          
            <form action="islem/islem.php" method="post">
                <div class="input-group mb-3">
                    <input name="kul" type="text" class="form-control" placeholder="Email adresinizi giriniz.">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span style="color:rgb(255, 255, 255)" class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="sifre" type="password" class="form-control" placeholder="Şifrenizi giriniz">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span style="color:rgb(255, 255, 255)" class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember" style="color:white">
                       Ben hatırla
                      </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button name="girisyap" type="submit" class="btn btn-success btn-block">Giriş yap</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>