<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/loginphp.css">
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

    <div class="font-weight-bold p-5 bg-success justify-content-center">

    <br>

    <?php
            $password = $_POST['password'];

                if($password != "7355608")
                {
                    header("Location: ../login.html");
                    exit();
                }

                if($password == "7355608")
                    {

                        echo "HOŞGELDİNİZ" . "<br/>";

                        echo "&nbsp";

                        echo $_POST["email"];
            
                    }


        ?>

    </div>
        
    

</body>
</html>