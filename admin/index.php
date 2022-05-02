<?php include_once './dashboard/data/php/auth.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa</title>
    <link rel="stylesheet" href="./dashboard/data/css/resets.css">
    <link rel="stylesheet" href="./dashboard/data/css/style.css">
    <link rel="shortcut icon" href="./dashboard/data/img/favicon/icon.ico">
    <link rel="icon" type="image/png" href="./dashboard/data/img/favicon/icon.png">
</head>
<body>
    <div class="login">
        <section>
            <a href="./" class="logoNL"></a>
            <p class="error">
                <?php 
                    if($error != ""){
                        echo $error;
                    }
                ?>
            </p>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="user" id="user" placeholder="Usúario" autocomplete="off">
                <input type="password" name="pass" id="pass" placeholder="Senha" autocomplete="off">
                <input type="submit" name="sub" id="sub" value="Entrar">
            </form>
        </section>
    </div>
</body>
</html>