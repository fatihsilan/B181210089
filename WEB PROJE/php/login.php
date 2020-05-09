<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
</head>

<body>
<?php
     $password = $_POST['password'];

        if($password == "7355608")
        {

            echo "hoşgeldiniz";
            echo $_POST["email"];
            echo "&nbsp";
            
        }

    ?>
</body>
</html>