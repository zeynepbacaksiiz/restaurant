<?php 
error_reporting(0);
require_once 'baglanti.php';
$urunler=$baglanti->prepare("SELECT * FROM aciklama");
$urunler->execute();
$uruncek=$urunler->fetch(PDO::FETCH_ASSOC)
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
    <section class="bolum1">
        <a name="ust"></a>
        <div class="container-fluid menum">
            <div class="container  ">
                <a class="navbar-brand " href="anasayfa.html" style="display: block; text-align: center; right:43%; top:6%; position:absolute;"><img src="resim/logo.png" style="width:230px; height:140px; "></a>
                <nav class="navbar navbar-expand-lg navbar-light ">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="anasayfa">ANASAYFA<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">HAKKIMIZDA</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="restaurant">RESTAURANTLARIMIZ<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">??LET??????M</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <button type="button" class="one btn btn-outline-danger" style="position:absolute; bottom:140px; right:80px; width:200px;  color:black;  border:3px solid rgb(0, 0, 0); ">MEN??</button>
        <a href="rezervasyon"><button type="button" class="two btn " style="position:absolute; bottom:140px; right:300px; width:200px;"><i class="fas fa-arrow-right" ></i>REZERVASYON YAP</button></a>
        </div>

    </section>
    <section class="bolum2">

        <h4 style=" color: #00bb8c; text-align:center; padding-top:100px;
        font-family: 'Righteous', cursive; letter-spacing: 3px;">Hikayemiz</h4>
        <h1 style="color:rgb(39, 38, 38); font-family: 'Homemade Apple', cursive; text-align: center; font-weight:400; padding-top:25px"> Burger! Ba??ka Yerde Bulamazs??n??z.<br>Tek adres</h1>
        <div class="col-md-8" style="margin:5px auto; font-family: 'Arapey', serif; color:rgb(85, 85, 85)">
            <p style="text-indent:50px; padding-top:20px">Etkili senaryolar olmadan b??t??nsel olarak farkl?? b??y??me stratejileri ba??lat??n. Etkili bilgi arac??lar??n?? bire bir uygulamalarla co??kuyla geri y??kleyin. Kaynak seviyelendirme s??reci iyile??tirmeleri yoluyla platformlar aras?? temel yetkinlikeri
                iddial?? bir ??ekilde olu??turun. Zorunlu stratejik tema alanlar??n?? ve ger??ek zamanl?? e-hizmetleri nesnel olarak hayata ge??irin.</p>
        </div>
        <div class="col-md-12">
            <div class="efekt col-md-5" style="margin:40px auto;"><img src="resim/res.png" style="width:100%; height:100%;"></div>
        </div>
        <div class="col-md-8" style="margin:150px auto; margin-bottom: 2%;"><img src="resim/items.svg" style=" width:100%; height:100%;"></div>
        <div class="yukar??c??k">
            <a href="#ust"><i class="fa fa-angle-double-up" aria-hidden="true" style="margin:7px 11px; font-size:1.5rem; color: #006d52; "></i></a>
        </div>

    </section>
    <section class="bolum3">
        <div class="container-fluid secenek">
            <div class=row>
                <div class="card col-md-4 text-white">
                    <img class="card-img" src="resim/2.png" alt="Card image" style="float:right; right:0%">
                    <div class="card-img-overlay">
                        <h5 class="card-title" style="padding-top:100px; padding-bottom:70px;font-family: 'Righteous', cursive; font-size:30px;">BURGERS</h5>
                        <p class="card-text" style="padding-bottom:100px;font-family: 'Arapey', serif; font-size:20px;">??novasyonu etkinle??tirmeden ??nce bire bir pazarlardan g??venilir bir ??ekilde yararlan??n. Y??ksek verimli hizalamalar yaparken sinerjik olarak entegre topluluklar?? kulu??kaya yat??r??n.</p>
                        <button type="button" class="btn btn-outline-white" style="background-color:transparent; color:white; border:2px solid white;  font-family: 'Homemade Apple', cursive; ">Hepsini G??r</button>
                    </div>
                </div>
                <div class="card col-md-4 text-white">
                    <img class="card-img" src="resim/3.png" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title" style="padding-top:100px; padding-bottom:70px;font-family: 'Righteous', cursive;  font-size:30px;">ATI??TIRMALIK</h5>
                        <p class="card-text" style="padding-bottom:70px; font-family: 'Arapey', serif; font-size:20px;">
                            Kesintisiz d???? kaynak kullan??m?? yoluyla 24/365 avantajlar??n?? yetkili bir ??ekilde tasavvur edin. Fosfloresan, birlikte ??al????abilir kaynaklarla ger??ek zamanl?? ili??kileri yeniden tan??mlay??n. verimli bir ??ekilde.</p>
                        <button type="button" class="btn btn-outline-white" style="background-color:transparent; color:white; border:2px solid white;  font-family: 'Homemade Apple', cursive; ">Hepsini G??r</button>
                    </div>
                </div>
                <div class="card col-md-4 text-white ">
                    <img class="card-img " src="resim/4.png" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title" style="padding-top:100px; padding-bottom:70px; font-family: 'Righteous', cursive; font-size:30px;">????ECEKLER</h5>
                        <p class="card-text" style="padding-bottom:105px; font-family: 'Arapey', serif;font-size:20px; ">
                            ??stemci tabanl?? kalite vekt??rleri arac??l??????yla i??birlik??i a??lar?? ??nemli ??l????de te??vik edin. ??nde gelen modellerden sonra sorunsuz uygulamalar?? uygun ??ekilde d??n????t??r??n.</p>
                        <button type="button" class="btn btn-outline-white" style="background-color:transparent; color:white; border:2px solid white;  font-family: 'Homemade Apple', cursive; ">Hepsini G??r</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <seciton class="bolum3">
        <div class="container-fluid resimbolum">

        </div>
    </seciton>
    <seciton class="bolum4">
        <div class="container-fluid bolumdort ">
            <h3 style="color: #00bb8c; text-align:center;  font-family: 'Homemade Apple', cursive; font-weight:350 ;">En iyi kalite</h3>
            <h2 style="color:white; font-weight: 500; text-shadow: 3px -2px 1px #000; text-align: center; font-family: 'Righteous', cursive;
            letter-spacing: 7px;">????indekiler</h2>
            <div class="container-fluid alt">
                <div class="row">

                    <div class=" col-md-4">
                        <ul class="birincil">
                            <li>
                                <h4 style="color: #006d52; padding-top:50px"><i class="fa fa-check-circle" aria-hidden="true"></i>TAZE ET</h4>
                                <p>Etlerimizi s??rekli yenileyip ??ok bekletmemeye ??zen g??steririz.</p>
                            </li>
                            <li style="margin-left:50px;">
                                <h4 style="color: #006d52; padding-top:50px; "><i class="fa fa-check-circle" aria-hidden="true"></i>GLUTENS??Z ????rekler</h4>
                                <p>Sa??l??????n??z g??vence alt??nda</p>
                            </li>

                            <li>
                                <h4 style="color: #006d52; padding-top:50px"><i class="fa fa-check-circle" aria-hidden="true"></i>AZ YA??LI</h4>
                                <p>??zellikle dikkat ederiz.</p>
                            </li>
                        </ul>

                    </div>
                    <div class="iki col-md-4">
                        <img src="resim/section-3.jpg" style="width:100%; height:100%;  padding-top:50px"></img>
                    </div>

                    <div class=" col-md-4">
                        <ul class="ikincil">
                            <li style="margin-left:50px;">
                                <h4 style="color: #006d52; padding-top:50px"><i class="fa fa-check-circle" aria-hidden="true"></i>BURGER ????rekler</h4>
                                <p>Yeni tadlar??m??z?? deneyin kendi ??retimimizden olup ba??ka hi??bir yerde tadamazs??n??z.</p>
                            </li>
                            <li>
                                <h4 style="color: #006d52; padding-top:50px; "><i class="fa fa-check-circle" aria-hidden="true"></i>TAZE SEBZELER</h4>
                                <p>??zellikle kendimizin yeti??tirdi??i sebzelerimizi sizlere sunmaktan k??van?? duyar??z.</p>
                            </li>

                            <li style="margin-left:50px;">
                                <h4 style="color: #006d52; padding-top:50px"><i class="fa fa-check-circle" aria-hidden="true"></i>DANA KIYMA</h4>
                                <p>K??ylerimizde yeti??en organik besinlerle beslenen hayvanlar??m??zdan.</p>
                            </li>
                        </ul>

                    </div>

                </div>


            </div>


        </div>
    </seciton>
    <section class="bolumbes container-fluid ">
        <div class="container pb-3">
            <div class="row">

                <div class="col-md-6 ">
                    <h4 style=" color: #00bb8c; padding-top:100px;
                    font-family: 'Homemade Apple', cursive; letter-spacing: 3px;"><b>Men??m??z</b></h4>
                    <h3 class="pt-3" style="color:white; font-family: 'Righteous', cursive; letter-spacing: 3; ">At????t??rmal??klar</h3>
                    <ul class="p-0" style="list-style:none; position: relative; ">
                        <span class="">
                            <li class="bir" style="color: #00bb8c; text-align:center; padding-top:70px; 
                            font-family: 'Righteous', cursive; letter-spacing: 3px; font-size:medium; font-weight: 300; position: relative;">SOS??SL?? SANDV????<span class="" style="color:rgb(255, 255, 255)">................................$9.00</span></li>
                        </span>
                        <span>  <img class="bresim" src="resim/3.png" style="display:none;position:absolute;  top:70px; right:-100px; width:150px; height:150px; "></span>
                        <p style="color:rgb(175, 173, 173);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>






                        <span><li class="iki" style="color: #00bb8c; text-align:center; padding-top:70px;
                        font-family: 'Righteous', cursive; letter-spacing: 3px; font-size:medium; font-weight: 300; position: relative;">TAVUK D??R??M<span class="" style="color:rgb(255, 255, 255)">................................$9.00</span></b>
                        </li>
                        </span>
                        <span>  <img class="cresim" src="resim/2.png"  style="display:none;position:absolute;  top:200px; right:-100px; width:150px; height:150px; "></span>
                        <p style="color:rgb(175, 173, 173)">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>



                        <span class="">
                        <li class="??c" style="color: #00bb8c; text-align:center; padding-top:70px;
                        font-family: 'Righteous', cursive; letter-spacing: 3px; font-size:medium; font-weight: 300; position: relative;">P??R??N?? KABI<span class="" style="color:rgb(255, 255, 255)">................................$9.00</span></b>
                        </li>
                        </span>
                        <span><img class="dresim" src="resim/1.png"  style="display:none; position:absolute;  top:360px; right:-100px; width:150px; height:150px; "></span>
                        <p style="color:rgb(175, 173, 173)">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>


                        <span class="">
                        <li class="dort" style="color: #00bb8c; text-align:center; padding-top:70px;
                        font-family: 'Righteous', cursive; letter-spacing: 3px; font-size:medium; font-weight: 300; position: relative;">EV SALATASI<span class="" style="color:rgb(255, 255, 255)">................................$9.00</span></b>
                        </li>
                        </span>
                        <span>  <img class="eresim" src="resim/beverage-1.png"  style="display:none; position:absolute;  top:520px; right:-105px; width:80px; height:150px; "></span>
                        <p style="color:rgb(175, 173, 173)">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>


                    </ul>
                </div>
                <div class="col-md-6 pl-3" style="padding-top:140px;">
                    <img src="resim/burger.png" style="height:90%">
                </div>
            </div>

        </div>
    </section>


    <section class="bolumalt??">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="padding-top:20%; ">
                    <h1 style="color:white; font-family: 'Righteous', cursive;  float:left;">??OK FAAAAAST</h1><br><br><br>
                    <h1 style="color:white; font-family: 'Righteous', cursive; float:left; "> TESL??MAT!</h1><br><br><br><br>
                    <h6 style=" font-family: 'Homemade Apple', cursive; color:rgb(250, 248, 248); font-weight: 500;">Ailenizle birlikte yedi??inizde G??da Tad?? Daha ??yi</h6><br><br>
                    <button type="button" class="iletisim btn btn-lg " style="background-color: #00bb8c; font-family: 'Righteous', cursive; color: #ffffff; text-align:center;">??LET??????ME GE??</button>
                </div>
                <div class="col-md-6" style="padding-top:15%; ">
                    <img src="resim/delivery.svg " style="width:90%; height:90%">
                </div>
            </div>

        </div>
    </section>

    <section class="bolumyedi ">
        <div class="container">
            <div class="row">
                <div class="col-md-5" style="padding-top:20%; ">
                    <ul>
                        <h3 class="pb-4">Adres:</h3><br><br><br>
                        <li>North America</li><br>
                        <li>795 Folsom Ave, Suite 600</li><br>
                        <li class="pb-4"><?php echo $uruncek['adres'] ?></li><br><br><br>
                    </ul>
                    <ul>
                        <h3>Email:</h3><br><br>
                        <li class="pb-4"><?php echo $uruncek['email'] ?></li><br><br><br>

                    </ul>
                    <ul>
                        <h3>Telefon No:</h3><br><br>
                        <li class="pb-4"><?php echo $uruncek['tel_no'] ?></li><br><br><br>

                    </ul>
                    <ul>
                        <h3>??al????ma Saatleri:</h3><br><br>
                        <li><?php echo $uruncek['cal??sma_saatleri'] ?></li>
                        <li>PAZAR TAT??L</li>

                    </ul>
                </div>
                <div class="col-md-7" style="padding-top:15%;">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1vn1mMw6VoBixYa43Rmy2OO2-ytxg63uR&ehbc=2E312F" width="100%" height="100%" style="box-shadow:4px 4px 4px rgb(255, 255, 255); "></iframe>
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
                    <p style="color:rgb(185, 185, 185); font-family: 'Righteous', cursive; ">Cafemiz 2020 y??l??nda hizmetinize sunulup bug??ne kadar...</p>
                </div>

            </div>

        </div>

        <div class="container yaziiki ">
            <div class="row">
                <div class="col-md-3">
                    <ul>
                        <h5>KATEGOR??LER</h5>

                        <li> <a href="anasayfa">Anasayfa</a></li>
                        <li><a href="">Hakk??m??zda</a></li>
                        <li><a href="restaurant">Restaurantlar??m??z</a></li>
                        <li><a href="">??leti??im</a></li>

                    </ul>
                </div>

                <div class="col-md-9">

                    <ul>
                        <h5>MEN??</h5>
                        <li><a href="burgerler">Burgerlerimiz</a></li>
                        <li><a href="">Pizza ??esitleri</a></li>
                        <li><a href="">So??uk i??icekler</a></li>
                        <li><a href="">S??cak i??icekler</a></li>
                    </ul>
                </div>
            </div>
        </div>


        </div>


        <div class="container-fluid footer">
            <div class="container cizz">
                <div class="row">
                    <div class="col-md-4" style="padding-top:40px">
                        <h6 style="color:white; font-family: 'Courier New', Courier, monospace;">Copyrights ?? 2022</h6>
                        <h6 style="color:white; font-family: 'Courier New', Courier, monospace; ">T??m yasal haklar sakl??d??r.</h6>
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