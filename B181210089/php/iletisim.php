<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilgileriniz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/iletisimphp.css">
</head>

<body>

<div id="navbar">
        <nav class="navbar navbar-expand-md justify-content-end justify-content-between">
            
            <h1 id="navbaslik" class="text-white">Anasayfa</h1>
            
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a href="../index.html" class="nav-link">Anasayfa</a>
                </li>

                <li class="nav-item">
                    <a href="../ozgecmis.html" class="nav-link">Özgeçmiş</a>
                </li>
        
                <li class="nav-item">
                    <a href="../sehrim.html" class="nav-link">Şehrim</a>
                </li>
        
                <li class="nav-item">
                    <a href="../takimimiz.html" class="nav-link">Takımımız</a>
                </li>
        
                <li class="nav-item">
                    <a href="../login.html" class="nav-link">Giriş Yap</a>
                </li>
        
                <li class="nav-item">
                    <a href="../iletisim.html" class="nav-link">İletişim</a>
                </li>
        
            </ul>
        </nav>
    </div>

    <div class="font-weight-bold p-5 bg-success justify-content-center"  >
    <?php

        $gelenAd = $_POST["name"];
        $gelenSoyad = $_POST["surname"];
        $gelenMail = $_POST["email"];
        $gelenCinsiyet = $_POST["gender"];
        $gelenHobi = $_POST["hobi"];
        $gelenEgitim = $_POST["egitim"];
        $gelenMesaj = $_POST["message"];

        echo "Adınız : " . $gelenAd . "<br />";
        echo "Soyadınız : " . $gelenSoyad . "<br />";
        echo "Mail Adresiniz : " . $gelenMail . "<br />";
        echo "Cinsiyetiniz : " . $gelenCinsiyet . "<br />";

        echo "Hobileriniz : "; 
        foreach($gelenHobi as $Bilgiler){
        echo $Bilgiler . "<br />";
        }

        echo "Eğitim Durumunuz : " . $gelenEgitim . "<br />";
        echo "Mesajınız : " . $gelenMesaj . "<br />";

    ?>
    </div>
    
</body>

</html>