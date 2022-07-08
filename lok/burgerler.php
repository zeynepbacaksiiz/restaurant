

<?php
require_once 'baglanti.php';
error_reporting(0);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>BURGER</title>

    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Parisienne&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arapey&family=Homemade+Apple&family=Kaushan+Script&family=Mali:wght@200&family=Parisienne&family=Righteous&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

</head>


<body>
    <section class="lok">
        <a name="ust"></a>
        <div class="container-fluid menu" style="background-color:#161616">
            <div class="container  ">
                <a class="navbar-brand " href="anasayfa.html" style="display: block; text-align: center; right:43%; top:6%; position:absolute;"><img src="resim/logo.png" style="width:230px; height:140px; "></a>
                <nav class="navbar navbar-expand-lg navbar-light ">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="anasayfa">ANASAYFA<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">HAKKIMIZDA</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link " href="restaurant">RESTAURANTLARIMIZ<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">İLETİŞİM</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <section class="bolumbes container-fluid ">
        <div class="container pb-3">
            <div class="row">

                <div class="col-md-6 ">
                    <h4 style=" color: #00bb8c; padding-top:100px;
                    font-family: 'Homemade Apple', cursive; letter-spacing: 3px;"><b>Menümüz</b></h4>
                    <h3 class="pt-3" style="color:white; font-family: 'Righteous', cursive; letter-spacing: 3; ">Atıştırmalıklar</h3>
                    <?php
                      $burgerler=$baglanti->prepare("SELECT * FROM menü ");
                      $burgerler->execute();
                        while( $burgercek=$burgerler->fetch(PDO::FETCH_ASSOC))
                        {?>
                    <ul class="p-0" style="list-style:none; position: relative; ">
                  
                        <span class="">
                            <li  style="color: #00bb8c; text-align:center; padding-top:70px; 
                            font-family: 'Righteous', cursive; letter-spacing: 3px; font-size:medium; font-weight: 300; position: relative;"><?php echo $burgercek['menu_baslik'] ?><span class="" style="color:rgb(255, 255, 255)">................................$<?php echo $burgercek['menu_fiyat'] ?></span></li>
                        </span>
                        <span>  <img class="bresim" src="resim/3.png" style="display:none;position:absolute;  top:70px; right:-100px; width:150px; height:150px; "></span>
                        <p style="color:rgb(175, 173, 173);"><?php echo $burgercek['menu_aciklama'] ?></p>
                    </ul>
                  <?php  } ?>
                </div>
                <div class="col-md-6 pl-3" style="padding-top:140px;">
                    <img src="resim/burger.png" style="height:90%">
                </div>
            </div>

        </div>
    </section>
    <section class="container-fluid bolumsekiz p-0" style="background-image: url('resim/footer.jpg'); background-size:cover;">
        <div class="container yazi">
            <div class="row">
                <div class="col-md-2">
                    <img src="resim/logo.png" style="width:100%; height:100%">
                </div>
                <div class="col-md-10 " style="margin-top:90px;">
                    <p style="color:rgb(185, 185, 185); font-family: 'Righteous', cursive; ">Cafemiz 2020 yılında hizmetinize sunulup bugüne kadar...</p>
                </div>

            </div>

        </div>

        <div class="container yaziiki ">
            <div class="row">
                <div class="col-md-3">
                    <ul>
                        <h5>KATEGORİLER</h5>
                        <li> <a href="anasayfa">Anasayfa</a></li>
                        <li><a href="">Hakkımızda</a></li>
                        <li><a href="restaurant">Restaurantlarımız</a></li>
                        <li><a href="">İletişim</a></li>

                    </ul>
                </div>

                <div class="col-md-9">

                    <ul>
                        <h5>MENÜ</h5>
                        <li><a href="burgerler" style="color: #006d52 !important;">Burgerlerimiz</a></li>
                        <li><a href="">Pizza Çesitleri</a></li>
                        <li><a href="">Soğuk içicekler</a></li>
                        <li><a href="">Sıcak içicekler</a></li>

                    </ul>
                </div>
            </div>
        </div>


        </div>


        <div class="container-fluid footer">
            <div class="container cizz">
                <div class="row">
                    <div class="col-md-4" style="padding-top:40px">
                        <h6 style="color:white; font-family: 'Courier New', Courier, monospace;">Copyrights © 2022</h6>
                        <h6 style="color:white; font-family: 'Courier New', Courier, monospace; ">Tüm yasal haklar saklıdır.</h6>
                    </div>
                    <div class="col-md-8 sosyal " style="padding-left:40%; padding-top:3%">
                        <div class="row">
                            <ul>
                                <li class="pl-2"><a href=""><i class="fa-brands fa-instagram " style="color:yellow; font-size:1.5rem;  "></i></a>

                                </li>
                                <li class="pl-2"><a href=""><i class="fa-brands fa-facebook " style="color:rgb(0, 0, 158); font-size:1.5rem;  "></i></a>
                                </li>
                                <li class="pl-2"><a href=""><i class="fa-brands fa-youtube " style="color:rgb(255, 0, 0);font-size:1.5rem;  "></i></a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="js.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>